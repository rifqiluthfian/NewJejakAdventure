<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TravelPackage;
use App\Models\Transaction;
use App\Models\User;

class DashboardController extends Controller
{
    public function index(Request $request){
        return view('pages.admin.dashboard.index',[
            'user' => User::count(),
            'travel_package' => TravelPackage::count(),
            'transaction' => Transaction::count(),
            'travel_agent' => User::where('roles','TRAVELAGENT')->count(),
            'pending' => Transaction::where('transaction_status','PENDING')->count(),
            'success' => Transaction::where('transaction_status','SUCCESS')->count(),
        ]);
    }
}
