<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TravelPackage;
use App\Models\Transaction;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index(Request $request){
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

            return view('pages.admin.dashboard.index',[
                'travel_package' => $travel->count(),
                'transaction' => $items->count(),
                'pending' => $items->where('transaction_status','PENDING')->count(),
                'success' => $items->where('transaction_status','SUCCESS')->count()
              ]);

        }

        return view('pages.admin.dashboard.index',[
            'travel_package' => TravelPackage::count(),
            'transaction' => Transaction::count(),
            'pending' => Transaction::where('transaction_status','PENDING')->count(),
            'success' => Transaction::where('transaction_status','SUCCESS')->count(),
        ]);
       
    }

}
