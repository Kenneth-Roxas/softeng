<?php

namespace App\Livewire\Auth\Officer;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Officer_User;
use App\Http\Controllers\Controller;

class OfficerDash extends Component
{
    public function render()
    {

        return view('livewire.auth.officer.officer-dash')->with([
        ]);
    }
}
