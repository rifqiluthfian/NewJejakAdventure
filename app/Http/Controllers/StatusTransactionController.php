<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;


class StatusTransactionController extends Controller
{
    public function index(Request $request)
    {
        $user = $request->user()->username;
        
        // $now = Carbon::now();

        // $transactionss = Transaction::join('travel_packages', 'transactions.travel_packages_id', '=', 'travel_packages.id')
        //     ->where('transactions.transaction_status', 'PAID')
        //     ->get();
            // ->where('transactions.updated_at', '>', 'travel_packages.departure_date')
            // ->update(['transactions.transaction_status' => 'SUCCESS']);
        
            // dd($transactionss);

        $transactions = Transaction::where('transaction_status', 'PENDING')
            ->where('username', $user)
            ->where('created_at', '<=', Carbon::now()->subHours(24))
            ->get();

        foreach ($transactions as $transaction) {
            $transaction->transaction_status = 'FAILED';
            $transaction->save();
        }

        

       
        $items = Transaction::with([
            'details', 'travel_package', 'user'
        ])->where('username', $user)->get();



        return view(
            'pages.statustransaction',
            ['items' => $items]
        );
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = Transaction::with([
            'details', 'travel_package', 'user'
        ])->findOrFail($id);

        return view('pages.transactiondetail', [
            'item' => $item
        ]);
    }
}
