<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Testing\Fluent\Concerns\Has;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function authenticate(Request $request)
    {
        $login_data = ['email' => $request->email, 'password' => $request->password];
        if (Auth::attempt($login_data)) {
            return redirect()->route('admin.home');
        }
        return redirect()->back()->with('error', 'invalid username or password');
    }

    public function logout()
    {
        if (Auth::check()) {
            Auth::logout();
        }
        return redirect()->route('frontsite.home');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function do_register(Request $request)
    {
        // dd($request);
        $request->validate([
            'username' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed'
        ]);
        User::create([
            'username' => $request->username,
            'email' =>  $request->email,
            'password' =>Hash::make($request->password)
        ]);
        return redirect()->route('login')->with('success','user is created');
    }

}
