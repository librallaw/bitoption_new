<?php

namespace App\Http\Controllers;

use App\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //

    public function showDashboard()
    {
        $data['balance'] = Auth::user()->balance;
        $data['last_deposit'] = Transaction::where("user_id",Auth::user()->id)->where('type',1)->where('status',1)->latest()->first();
        $data['last_withdrawal'] = Transaction::where("user_id",Auth::user()->id)->where('type',0)->where('status',1)
            ->orderby('updated_at','desc')->first();
        $data['transactions'] = Transaction::where("user_id",Auth::user()->id)->latest()->get();

        $data['total_withdrawal'] = Transaction::where("user_id",Auth::user()->id)->where('type',0)->where('status',1)->sum('amount');
        $data['total_deposit'] = Transaction::where("user_id",Auth::user()->id)->where('type',1)->where('status',1)->sum('amount');

        $data['active'] = "dashboard";
        return view("user.dashboard4",$data);
    }


    public function showTransactions()
    {
        $data['transactions'] = Transaction::where("user_id",Auth::user()->id)->latest()->get();
        return view("transactions",$data);
    }

    public function showPlans()
    {
        return view("user.plans");
    }

    public function showDeposit()
    {
        $data['deposits'] = Transaction::where("user_id",Auth::user()->id)->where('type',1)->latest()->take(6)->get();
        return view("deposit",$data);
    }


    public function showDeposits()
    {
        $data['deposits'] = Transaction::where("user_id",Auth::user()->id)->where('type',1)->latest()->get();

        $data['active'] = "deposit";
        return view("deposits4",$data);
    }


    public function showWithdraw()
    {
        $data['withdrawals'] = Transaction::where("user_id",Auth::user()->id)->where('type',0)->latest()->take(10)
            ->get();

        return view("withdraw",$data);
    }

    public function showWithdrawals()
    {
        $data['withdrawals'] = Transaction::where("user_id",Auth::user()->id)->where('type',0)->latest()->get();
        $data['active'] = "withdraw";

        return view("withdrawals4",$data);
    }


    public function showProfile()
    {
        return view("user.profile");
    }

    public function resetpwd()
    {
        return view("user.changePassword");
    }


    public function showHistory()
    {
        return view("user.history");
    }
}
