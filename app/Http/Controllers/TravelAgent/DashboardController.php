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
