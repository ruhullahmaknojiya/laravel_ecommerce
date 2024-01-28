<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function login(Request $request)
    {
        // return $request->input();
        // return User::where(['email'=>$request->email])->first();
        $user= User::where(['email'=>$request->email])->first();
        // return $user->password;
        if(!$user || !Hash::check($request->password,$user->password))
        {
            return "Username or Password Is Not Matched.";
        }else{
            Session::put('user', $user);
            return redirect('/');
        }
    }
}
