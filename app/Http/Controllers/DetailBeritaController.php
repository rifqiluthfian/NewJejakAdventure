<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class DetailBeritaController extends Controller
{
    public function index(Request $request,$id){
        $item = News::with(['galleriesnews'])->where('id',$id)->firstOrFail();
        return view('pages.detailberita',[
            'item'=>$item
        ]);
    }
}
