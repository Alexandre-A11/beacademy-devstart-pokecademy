<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" class="text-white" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full bg-blue-300 focus:border-primary focus:ring focus:ring-primary" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" class="text-white" :value="__('Senha')" />

                <x-input id="password" class="block mt-1 w-full bg-blue-300 focus:border-primary focus:ring focus:ring-primary" type="password" name="password" required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-primaryStrong shadow-sm focus:border-indigo-30 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-white">{{ __('Lembrar-me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-300 hover:text-gray-900" href="{{ route('password.request') }}">
                    {{ __('Esqueceu sua senha?') }}
                </a>
                @endif
                <a href="{{ route('register') }}" class="ml-3 bg-green-600 inline-flex items-center px-4 py-2 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-green-500 focus:outline-none disabled:opacity-25 transition ease-in-out duration-150">
                    {{ __('Cadastrar') }}
                </a>
                <x-button class="ml-3 bg-blue-500 hover:bg-blue-400">
                    {{ __('Entrar') }}
                </x-button>
            </div>

        </form>
    </x-auth-card>
</x-guest-layout>
