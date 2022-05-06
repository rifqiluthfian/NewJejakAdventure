<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TravelPackage;

class MenuTripController extends Controller
{
    public function index(Request $request){
        $items = TravelPackage::with(['galleries'])->get();
        return view('pages.menutrip',[
            'items' => $items
        ]);
    }
}
