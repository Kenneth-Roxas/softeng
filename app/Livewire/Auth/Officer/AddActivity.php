<?php

namespace App\Livewire\Auth\Officer;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class AddActivity extends Component
{
    public $officer_name;

    public function render()
    {
        $officer = Auth::guard('officer')->user();

        $this->pangalan = $officer ? $officer->officer_name : 'Error';

        return view('livewire.auth.officer.add-activity')->with([
            'pangalan' => $this->pangalan
        ]);
    }
}
