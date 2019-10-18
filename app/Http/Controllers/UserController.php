<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    public function showDashboard()
    {
        return view("user.dashboard3");
    }


    public function showTransactions()
    {
        return view("transactions");
    }

    public function showPlans()
    {
        return view("user.plans");
    }

    public function showDeposit()
    {
        return view("deposit");
    }


    public function showDeposits()
    {
        return view("deposits");
    }


    public function showWithdraw()
    {
        return view("withdraw");
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
