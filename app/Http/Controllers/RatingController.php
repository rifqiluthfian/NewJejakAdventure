<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class RatingController extends Controller
{
    public function rate(Request $request, $id)
    {
        $transaction = Transaction::find($id);

        $rating = 0;

        if ($request->star5) {
            $rating = 5;
        } else if ($request->star4){
            $rating = 4;
        } else if ($request->star3){
            $rating = 3;
        } else if ($request->star2){
            $rating = 2;
        } else if ($request->star1){
            $rating = 1;
        }

        $transaction->rating = $rating;
        $transaction->save();
        

        return redirect()->back()->with([
            'status' => 1,
            'message' => 'thank you for your rating'
        ]);

    }
}
