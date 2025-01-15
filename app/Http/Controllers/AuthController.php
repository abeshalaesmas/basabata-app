<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Profile;
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
            'user_name' => 'required|string|max:255',
            'email' =>'required|email|unique:users, email',
            'password' => 'required|string|min:8|confirmed'
        ]);

        $user = User::create([
            'user_name' => $request->user_name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        Auth::login($user);


        return redirect()->route('profile.create', ['user' => $user->id]);
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
        $user = User::with('profile')->find(Auth::id());
        return view('auth.dashboard', ['profile' => $user]);
    }

    public function profile(){
        $user = Auth::user();
        return view('auth.profile', compact('user'));
    }

    public function logout (Request $request){
        Auth::logout();
        $request->session()->invalidate();
        return redirect('/login');
    }




}

