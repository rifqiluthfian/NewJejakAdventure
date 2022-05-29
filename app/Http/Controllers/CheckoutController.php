<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\TransactionDetail;
use App\Models\TravelPackage;

use Carbon\Carbon;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

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
            'username_travel'=> $travel_package->username,
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

        $transaction = Transaction::findOrFail($id);
        $transaction->transaction_status = 'PENDING';
        $transaction->save(); 
        return view('pages.success');
    }
}
