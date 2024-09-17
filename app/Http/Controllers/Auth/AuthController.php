<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
}
