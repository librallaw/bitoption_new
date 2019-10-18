<?php

namespace App\Http\Controllers;

use App\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class TransactionController extends Controller
{
    //

    public function deposit(Request $request)
    {
        $request->validate([
           'amount' => 'required',
           'reference' => 'required'
        ]);


        $transaction  =  new Transaction();
        $transaction ->amount = $request->amount;
        $transaction ->reference = $request->reference;
        $transaction ->created_time = time();
        $transaction ->user_id = Auth::user()->id;
        $transaction ->type = 1;

        $transaction -> save();

        return Redirect::back()->with("message","Deposit successfull")->with("type","success");

    }
}
