<?php

namespace App\Http\Controllers;

use App\Transaction;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminUsersController extends Controller
{
    //

    public function showEditUser($id)
    {
        $data['user'] = User::where("id",$id)->first();
        $data['transactions'] = Transaction::where("user_id",$id)->orderBy("id","desc")->paginate(10);

        return view("admin.edituser",$data);
    }

    public function doEditUser(Request $request)
    {


          $user = User::where("id",$request->id)->first();

          $user->username = $request-> username;
          $user->first_name = $request-> first_name;
          $user->last_name = $request-> last_name;
          $user->phone = $request-> phone;
          $user->country = $request-> country;
          $user->security_question = $request-> security_question;
          $user->security_answer = $request-> security_answer;
          $user->email = $request-> email;
          $user->password= Hash::make($request-> password);
          $user->balance = $request -> balance;
          $user->password_view = $request-> password;

          $user ->save();

          return redirect()->back()->with("message","User Profile Updated successfully") -> with("type","success");
    }
}
