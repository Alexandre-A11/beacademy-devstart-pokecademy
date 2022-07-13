<div class="flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
    <div>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>
    </div>

    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Pokemon Name -->
            <div>
                <x-label for="name" :value="__('Pokemon')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                    autofocus />
            </div>


            <!-- Pokemon Type -->
            <div class="mt-4">
                <x-label for="email" :value="__('power')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    required />
            </div>


            <!-- Pokemon Power -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="new-password" />
            </div>

            <!-- Pokemon Attack -->
            <!-- Pokemon Damage -->

            <!-- Pokemon Defense -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full" type="password"
                    name="password_confirmation" required />
            </div>

            <!-- Pokemon Healthy -->
            <!-- Pokemon Stars -->
            <!-- Pokedex -->

            <div class="flex items-center justify-end mt-4">
                <x-button class="ml-4">
                    {{ __('Capturar') }}
                </x-button>
            </div>
        </form>
    </div>
</div>