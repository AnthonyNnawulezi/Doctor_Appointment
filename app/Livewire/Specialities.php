<?php

namespace App\Livewire;

use App\Models\Specialities as ModelsSpecialities;
use Livewire\Component;

class Specialities extends Component
{

    public function render()
    {
        $specialities = ModelsSpecialities::all();

        return view('livewire.specialities', ['specialities' => $specialities]);
    }
}
