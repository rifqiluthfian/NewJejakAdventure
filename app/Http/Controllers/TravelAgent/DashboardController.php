<?php

namespace App\Http\Controllers\TravelAgent;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TravelPackage;
use App\Models\Transaction;

class DashboardController extends Controller
{

    public function index(Request $request){
        $user = $request->user()->username;
        
        if(!empty($request->start_date && $request->end_date))
        {
            $start_date = $request->start_date;
            $end_date = $request->end_date;

            $items = Transaction::whereDate('created_at','>=',"$start_date")
            ->whereDate('created_at','<=',"$end_date")
            ->get();

            $travel = TravelPackage::whereDate('created_at','>=',"$start_date")
            ->whereDate('created_at','<=',"$end_date")
            ->get();

            return view('pages.travelagent.dashboard.index',[
                'travel_package' => $travel->where('username', $user)->count(),
                'transaction' => $items->where('username_travel', $user)->count(),
                'pending' => $items->where('username', $user)->where('transaction_status','PENDING')->count(),
                'success' => $items->where('username', $user)->where('transaction_status','SUCCESS')->count()
              ]);

        }

        $user = $request->user()->username;
        $travel_package = TravelPackage::where('username', $user)->count();
        $transaction = Transaction::where('username_travel', $user)->count();
        $pending = Transaction::where('username_travel', $user)->where('transaction_status', 'PENDING')->count();
        $success = Transaction::where('username_travel', $user)->where('transaction_status', 'SUCCESS')->count();

        return view('pages.travelagent.dashboard.index',[
            'travel_package' => $travel_package,
            'transaction' => $transaction,
            'pending' => $pending,
            'success' => $success
        ]);
    }
}
