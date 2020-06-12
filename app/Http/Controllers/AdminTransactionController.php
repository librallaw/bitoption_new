<?php

namespace App\Http\Controllers;

use App\Transaction;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class AdminTransactionController extends Controller
{
    //

    public function approve_deposit_transaction($reference)
    {
        $transaction =  Transaction::where('reference',$reference)->first();
        $transaction -> status = 1;
        $transaction -> save();

        $user = User::where("id",$transaction->user->id)->first();
        $user->balance = $user->balance + $transaction->amount;
        $user ->save();


        return Redirect::back()->with("message","Transaction approved and user account credited")->with("type","success");
    }


    public function approve_withdraw_transaction($reference)
    {
        $transaction =  Transaction::where('reference',$reference)->first();

        $user = User::where("id",$transaction->user->id)->first();

        if($user->balance < $transaction->amount){
            return Redirect::back()->with("message","Insufficient balance")->with
            ("type","danger");
            exit;
        }

        $transaction -> status = 1;
        $transaction -> save();

        $user->balance = $user->balance - $transaction->amount;
        $user ->save();


        return Redirect::back()->with("message","Transaction approved and user account has been debited")
            ->with("type","success");
    }




    public function credit_user(Request $request)
    {

        $user = User::where("id",$request->id)->first();

        $transaction  =  new Transaction();
        $transaction ->amount = $request->amount;
        $transaction ->channel = $request->type;
        $transaction ->reference = time();
        $transaction ->created_time = time();
        $transaction ->user_id = $request->id;
        $transaction ->type = 1;
        $transaction ->channel = "bitcoin";
        $transaction -> status = 1;

        $transaction -> save();


        $user->balance = $user->balance + $transaction->amount;
        $user ->save();


        return Redirect::back()->with("message","User account Credit Successfully")
            ->with("type","success");
    }


    public function debit_user(Request $request)
    {

        $user = User::where("id",$request->id)->first();

        $transaction  =  new Transaction();
        $transaction ->amount = $request->amount;
        $transaction ->channel = $request->type;
        $transaction ->reference = time();
        $transaction ->created_time = time();
        $transaction ->user_id = $request->id;
        $transaction ->channel = "bitcoin";
        $transaction ->type = 1;

        $transaction -> status = 0;
        $transaction -> save();

        $user->balance = $user->balance - $transaction->amount;
        $user ->save();


        return Redirect::back()->with("message","User account debitted Successfully")
            ->with("type","success");
    }




}
