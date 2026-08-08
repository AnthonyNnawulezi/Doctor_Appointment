<?php

namespace App\Livewire;

use App\Models\Specialities;
use Livewire\Component;

class SpecialityForm extends Component
{
    public $name = "";

    public function save()
    {
        $this->validate([
            'name' => 'required',
        ]);

        $speciality = new Specialities;
        $speciality->speciality_name = $this->name;
        $speciality->save();

        session()->flash('message', "Speciality created successfully");

        return redirect('/admin/specialities');
    }

    public function render()
    {
        return view('livewire.speciality-form');
    }
}
