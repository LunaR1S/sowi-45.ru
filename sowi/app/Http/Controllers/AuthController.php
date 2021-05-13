<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class AuthController extends Controller
{
    public function register(Request $request){
        $request->validate([
        'fio' => "required",
        'login' => "required|unique:users",
        'email' => "required|email|unique:users",
        'password' => "required|confirmed",
        'sogl' => "required"
        ]);

        $user = User::create($request->all());

        Auth::guard('web')->login($user,true);
        return redirect()->route('home');
    }

    public function login(Request $request){
        $request->validate([
            'login' => "required",
            'password' => "required",
        ]);

        $user = User::where('login' , $request->login)
        ->where('password' , $request->password)
        ->first();

        if(!$user)
         return redirect()->back();

        Auth::guard('web')->login($user , true);

        return redirect()->route('home');
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('home');
    }
}
