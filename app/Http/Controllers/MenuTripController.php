<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TravelPackage;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class MenuTripController extends Controller
{
    public function index(Request $request){

        // print_r($request->tgl_bulan_dr);
        // exit();

        $notYetRatedByUser = Auth::user() ? Auth::user()->notYetRated : null;

        $travels = Auth::user() ?
            TravelPackage::with(['galleries', 'lastTransaction'])->withCount('notYetRated') :
            TravelPackage::with(['galleries']);

        if(!empty($request->tgl_bulan_dr && $request->tgl_bulan_sd && $request->title))
        {
            $items = $travels->whereBetween('departure_date', array($request->tgl_bulan_dr, $request->tgl_bulan_sd))
                ->filter(request(['title']))
                ->get();
        }

        elseif (!empty($request->tgl_bulan_dr && $request->tgl_bulan_sd))
        {
            $items = $travels->whereBetween('departure_date', array($request->tgl_bulan_dr,$request->tgl_bulan_sd))
                ->get();
        }

        elseif (!empty($request->tgl_bulan_dr && $request->title) )
        {
            $items = $travels->where('departure_date', ($request->tgl_bulan_dr))
                ->filter(request(['title']))
                ->get();
        }
        elseif (!empty($request->tgl_bulan_dr))
        {
            $items = $travels->where('departure_date', ($request->tgl_bulan_dr))
                ->get();
        }

        elseif (!empty($request->title))
        {
            $items = $travels->filter(request(['title']))
                ->get();
        }

        else
        {
            $items = $travels->orderBy('departure_date', 'desc')->latest()->get();
        }

        return view('pages.menutrip',[
            'items' => $items,
            'notYetRatedByUser' => $notYetRatedByUser
        ]);
    }
}
