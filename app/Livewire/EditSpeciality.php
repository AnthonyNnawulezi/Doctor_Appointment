<?php

namespace App\Livewire;

use App\Models\Specialities;
use Livewire\Component;

class EditSpeciality extends Component
{
    public $name = "";
    public $speciality = "";

    public function editSpeciality($id)
    {
        $this->validate([
            'name' => 'required',
        ]);

        $this->speciality = $this->name;

        $update = Specialities::find($id);
        $update->speciality_name = $this->speciality;
        $update->save();

        session()->flash('message', 'Speciality updated successfully');
        return redirect('/admin/specialities');
    }



    public function render()
    {
        return view('livewire.edit-speciality');
    }
}
