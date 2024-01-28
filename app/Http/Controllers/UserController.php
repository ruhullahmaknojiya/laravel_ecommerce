<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function login(Request $request)
    {
        // return $request->input();
        // return User::where(['email'=>$request->email])->first();
        $user = User::where(['email' => $request->email])->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return "Username or Password Is Not Matched.";
        } else {
          $request->session()->put('user',$user);
            return redirect('/');
        }
    }
}
