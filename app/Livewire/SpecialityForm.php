<?php

namespace App\Livewire;

use App\Models\Speciality;
use Illuminate\Validation\Rule;
use Livewire\Component;

class SpecialityForm extends Component
{
    public $name = "";

    public function save()
    {
        $this->authorize('create', Speciality::class);

        $validated = $this->validate([
            'name' => [
                'required',
                'string',
                'max:255',
                Rule::unique('specialities', 'speciality_name'),
            ],
        ]);

        $speciality = new Speciality();
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
