<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;


class StatusTransactionController extends Controller
{
    public function index(Request $request){
        $user = $request->user()->username;
        $items = Transaction::with([
            'details','travel_package','user'
        ])->where('username', $user)->get();
       
        return view('pages.statustransaction',
        [ 'items' =>$items]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = Transaction::with([
            'details','travel_package','user'
        ])->findOrFail($id);
        
        return view ('pages.travelagent.transaction.detail',[
            'item' => $item
        ]);
    }
}
