<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class LogIn extends Component
{
    public $email, $password;

    public function login()
    {
        $this->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        
        if (Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
            return redirect()->route('home')->with('login_success', 'You have successfully logged in!');
        }

        if (
            Auth::guard('officer')->attempt([
                'officer_email' => $this->email, 
                'password' => $this->password
            ])
        ) {
            return redirect()->route('officer_dash')->with('login_success', 'You have successfully logged in!');
        }


        session()->flash('login_failed', 'Invalid Email or Password!');
    }

    public function render()
    {
        return view('livewire.auth.log-in');
    }
}
