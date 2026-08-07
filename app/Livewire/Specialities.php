<?php

namespace App\Livewire;

use Livewire\Component;

class Specialities extends Component
{

    public function render()
    {
        $specialities = Specialities::all();

        return view('livewire.specialities', ['specialities' => $specialities]);
    }
}
