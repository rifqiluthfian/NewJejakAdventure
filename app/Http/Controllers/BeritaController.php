<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index(Request $request){
        return view('pages.menuberita');
    }

    public function detailberita(Request $request){
        return view('pages.detailberita');
    }
}
