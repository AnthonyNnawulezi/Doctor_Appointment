<?php

namespace App\Livewire;

use App\Models\Specialities;
use App\Models\Speciality;
use Livewire\Component;

class EditSpeciality extends Component
{
    public $name = "";
    public $speciality_id = "";

    public function mount($speciality_id)
    {
        $speciality = Speciality::findOrFail($speciality_id);

        $this->speciality_id = $speciality->id;
        $this->name = $speciality->speciality_name;
    }

    public function update()
    {
        $this->validate([
            'name' => 'required',
        ]);

        $speciality = Speciality::findOrFail($this->speciality_id);
        $speciality->speciality_name = $this->name;
        $speciality->save();

        session()->flash('message', 'Speciality updated successfully');
        return redirect('/admin/specialities');
    }

    public function render()
    {
        return view('livewire.edit-speciality');
    }
}
