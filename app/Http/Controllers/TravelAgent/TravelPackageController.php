<?php

namespace App\Http\Controllers\TravelAgent;

use App\Http\Controllers\Controller;
use App\Http\Requests\TravelAgent\TravelPackageRequest;
use Illuminate\Http\Request;
use App\Models\Travelpackage;
use App\Models\GalleryTravel;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;


class TravelPackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request){
        $user = $request->user()->username;
        $items = TravelPackage::all()->where('username',$user);
       
        return view('pages.travelagent.travelpackage.index',
        [ 'items' =>$items]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('pages.travelagent.travelpackage.create');
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
        
        $data['slug'] = Str::slug($request->title);
        $data['price']= Str::of($request->price)->replace('.', '');

        TravelPackage::create($data);
        return redirect('travelagent/travelpackage');
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
        $item = TravelPackage::findOrFail($id);
        $travel_packages = TravelPackage::all();
        return view ('pages.travelagent.travelpackage.edit',[
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
        $data['price']= Str::of($request->price)->replace('.', '');

        $item = TravelPackage::findOrFail($id);
        $item->update($data);
        return redirect('travelagent/travelpackage');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = TravelPackage::findOrFail($id);
        $item->delete();
        DB::delete('delete from galleries where travel_packages_id = ?', [$id]);
        DB::delete('delete from transactions where travel_packages_id = ?', [$id]);
        sleep(1);
        return redirect()->route('travelpackage.index');
    }
}

