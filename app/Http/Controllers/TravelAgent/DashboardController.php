<?php

namespace App\Http\Controllers\TravelAgent;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TravelPackage;
use App\Models\Transaction;

class DashboardController extends Controller
{

    public function index(Request $request){
        $user = $request->user()->travelagent_name;
        
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
                'travel_package' => $travel->where('travelagent_name', $user)->count(),
                'transaction' => $items->where('travelagent_name', $user)->count(),
                'pending' => $items->where('travelagent_name', $user)->where('transaction_status','PENDING')->count(),
                'success' => $items->where('travelagent_name', $user)->where('transaction_status','SUCCESS')->count()
              ]);

        }

        $user = $request->user()->travelagent_name;
        $travel_package = TravelPackage::where('travelagent_name', $user)->count();
        $transaction = Transaction::where('travelagent_name', $user)->count();
        $pending = Transaction::where('travelagent_name', $user)->where('transaction_status', 'PENDING')->count();
        $success = Transaction::where('travelagent_name', $user)->where('transaction_status', 'SUCCESS')->count();

        return view('pages.travelagent.dashboard.index',[
            'travel_package' => $travel_package,
            'transaction' => $transaction,
            'pending' => $pending,
            'success' => $success
        ]);
    }
}
