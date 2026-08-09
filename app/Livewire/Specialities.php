<?php

namespace App\Livewire;

use App\Models\Specialities as ModelsSpecialities;
use App\Models\Speciality;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Gate;
use Livewire\Component;

class Specialities extends Component
{
    public function delete(Speciality $speciality): void
    {
        // Gate::authorize('delete', $speciality);
        $this->authorize('delete', $speciality);

        try {
            $speciality->delete();
        } catch (QueryException $e) {
            session()->flash('error', 'This speciality is still in use and cannot be deleted.');
            return;
        }

        session()->flash('message', 'Speciality deleted successfully');
        $this->redirect('/admin/specialities', navigate: true);
    }

    public function render()
    {
        $specialities = ModelsSpecialities::all();

        return view('livewire.specialities', ['specialities' => $specialities]);
    }
}
