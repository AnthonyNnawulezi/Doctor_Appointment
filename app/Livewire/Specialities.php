<?php

namespace App\Livewire;

use App\Models\Specialities as ModelsSpecialities;
use Livewire\Component;

class Specialities extends Component
{
    public function delete(int $id): void
    {
        $speciality = ModelsSpecialities::findOrFail($id);
        $speciality->delete();

        session()->flash('message', 'Speciality deleted successfully');
        $this->redirect('/admin/specialities', navigate: true);
    }

    public function render()
    {
        $specialities = ModelsSpecialities::all();

        return view('livewire.specialities', ['specialities' => $specialities]);
    }
}
