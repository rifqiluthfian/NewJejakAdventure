<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TravelPackage;
use Carbon\Carbon;

class MenuTripController extends Controller
{
    public function index(Request $request){
        
        if(!empty($request->tgl_bulan_dr && request()->tgl_bulan_sd && request()->title))
        {
            $items = TravelPackage::whereBetween('departure_date', array($request->tgl_bulan_dr, $request->tgl_bulan_sd))
            ->filter(request(['title']))
            ->with(['galleries'])
            ->get();
        }

        elseif (!empty($request->tgl_bulan_dr) && request()->title) 
        {
            $items = TravelPackage::where('departure_date', ($request->tgl_bulan_dr))
            ->filter(request(['title']))
            ->get();
        }
        elseif (!empty($request->tgl_bulan_dr)) 
        {
            $items = TravelPackage::where('departure_date', ($request->tgl_bulan_dr))
            ->get();
        }

        elseif (!empty($request->title)) 
        {
            $items = TravelPackage::with(['galleries'])
            ->filter(request(['title']))
            ->get();
        }

        else
        {
            $items = TravelPackage::with(['galleries'])->get();
        }
        
        return view('pages.menutrip',[
            'items' => $items
        ]);
    }
}
