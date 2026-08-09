<?php

namespace App\Livewire;

use App\Models\Speciality;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Gate;
use Livewire\Component;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Specialities extends Component
{
    use AuthorizesRequests;

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
        // $this->redirect('/admin/specialities', navigate: true); removed since its the same page
    }

    public function render()
    {
        return view('livewire.specialities', [
            'specialities' => Speciality::latest()->paginate(10)
        ]);
    }
}
