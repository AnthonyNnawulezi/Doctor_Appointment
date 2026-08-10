<?php

namespace App\Livewire;

use App\Models\Speciality;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class EditSpeciality extends Component
{
    public Speciality $speciality;
    public string $name = '';

    public function mount(Speciality $speciality): void
    {
        $speciality = Speciality::findOrFail($speciality_id);

        $this->speciality_id = $speciality->id;
        $this->name = $speciality->speciality_name;
    }

    public function update(): void
    {
        $this->validate(['name' => 'required',]);

        $speciality = Speciality::findOrFail($this->speciality_id);
        $speciality->speciality_name = $this->name;
        $speciality->save();

        session()->flash('message', 'Speciality updated successfully');
        return redirect()->route('admin.specialities');
    }

    public function render(): View
    {
        return view('livewire.edit-speciality');
    }
}
