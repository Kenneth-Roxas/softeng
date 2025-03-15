<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;


class Navigationbar extends Component
{
    public $position, $barangay_assign, $officer_name, $surname;

    public $name, $address;
    public function render()
    {
        // Youth User
        $youth = Auth::user();
        if ($youth){
        $this->name = $youth->name;
        $this->address = $youth->address;
        }
        // Officer User
        $officer = Auth::guard('officer')->user();
        if ($officer){
        $this->position = $officer->position;
        $this->barangay_assign = $officer->barangay_assign;
        $this->officer_name = $officer->officer_name;
        $this->surname = $officer->officer_surname;
        }
        return view('livewire.navigationbar')->with([
            'name' => $this->name, // Youth
            'address' => $this->address,
            'isAuthenticated' => $officer !== null, // Officer
            'position' => $this->position,
            'barangay_assign' => $this->barangay_assign,
            'officer_name' => $this->officer_name,
            'surname' => $this->surname
        ]);
    }
}
