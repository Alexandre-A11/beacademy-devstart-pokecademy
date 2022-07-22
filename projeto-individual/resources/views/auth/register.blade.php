<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" class="text-white" :value="__('Nome')" />

                <x-input id="name" class="block mt-1 w-full bg-blue-300 focus:border-primary focus:ring focus:ring-primary" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" class="text-white" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full bg-blue-300 focus:border-primary focus:ring focus:ring-primary" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" class="text-white" :value="__('Senha')" />

                <x-input id="password" class="block mt-1 w-full bg-blue-300 focus:border-primary focus:ring focus:ring-primary" type="password" name="password" required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" class="text-white" :value="__('Confirmar senha')" />

                <x-input id="password_confirmation" class="block mt-1 w-full bg-blue-300 focus:border-primary focus:ring focus:ring-primary" type="password" name="password_confirmation" required />
            </div>
            <!-- Image -->
            <div class="mt-4">
                <x-label for="image" class="text-white" :value="__('Imagem')" />
                <x-input id="image" class="block mt-1 w-full bg-blue-300 focus:border-primary focus:outline-none focus:ring focus:ring-primary" type="file" name="image" />
            </div>

            <!-- Submit -->
            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-300 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Já possui cadastro?') }}
                </a>

                <x-button class="ml-4 bg-green-600 hover:bg-green-500 focus:bg-green-500 active:bg-green-500">
                    {{ __('Cadastrar') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
