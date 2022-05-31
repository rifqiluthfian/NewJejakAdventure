<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class BeritaController extends Controller
{
    public function index(Request $request){
        $items = News::with(['galleriesnews'])->get();

        return view('pages.menuberita',[
            'items' => $items
        ]);
    }

    public function detailberita(Request $request){
        return view('pages.detailberita');
    }
}
