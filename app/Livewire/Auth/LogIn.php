<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class LogIn extends Component
{
    public function render()
    {
        return view('livewire.auth.log-in');
    }
}
