<?php

namespace App\Livewire;

use App\Models\Speciality;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;
use Livewire\Component;

class EditSpeciality extends Component
{
    use AuthorizesRequests;

    public Speciality $speciality;
    public string $name = '';

    public function mount(Speciality $speciality): void
    {
        Gate::authorize('update', $speciality);
        $this->speciality = $speciality;
        $this->name = $speciality->speciality_name ?? "";
    }

    public function update(): void
    {
        $this->authorize('update', $this->speciality);

        $validated = $this->validate([
            'name' => [
                'required',
                'string',
                'max:255',
                Rule::unique('specialities', 'speciality_name')->ignore($this->speciality->id),
            ],
            // 'name' => 'required|string|max:255|unique:specialities,speciality_name,' . $this->speciality->id,
        ]);

        $this->speciality->speciality_name = trim($validated['name']);
        $this->speciality->update(['speciality_name' => $this->name]);

        session()->flash('success', 'Speciality updated successfully');
        $this->redirectRoute('admin.specialities', navigate: true);
    }

    public function render(): View
    {
        return view('livewire.edit-speciality');
    }
}
