<?php

namespace App\Livewire;

use App\Models\Specialities as ModelsSpecialities;
use App\Models\Speciality;
use Illuminate\Support\Facades\Gate;
use Livewire\Component;

class Specialities extends Component
{
    public function delete(Speciality $speciality): void
    {
        // Gate::authorize('delete', $speciality);
        $this->authorize('delete', $speciality);
        $speciality = ModelsSpecialities::findOrFail($speciality);
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
