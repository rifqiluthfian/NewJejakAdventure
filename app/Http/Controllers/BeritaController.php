<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class BeritaController extends Controller
{
    public function index(Request $request){
        $items = News::with(['galleriesnews'])->orderBy('date', 'desc')->latest()->skip(1)->take(PHP_INT_MAX)->get();
        $news = News::with(['galleriesnews'])->orderBy('date', 'desc')->latest()->take(1)->get();

        return view('pages.menuberita',[
            'news' =>$news,
            'items' => $items
        ]);
    }
}
