<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <img class="w-20 fill-current text-gray-500" src="../storage/logo.png" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('trainer.update', $trainer->id) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" class="text-white" :value="__('Nome')" />

                <x-input id="name" class="block mt-1 w-full bg-blue-300 focus:border-primary focus:ring focus:ring-primary" type="text" name="name" :value="$trainer->name" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" class="text-white" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full bg-blue-300 focus:border-primary focus:ring focus:ring-primary" type="email" name="email" :value="$trainer->email" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" class="text-white" :value="__('Senha')" />

                <x-input id="password" class="block mt-1 w-full bg-blue-300 focus:border-primary focus:ring focus:ring-primary" type="password" name="password" autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" class="text-white" :value="__('Confirmar senha')" />

                <x-input id="password_confirmation" class="block mt-1 w-full bg-blue-300 focus:border-primary focus:ring focus:ring-primary" type="password" name="password_confirmation" />
            </div>
            <!-- Image -->
            <div class="mt-4">
                <x-label for="image" class="text-white" :value="__('Imagem')" />
                <x-input id="image" class="block mt-1 w-full bg-blue-300 focus:border-primary focus:outline-none focus:ring focus:ring-primary" type="file" name="image" :value="old('image')" />
            </div>

            <!-- Submit -->
            <div class="flex items-center justify-end mt-4">
                <x-button class="ml-4 bg-amber-600 hover:bg-amber-500 focus:bg-amber-500 active:bg-amber-500">
                    {{ __('Editar') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
