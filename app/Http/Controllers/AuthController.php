<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{
    public $email, $password;
    
    public function loginForm() {
        return redirect()->route('login');
    }

    public function login(Request $request)
    {
        // Validation of Email and Password
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        // Login as a User
        if (Auth::attempt([
            'email' => $request->email, 
            'password' => $request->password])) {

            return redirect()->route('home')->with('login_success', 'You have successfully logged in!');
        }

        // Login As a Officer
        if (Auth::guard('officer')->attempt([ 
            'officer_email' => $request->email, 
            'password' => $request->password
        ])) {
            return redirect()->route('officer-dash')->with('login_success', 'You have successfully logged in!');
        }

        // Invalid Email or Password
        return redirect()->route('login')->with('login_failed', 'Invalid Email or Password!');
    }

    public function logout(Request $request)
    {
        if (Auth::guard('web')->check()) {
            Auth::guard('web')->logout();
        } elseif (Auth::guard('officer')->check()) {
            Auth::guard('officer')->logout();
        }

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
