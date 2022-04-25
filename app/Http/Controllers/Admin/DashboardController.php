<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TravelPackage;
use App\Models\Transaction;

class DashboardController extends Controller
{
    public function index(Request $request){
        return view('pages.admin.dashboard.index',[
            'travel_package' => TravelPackage::count(),
            'transaction' => Transaction::count(),
            'pending' => Transaction::where('transaction_status','PENDING')->count(),
            'success' => Transaction::where('transaction_status','SUCCESS')->count(),
        ]);
    }
}
