<?php

namespace App\Livewire;

use App\Models\Speciality;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Validation\Rule;
use Livewire\Component;

class SpecialityForm extends Component
{
    use AuthorizesRequests;

    public $name = "";

    public function save(): void
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

        Speciality::create([
            'speciality_name' => trim($validated['name']),
        ]);

        session()->flash('success', "Speciality created successfully");

        $this->redirect(route('admin.specialities'), navigate: true);
    }

    public function render()
    {
        return view('livewire.speciality-form');
    }
}
