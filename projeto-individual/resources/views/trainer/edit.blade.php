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
                <x-label for="name" :value="__('Nome')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="$trainer->name" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="$trainer->email" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Senha')" />

                <x-input id="password" class="block mt-1 w-full" type="password" name="password" autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirmar senha')" />

                <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" />
            </div>
            <!-- Image -->
            <div class="mt-4">
                <x-label for="image" :value="__('Imagem')" />
                <x-input id="image" class="border-2 border-slate-500 block mt-1 w-full bg-slate-400" type="file" name="image" :value="old('image')" />
            </div>

            <!-- Submit -->
            <div class="flex items-center justify-end mt-4">
                <x-button class="ml-4">
                    {{ __('Editar') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
