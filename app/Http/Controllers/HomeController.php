<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TravelPackage;

class HomeController extends Controller
{
    public function index(Request $request){
        $items = TravelPackage::with(['galleries'])->take(3)->get();
        return view('pages.home',[
            'items' => $items
        ]);
    }
}
