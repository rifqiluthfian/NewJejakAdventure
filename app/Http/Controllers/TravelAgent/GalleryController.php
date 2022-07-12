<?php

namespace App\Http\Controllers\TravelAgent;

use App\Http\Controllers\Controller;
use App\Http\Requests\TravelAgent\GalleryRequest;
use Illuminate\Http\Request;
use App\Models\Gallery;
use App\Models\TravelPackage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;


class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index(Request $request){
        $user = $request->user()->username;
        $items = Gallery::with(['travel_package'])->get();
       
        return view('pages.travelagent.gallery.index',
        [ 'items' =>$items]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $user = $request->user()->username;
        $travel_packages = DB::select('select * from travel_packages WHERE username = :username AND deleted_at IS NULL', ['username' => $user]);
        return view ('pages.travelagent.gallery.create',[
            'travel_packages' => $travel_packages
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
        $data = $request->all();
        $data['image'] = $request->file('image')->store(
            'assets/gallery','public'
        );
        Gallery::create($data);
        return redirect()->route('gallery.index');
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
        $item = Gallery::findOrFail($id);
        return view ('pages.travelagent.gallery.edit',[
            'item' => $item
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        
        $data['slug'] = Str::slug($request->title);

        $item = Gallery::findOrFail($id);
        $item->update($data);
        return redirect('travelagent/gallery');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Gallery::findOrFail($id);
        $item->delete();
        sleep(1);
        return redirect()->route('gallery.index');
    }
}
