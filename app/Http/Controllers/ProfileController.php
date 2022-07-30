<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class ProfileController extends Controller
{
    public function index(Request $request){
        $id = Auth::user()->id;
        $item = User::findOrFail($id);
        return view('pages.profile',
        [
            'item'=>$item
        ]);
    }

    public function edit(Request $request){
        $id = Auth::user()->id;
        $item = User::findOrFail($id);
        return view('pages.profileEdit',
        [
            'item'=>$item
        ]);
    }

    public function update(Request $request)
    {
        $data = $request->all();
        $id = Auth::user()->id;
        $item = User::findOrFail($id);
        $item->update($data);
        return redirect('/profile');
    }

}
