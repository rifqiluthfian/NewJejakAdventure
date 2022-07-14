<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\TransactionSuccess;
use App\Models\Transaction;
use Illuminate\Support\Facades\Mail;
use Midtrans\Config;
use Midtrans\Notification;



class MidtransController extends Controller
{
    public function notificationHandler(Request $request){

   //Set konfigurasi midtrans

        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = 'Mid-server-rDGgyGLDnGzRIkdCob7RV8vf';
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = true;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;


        // Make instance midtrans transaction
        $notification = new Notification();

        //Assign to variable

        $order = explode('-',$notification->order_id);

        $status = $notification->transaction_status;
        $type = $notification->payment_type;
        $fraud = $notification->fraud_status;
        $order_id = $order[1];

        $transaction = Transaction::findOrFail($order_id);
        
        
        //Handle notification status midtrans
        if ($status == 'capture') {
            if($type == 'credit_card'){
                if($fraud == 'challenge' ){
                    $transaction->transaction_status = 'CHALLENGE';
                }
                else{
                    $transaction->transaction_status = 'PAID';

                }
            }
        }

        elseif ($status == 'settlement') {
            $transaction->transaction_status = 'PAID';

        }

        elseif ($status == 'pending') {
            $transaction->transaction_status = 'PENDING';

        }

        elseif ($status == 'deny') {
            $transaction->transaction_status = 'FAILED';

        }

        elseif ($status == 'expire') {
            $transaction->transaction_status = 'EXPIRED';

        }

        elseif ($status == 'cancel') {
            $transaction->transaction_status = 'FAILED';

        }

        $transaction->save();

        if ($transaction) {
            if ($status == 'capture' && $fraud == 'accept') {
                Mail::to($transaction->user)->send(
                    new TransactionSuccess($transaction)
                );
            }

            elseif ($status == 'settlement') {
                Mail::to($transaction->user)->send(
                    new TransactionSuccess($transaction)
                );

                Mail::to($transaction->user_travel)->send(
                    new TransactionSuccess($transaction)
                );
                
            }

            elseif ($status == 'success') {
                Mail::to($transaction->user)->send(
                    new TransactionSuccess($transaction)
                );

                Mail::to($transaction->user_travel)->send(
                    new TransactionSuccess($transaction)
                );

            }
             elseif ($status == 'pending') {
               
            }

            elseif ($status == 'capture' && $fraud == 'challenge') {
                return response()->json([
                    'meta' => [
                        'code' => 200,
                        'message' =>'Midtrans Payment Challenge'
                       ]
                    ]);
              
            }

            else{
                return response()->json([
                    'meta' => [
                        'code' => 200,
                        'message' =>'Midtrans Payment Not Settlement'
                       ]
                    ]);
              
            }

            return response()->json([
                'meta' => [
                    'code' => 200,
                    'message' =>'Midtrans Notification Success'
                   ]
                ]);
            
        }


    }

  public function finishRedirect(Request $request){
    $order = $request->session()->get('key', 'default');
      
    $transaction = Transaction::with(['details','travel_package','user'])->findOrFail($order);
    if ($transaction->transaction_status == 'PENDING') {
        return view('pages.unfinish');
    }
    elseif ($transaction->transaction_status == 'PAID') {
        return view('pages.success');
    }
    else {
        return view('pages.error');
        }
    }

    public function unfinishRedirect(Request $request){
        
        return view('pages.unfinish');
    }

    public function errorRedirect(Request $request){
        return view('pages.failed');
    }
    
    
}
