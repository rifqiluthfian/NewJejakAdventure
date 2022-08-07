<?php

namespace App\Http\Controllers\TravelAgent;

use App\Http\Controllers\Controller;
use App\Http\Requests\TravelAgent\GalleryRequest;
use Illuminate\Http\Request;
use App\Models\GalleryTravel;
use App\Models\TravelPackage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;


class GalleryTravelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index(Request $request){
        $user = $request->user()->username;
        $items = GalleryTravel::all()->where('username', $user);
       
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
        $this->validate($request,[
            'image' => 'required|image|mimes:jpeg,png,jpg|max:5000'
        ]);
        $data['image'] = $request->file('image')->store(
            'assets/gallery','public'
        );
      
        GalleryTravel::create($data);
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
    public function edit(Request $request, $id)
    {
        $user = $request->user()->username;
        $travel_packages = DB::select('select * from travel_packages WHERE username = :username AND deleted_at IS NULL', ['username' => $user]);
        $item = GalleryTravel::findOrFail($id);
        return view ('pages.travelagent.gallery.edit',[
            'item' => $item,
            'travel_packages' => $travel_packages
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
        $data = $request->all();

        $this->validate($request,[
            'image' => 'required|image|mimes:jpeg,png,jpg|max:5000'
        ]);
        
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store(
                'assets/gallery','public'
            );
        }

        $item = GalleryTravel::findOrFail($id);
        $item->update($data);
        return redirect()->route('gallery.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = GalleryTravel::findOrFail($id);
        $item->delete();
        sleep(1);
        return redirect()->route('gallery.index');
    }
}
