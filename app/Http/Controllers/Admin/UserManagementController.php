<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UserManagementController extends Controller
{
    public function index(){
        $user = DB::table('users')->get();
        return view('pages.admin.usermanagement.index', compact('user'), ['management' => User::all()]);
    }
}
