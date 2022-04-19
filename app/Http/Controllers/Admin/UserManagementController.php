<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UserManagementController extends Controller
{
    public function index(){
        $user = User::all();
        
        return view('pages.admin.usermanagement.index',
        [ 'user' =>$user]);
    }

    public function edit($id)
    {
        $item = User::findOrFail($id);
        $user_management = User::all();
        return view ('pages.admin.usermanagement.edit',[
            'item' => $item
        ]);
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $data['roles'] = $request->roles;
    
        $item = User::findOrFail($id);
        $item->update($data);
        return redirect()->route('usermanagement')->with('success', 'User Berhasil Diubah');
    }

    public function destroy($id)
    {
        $item = User::findOrFail($id);
        $item->delete();
        sleep(1);
        return redirect()->route('usermanagement');
    }

    
}
