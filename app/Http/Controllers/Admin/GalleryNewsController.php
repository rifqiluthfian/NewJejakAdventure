<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;
use App\Models\GalleryNews;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;


class GalleryNewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index(Request $request){

        $items = GalleryNews::all();
       
        return view('pages.admin.gallerynews.index',
        [ 'items' =>$items]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $news_item = News::all();
        return view ('pages.admin.gallerynews.create',[
            'news_item' => $news_item
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'image' => 'required|image|mimes:jpeg,png,jpg|max:5000'
        ]);
        $data['news_id'] = $request->news_id;
        $data['image'] = $request->file('image')->store(
            'assets/gallery','public'
        );
        GalleryNews::create($data);
        return redirect()->route('gallerynews.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $news_item = News::all();
        $item = GalleryNews::findOrFail($id);
        return view ('pages.admin.gallerynews.edit',[
            'item' => $item,
            'news_item' => $news_item
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request ,$id)
    {
        $this->validate($request,[
            'image' => 'required|image|mimes:jpeg,png,jpg|max:5000'
        ]);
        $data = $request->all();
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store(
                'assets/gallery','public'
            );
        }

        $item = GalleryNews::findOrFail($id);
        $item->update($data);
        return redirect()->route('gallerynews.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = GalleryNews::findOrFail($id);
        $item->delete();
        sleep(1);
        return redirect()->route('gallerynews.index');
    }
}
