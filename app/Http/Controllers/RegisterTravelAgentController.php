<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Documents;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class RegisterTravelAgentController extends Controller
{
    public function index(Request $request){

        return view('pages.registerta');
    }

    public function store(Request $request){

        if($request->hasFile('certificate')){
            $data['certificate'] = $request->file('certificate')->store(
                'assets/gallery','public'
            );
        }
        else{
            $data = null;
        }
        $id = Auth::user()->id;
        $name['travelagent_name'] = $request->travel_agent_name;
        $data['users_id'] = $id;
        $data['identity'] = $request->file('img_identity')->store(
            'assets/gallery','public'
        );

        $data['nomer_rekening'] = $request->file('no_rekening')->store(
            'assets/gallery','public'
        );
       
        $data['profile_instagram'] = $request->file('profile_instagram')->store(
            'assets/gallery','public'
        );
      
        $item = User::findOrFail($id);
        $item->update($name);
        Documents::create($data);
        return redirect()->route('registerta.success');
    }

    public function status(Request $request){
        $id = Auth::user()->id;
        $items = Documents::all()->where('users_id', $id);
       
        return view('pages.statusregisterta',[
            'travelagent_name' => User::where('id', $id)->value('travelagent_name'),
            'no_identity' => Documents::where('users_id', $id)->value('identity'),
            'no_rekening' => Documents::where('users_id', $id)->value('nomer_rekening'),
            'certificate' => Documents::where('users_id', $id)->value('certificate'),
            'profile_instagram' => Documents::where('users_id', $id)->value('profile_instagram'),
            'status_identity' => Documents::where('users_id', $id)->value('status_identity'),
            'status_nomer_rekening' => Documents::where('users_id', $id)->value('status_nomer_rekening'),
            'status_certificate' => Documents::where('users_id', $id)->value('status_certificate'),
            'status_profile_instagram' => Documents::where('users_id', $id)->value('status_profile_instagram')
          ]);
    }

    public function update(Request $request){
        if($request->hasFile('certificate')){
            $data['certificate'] = $request->file('certificate')->store(
                'assets/gallery','public'
            );
        }
        else{
            $data = null;
        }
        $id = Auth::user()->id;
        $data['identity'] = $request->file('img_identity')->store(
            'assets/gallery','public'
        );

        $data['nomer_rekening'] = $request->file('no_rekening')->store(
            'assets/gallery','public'
        );
       
        $data['profile_instagram'] = $request->file('profile_instagram')->store(
            'assets/gallery','public'
        );
      
        $item = Documents::findOrFail($id);
        $item->update($data);

        return redirect()->route('registerta.status');
    }

    public function success(){
        return view('pages.successupload');
    }
}
