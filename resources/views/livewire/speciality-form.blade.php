<div>
    <form wire:submit="save">
        <!-- Name -->
        <div>
            <x-input-label for="speciality" :value="__('Speciality')" />
            <x-text-input wire:model="name" id="speciality" class="block mt-1 w-full" type="text" name="name" autofocus
                autocomplete="speciality" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a href="/admin/doctors" type="button"
                class="inline-flex items-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 active:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition ease-in-out duration-150">
                Cancel
            </a>

            <x-primary-button class="ms-4">
                {{ __('Save') }}
            </x-primary-button>
        </div>
    </form>
</div>
