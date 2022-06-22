<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;

class GalleryController extends Controller
{
    public function index(){
        $items = Gallery::all();
        return view('pages.gallery',[
            'items' => $items
        ]);
    }
}
