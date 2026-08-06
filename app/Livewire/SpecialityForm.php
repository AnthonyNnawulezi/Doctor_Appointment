<?php

namespace App\Livewire;

use Livewire\Component;

class SpecialityForm extends Component
{
    public $name = "";

    public function save()
    {
        $this->validate([
            'name' => 'required',
        ]);
    }

    public function render()
    {
        return view('livewire.speciality-form');
    }
}
