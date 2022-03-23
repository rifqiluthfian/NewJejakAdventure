<?php

namespace App\Http\Controllers\TravelAgent;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request){
        return view('pages.travelagent.dashboard');
    }
}
