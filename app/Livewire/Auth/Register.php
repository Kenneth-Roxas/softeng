<?php

namespace App\Livewire\Auth;

use Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Livewire\Component;
use Illuminate\Validation\Validator;

class Register extends Component
{
    public $name, $email, $address, $password, $condition, $password_confirmation;

    protected $rules = [
        'name' => 'required|min:2',
        'email' => 'required|email|unique:users,email',
        'address' => 'required|min:2',
        'password' => 'required|min:8|confirmed',
        'condition' => 'required'
    ];

    public function register()
    {
        $validateData = $this->validate();

        $user = User::create([
            'name' => $validateData['name'],
            'email' => $validateData['email'],
            'address' => $validateData['address'],
            'password' => Hash::make($validateData['password'])
        ]);

        Auth::login($user);

        session()->flash('register_success', 'Registration successful!');
        return redirect()->route('login');

    }
    public function render()
    {
        return view('livewire.auth.register');
    }
}
