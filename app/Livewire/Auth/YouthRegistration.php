<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use Illuminate\Validation\Validator;
use Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class YouthRegistration extends Component
{
    public $name, $age, $email, $address, $password, $condition, $password_confirmation;

    protected $rules = [
        'name' => 'required|min:2',
        'age' => 'required|digits:2|regex:/^[0-9]+$/',
        'email' => 'required|email|unique:users,email',
        'address' => 'required|min:2',
        'password' => 'required|min:8|confirmed',
        'condition' => 'required'
    ];

    public function youthRegister()
    {
        $validateData = $this->validate();

        $user = User::create([
            'name' => $validateData['name'],
            'age' => $validateData['age'],
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
        return view('livewire.auth.youth-registration');
    }
}
