<div>
    <form wire:submit="register">
        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input wire:model="name" id="name" class="block mt-1 w-full" type="text" name="name" required
                autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input wire:model="email" id="email" class="block mt-1 w-full" type="email" name="email"
                required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- bio -->
        <div class="mt-4">
            <x-input-label for="bio" :value="__('Bio/About')" />

            <x-text-input wire:model="bio" id="bio" class="block mt-1 w-full" type="bio" name="bio"
                autocomplete="bio" />

            <x-input-error :messages="$errors->get('bio')" class="mt-2" />
        </div>

        <!-- hospital-name -->
        <div class="mt-4">
            <x-input-label for="hospital-name" :value="__('Hospital Name')" />

            <x-text-input wire:model="hospital-name" id="hospital-name" class="block mt-1 w-full" type="hospital-name"
                name="hospital-name" autocomplete="hospital-name" />

            <x-input-error :messages="$errors->get('hospital-name')" class="mt-2" />
        </div>

        <!-- Specialities -->
        <div class="mt-4">
            <x-input-label for="specialities" :value="__('Specialities')" />

            <select
                class="py-3 px-4 pe-9 block w-full bg-layer border-layer-line rounded-lg text-sm text-foreground focus:border-primary-focus focus:ring-primary-focus disabled:opacity-50 disabled:pointer-events-none">
                <option selected>Open this select menu</option>
                <option>1</option>

            </select>

            <x-input-error :messages="$errors->get('specialities')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input wire:model="password" id="password" class="block mt-1 w-full" type="password" name="password"
                required autocomplete="password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="confirm-password" :value="__('Confirm Password')" />

            <x-text-input wire:model="confirm-password" id="confirm-password" class="block mt-1 w-full"
                type="confirm-password" name="confirm-password" required autocomplete="confirm-password" />

            <x-input-error :messages="$errors->get('confirm-password')" class="mt-2" />
        </div>

        <!-- instagram -->
        <div class="mt-4">
            <x-input-label for="instagram" :value="__('Instagram')" />

            <x-text-input wire:model="instagram" id="instagram" class="block mt-1 w-full" type="instagram"
                name="instagram" autocomplete="instagram" />

            <x-input-error :messages="$errors->get('instagram')" class="mt-2" />
        </div>

        <!-- Twitter -->
        <div class="mt-4">
            <x-input-label for="twitter" :value="__('Twitter')" />

            <x-text-input wire:model="twitter" id="twitter" class="block mt-1 w-full" type="twitter" name="twitter"
                autocomplete="twitter" />

            <x-input-error :messages="$errors->get('twitter')" class="mt-2" />
        </div>

        <!-- Facebook -->
        <div class="mt-4">
            <x-input-label for="Facebook" :value="__('Facebook')" />

            <x-text-input wire:model="Facebook" id="Facebook" class="block mt-1 w-full" type="Facebook" name="Facebook"
                required autocomplete="Facebook" />

            <x-input-error :messages="$errors->get('Facebook')" class="mt-2" />
        </div>



        <div class="flex items-center justify-end mt-4">
            <a href="/admin/doctors" type="button"
                class="inline-flex items-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 active:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition ease-in-out duration-150">
                Cancel
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</div>
