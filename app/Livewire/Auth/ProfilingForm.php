<?php

namespace App\Livewire\Auth;

use Livewire\Component;

class ProfilingForm extends Component
{
    public $currentStep = 1;
    public $name, $location, $sex, $age, $birthdate, $email, $contact;

    protected $rules = [
        'name' => 'required|min:2',
        'location' => 'required|min:2',
        'sex' => 'required|in:Male,Female,Prefer not to say',
        'age' => 'required|numeric|min:1|max:120',
        'birthdate' => ['required', 'regex:/^\d{4}-(0[1-9]|1[0-2])-(0[1-9]|[12]\d|3[01])$/'],
        'email' => 'required|email',
        'contact' => 'required|digits:11'
    ];

    public function nextStep()
    {
        \Log::info('Next button clicked!');

        $this->validate();

        if ($this->currentStep < 5) {
            $this->currentStep++;
        }
    }


    public function previousStep()
    {
        if ($this->currentStep > 1) {
            $this->currentStep--;
        }
    }

    public function render()
    {
        return view('livewire.auth.profiling-form');
    }
}

