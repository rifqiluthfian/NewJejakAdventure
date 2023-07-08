<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Documents;
use Carbon\Carbon;

class DocumentsController extends Controller
{
    public function index(Request $request){
        $items = Documents::all();
        return view('pages.admin.documents.index',
        [ 'items' =>$items]);
       
    }

    public function edit(Request $request,$id){
        $items = Documents::findOrFail($id);
        return view ('pages.admin.documents.edit',[
            'item' => $items,
        ]);
    }

    public function update(Request $request,$id){
        $data['status_identity'] = $request->status_identity;
        $data['status_nomer_rekening'] = $request->status_identity;
        $data['status_certificate'] = $request->status_certificate;
        $data['status_profile_instagram'] = $request->status_profile_instagram;
        $data['status_pengumpulan'] = $request->status_pengumpulan;
    
        $item = Documents::findOrFail($id);
        $item->update($data);
        return redirect()->route('documents.index')->with('success', 'User Berhasil Diubah');
    }
    public function destroy($id)
    {
        $item = Documents::findOrFail($id);
        $item->delete();
        sleep(1);
        return redirect('admin/documents');
    }

}
