<?php

namespace App\Http\Controllers;

use Mail;
use App\Mail\TransactionSuccess;
use App\Models\Transaction;
use App\Models\TransactionDetail;
use App\Models\TravelPackage;

use Carbon\Carbon;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Midtrans\Config;
use Midtrans\Snap;


class CheckoutController extends Controller
{
    public function index(Request $request,$id){

        $item = Transaction::with(['details','travel_package','user'])->findOrFail($id);
        return view('pages.checkout',([
            'item'=>$item
        ]));
        
    }


    public function process(Request $request,$id){
        $travel_package = TravelPackage::findOrFail($id);

        $transaction = Transaction::create([
            'travel_packages_id'=> $id,
            'username'=> Auth::user()->username,
            'travelagent_name'=> $travel_package->travelagent_name,
            'users_id'=>Auth::user()->id,
            'transaction_total' => $travel_package->price,
            'transaction_status'=>'IN_CART'

        ]);

        TransactionDetail::create([
            'transactions_id'=> $transaction->id,
            'username'=> Auth::user()->username,
            'no_identity'=>Auth::user()->no_identity,
            'no_phone'=>Auth::user()->no_phone
        ]);

        return redirect()->route('checkout',$transaction->id);
    }

    public function cancel($id){
        $transaction = Transaction::findOrFail($id);
        sleep(1);
        $transaction -> delete();

        return redirect()->route('home');
    }



    public function remove(Request $request,$detail_id){
        
        $item = TransactionDetail::findOrFail($detail_id);

        $transaction = Transaction::with(['details','travel_package'])
        ->findOrFail($item->transactions_id);

        $transaction->transaction_total 
            -= $transaction->travel_package->price;

        $transaction->save();
        $item->delete();

        return redirect()->route('checkout',$item->transactions_id);
    }



    public function create(Request $request,$id){
        $request->validate([
            'username'=> 'required|string',
            'no_identity' => 'required|numeric',
            'no_phone' => 'required|numeric'
        ]);

        $data = $request->all();
        $data['transactions_id'] = $id;

        TransactionDetail::create($data);

        $transaction = Transaction::with(['travel_package'])->find($id);

        $transaction->transaction_total 
            += $transaction->travel_package->price;

        $transaction->save();

        return redirect()->route('checkout',$id);
    }


     public function success(Request $request,$id){

        $transaction = Transaction::with(['details','travel_package.galleries','user','user_travel'])
        ->findOrFail($id);
        
        $request->session()->put('key', $id);


        //Set konfigurasi midtrans

        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = 'Mid-server-rDGgyGLDnGzRIkdCob7RV8vf';
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = true;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;

        //buat array ke midtrans
        $midtrans_params = [
            'transaction_details' => [
                'order_id' => 'ORDER-' . $transaction->id,
                'gross_amount' => (int) $transaction->transaction_total,
            ],
            'customer_details'=> [
                'name' => $transaction->user->name,
                'email' => $transaction->user->email
            ],
            'enabled_payments' => ['gopay'],
            'vtweb' => []
        ];


        try {
        // Get Snap Payment Page URL
        $paymentUrl = \Midtrans\Snap::createTransaction($midtrans_params)->redirect_url;
        
        // Redirect to Snap Payment Page
        header('Location: ' . $paymentUrl);
        }
        catch (Exception $e) {
        echo $e->getMessage();
        }
        
    }
}
