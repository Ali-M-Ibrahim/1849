<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function signup()
    {
        return view('auth.signup');
    }
    public function register(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed',
        ]);

        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->save();
        return "ok user created successfully";
    }

    public function login(){
        return view('auth.login');
    }

    public function doLogin(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if(Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])){
            return "ok user authenticat3d";
        }else{
            return "wrong email or password";
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }

    public function home(){
        if(Auth::check()){
            $user = Auth::user();
            return view('auth.home');
        }else{
            return redirect()->route('login');
        }

    }
}
