<?php

namespace App\Livewire;

use Livewire\Component;

class Specialities extends Component
{
    public $specialities = [];

    public function mount()
    {
        $this->specialities = Specialities::class;
    }

    public function render()
    {
        return view('livewire.specialities', ['specialities' => $this->specialities]);
    }
}
