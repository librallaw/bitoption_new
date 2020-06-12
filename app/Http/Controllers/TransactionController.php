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
           'reference' => 'required',
           'type' => 'required'
        ]);


        $transaction  =  new Transaction();
        $transaction ->amount = $request->amount;
        $transaction ->channel = $request->type;
        $transaction ->reference = $request->reference;
        $transaction ->created_time = time();
        $transaction ->user_id = Auth::user()->id;
        $transaction ->type = 1;

        $transaction -> save();

        return Redirect::back()->with("message","Deposit successfull")
            ->with("type","success");

    }




    public function withdraw(Request $request)
    {
        $request->validate([
            'amount' => 'required',
            'answer' => 'required'
        ]);


        if(strtolower($request->answer) != strtolower(Auth::user()->security_answer)){
            return Redirect::back()->with("message","We couldn't validate your account info, please try again")
                ->with("type","danger");
            exit;
        }


        if(strtolower($request->amount) > Auth::user()->balance){
            return Redirect::back()->with("message","Insufficient funds")
                ->with("type","danger");
            exit;
        }


        $transaction  =  new Transaction();
        $transaction -> amount = $request->amount;
        $transaction -> reference = md5(Auth::user()->email.time());
        $transaction -> created_time = time();
        $transaction ->channel = $request->type;
        $transaction -> user_id = Auth::user()->id;
        $transaction -> type = 0;

        $transaction -> save();

        return Redirect::back()->with("message","Withdrawal successfully queued")
            ->with("type","success");

    }
}
