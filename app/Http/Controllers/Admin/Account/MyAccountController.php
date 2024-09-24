<?php

namespace App\Http\Controllers\Admin\Account;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class MyAccountController extends Controller
{
    public function myAccount(){
        $data = User::find(Auth::user()->id);

        return view('Admin.Account.update' , compact('data'));
    }

    public function updateAccount(Request $request){
        $user = request()->validate([
            'email'=>'unique:users,email,' . Auth::user()->id
        ]);
        $user = User::find(Auth::user()->id);
        if(!empty($request->name)){
            $user->name = $request->name;
        }
        if(!empty($request->email)){
            $user->email = $request->email;
        }
        if(!empty($request->password)){
            $user->password = Hash::make($request->password);
        }
        $user->save();
        return redirect()->route('dashboard')->with('success','Your Account Successfully Updated!');
    }
}
