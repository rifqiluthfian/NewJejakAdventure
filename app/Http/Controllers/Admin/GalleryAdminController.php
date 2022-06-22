<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gallery;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class GalleryAdminController extends Controller
{
    public function index (Request $request){
        $items = Gallery::all();
       
        return view('pages.admin.gallery.index',
        ['items' =>$items]);
    }

    public function create()
    {
        
        return view ('pages.admin.gallery.create');
    }

    public function store(Request $request)
    {
        $data['title'] = $request->title;
        $data['description'] = $request->description;
        $data['image'] = $request->file('image')->store(
            'assets/gallery','public'
        );
        Gallery::create($data);

        return redirect('admin/gallery');
    }

    public function edit($id)
    {
        $item = Gallery::findOrFail($id);
        return view ('pages.admin.gallery.edit',[
            'item' => $item
        ]);
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store(
                'assets/gallery','public'
            );
        }
        else{
            $data['image'] = null;
        }
        $item = Gallery::findOrFail($id);
        $item->update($data);
        return redirect('admin/gallery');
    }

    public function destroy($id)
    {
        $item = Gallery::findOrFail($id);
        $item->delete();
        sleep(1);
        return redirect('admin/gallery');
    }
    
}
