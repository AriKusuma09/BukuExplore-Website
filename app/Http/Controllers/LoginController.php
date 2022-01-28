<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login-page.login', [
            "title" => "Login"
            
        ]);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();

            if(Auth::user()->role_as == '1') //1 = Admin Login
            {
                return redirect('/dashboard')->with('success','Welcome to your dashboard');
            }
            elseif(Auth::user()->role_as == '0') // Normal or Default User Login
            {
                return redirect('/')->with('success','Logged in successfully');
            }
        }

        return back()->with('loginError', 'Login failed!');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    // Admin Middleware
    


}
