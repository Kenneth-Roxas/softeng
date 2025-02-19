<?php

namespace App\Livewire\Auth;

use Livewire\Component;

class ProfilingForm extends Component
{
    public $currentStep = 1;

    public function nextStep()
    {
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

