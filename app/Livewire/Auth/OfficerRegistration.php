<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Validator;
use Livewire\Component;
use App\Models\Officer_User;
use Hash;

class OfficerRegistration extends Component
{
    public $officer_name, $position, $officer_email, $barangay_assign, $officer_password, $officer_password_confirmation, $officer_condition;

    protected $rules = [
        'officer_name' => 'required|min:2',
        'position' => 'required|min:2',
        'officer_email' => 'required|email|unique:officer_users,officer_email',
        'barangay_assign' => 'required|min:2',
        'officer_password' => 'required|min:8|confirmed',
        'officer_condition' => 'required'
    ];

    public function officerRegister() {
        $validateData = $this->validate();

        $officer_user = Officer_User::create([
            'officer_name' => $validateData['officer_name'],
            'position' => $validateData['position'],
            'officer_email' => $validateData['officer_email'],
            'barangay_assign' => $validateData['barangay_assign'],
            'password' => Hash::make($validateData['officer_password'])
        ]);        

        Auth::guard('officer')->login($officer_user);

        session()->flash('register_success', 'Registration successful!');
        return redirect()->route('login');
    }
    public function render()
    {
        return view('livewire.auth.officer-registration');
    }
}
