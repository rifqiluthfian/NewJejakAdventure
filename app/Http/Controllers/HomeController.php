<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TravelPackage;
use App\Models\News;

class HomeController extends Controller
{
    public function index(Request $request){
        $items = TravelPackage::with(['galleries'])->take(3)->get();
        $news = News::with(['galleriesnews'])->latest()->take(3)->get();
        return view('pages.home',[
            'items' => $items,
            'news' => $news
        ]);
    }

}
