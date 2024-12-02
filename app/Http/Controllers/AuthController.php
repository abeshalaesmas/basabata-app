<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function registerForm(){
        return view('auth.register');
    }

    public function register(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
            'email' =>'required|email|unique:users, email',
            'password' => 'required|string|min:8|confirmed'
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        Auth::login($user);


        return redirect('/login');
    }

    public function loginForm(){
        return view('auth.login');
    }

    public function login(Request $request){
        $credentials = $request->validate([
            'email' => ['required','email'],
            'password' => ['required']
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }

        return back()->withErrors(['email'=>'Invalid Credentials.']);
    }

    public function dashboard(){
        return view('auth.dashboard',['user'=> Auth::user()]);
    }

    public function profile(){
        return view('auth.profile',['user'=> Auth::user()]);
    }

    public function logout (Request $request){
        Auth::logout();
        $request->session()->invalidate();
        return redirect('/login');
    }




}

