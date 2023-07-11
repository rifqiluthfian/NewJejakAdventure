<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TravelPackage;
use App\Models\News;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(Request $request){

        $notYetRatedByUser = Auth::user() ? Auth::user()->notYetRated : null;

        $items = TravelPackage::with(['galleries'])->orderBy('departure_date', 'desc')->latest()->take(3)->get();

        $news = News::with(['galleriesnews'])->latest()->take(3)->get();

        return view('pages.home',[
            'items' => $items,
            'news' => $news,
            'notYetRatedByUser' => $notYetRatedByUser
        ]);
    }

}
