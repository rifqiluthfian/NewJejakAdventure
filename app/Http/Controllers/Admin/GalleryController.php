<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gallery;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class GalleryController extends Controller
{
    public function index (Request $request){
        return view('pages.gallery');
    }
}
