<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request){
        return view("Auth.login");
    }

    public function register(Request $request){
        return view("Auth.register");
    }

    public function forgot(){
        return view("Auth.forgot");
    }

    public function store(Request $request){

        $user = request()->validate([
            "name" =>"required|min:3",
            "email"=> "required|email|unique:users",
            "password"=> "required|min:6",
            ]);

        $user = new User();
        $user->name = trim($request->name);
        $user->email = trim($request->email);
        $user->password = Hash::make($request->password);
        $user->remember_token = Str::random(50);
        $user->save();

        return redirect()->route('login')->with("success","Your account successfully created!");
    }
}
