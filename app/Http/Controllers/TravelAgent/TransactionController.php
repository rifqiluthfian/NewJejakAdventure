<?php

namespace App\Http\Controllers\TravelAgent;

use App\Http\Controllers\Controller;
use App\Http\Requests\TravelAgent\TransactionRequest;
use Illuminate\Http\Request;
use App\Models\Transaction;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;


class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index(Request $request){
        $user = $request->user()->travelagent_name;
        $items = Transaction::with([
            'details','travel_package','user'
        ])->where('travelagent_name', $user)->get();
       
        return view('pages.travelagent.transaction.index',
        [ 'items' =>$items]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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

        Transaction::create($data);
        return redirect('travelagent/transaction');
    }

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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Transaction::findOrFail($id);
        $travel_packages = Transaction::all();
        return view ('pages.travelagent.transaction.edit',[
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

        $item = Transaction::findOrFail($id);
        $item->update($data);
        return redirect('travelagent/transaction');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Transaction::findOrFail($id);
        $item->delete();
        sleep(1);
        return redirect()->route('transaction.index');
    }
}
