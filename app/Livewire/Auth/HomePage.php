<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Models\User;
use PhpOption\None;

class HomePage extends Component
{
    public $name, $address;

    public function profiling() {
        if (Auth::check()){
            redirect()->route('profiling');
        } else {
            session()->flash('login_first', 'LogIn First');
            return redirect()->route('login');
        }
    }
 
    public function render()
    {
        

        return view('livewire.auth.home-page')->with([
        ]);
    }
}
