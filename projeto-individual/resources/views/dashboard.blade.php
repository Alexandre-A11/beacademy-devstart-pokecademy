<x-app-layout>
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if (session()->has("success"))
            <div class="bg-teal-100 mb-5 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md" role="alert">
                <div class="flex">
                    <div class="py-1"><svg class="fill-current h-6 w-6 text-teal-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z" /></svg></div>
                    <div>
                        <p class="font-bold">😁</p>
                        <p class="text-sm">{{ session()->get("success") }}</p>
                    </div>
                </div>
            </div>
            @endif
            @if (session()->has("error"))
            <div role="alert" class="mb-5">
                <div class="bg-red-500 text-white font-bold rounded-t px-4 py-2">
                    Erro
                </div>
                <div class="border border-t-0 border-red-400 rounded-b bg-red-100 px-4 py-3 text-red-700">
                    <p>{{ session()->get("error") }}</p>
                </div>
            </div>
            @endif
            <div class="flex justify-end mb-5">
                <a href="{{ route('show.capture') }}">
                    <x-button class="ml-4 bg-green-600 hover:bg-green-500">
                        {{ __('Caçar') }}
                    </x-button>
                </a>
            </div>

            <div class="bg-secondary overflow-hidden shadow-sm sm:rounded-lg grid items-start justify-items-center">
                <div class="py-6 bg-secondary flex flex-wrap justify-start w-5/6">
                    @if (request()->routeIs('dashboard'))
                    @foreach ($pokemons as $pokemon)
                    @include('layouts.pokecard')
                    @endforeach
                    <!-- Pagination -->
                    <div class="flex justify-center mt-5">
                        {{ $pokemons->links() }}
                    </div>
                    @endif

                    @if (request()->routeIs('show.trainers'))
                    @foreach ($trainers as $trainer)
                    @include('layouts.trainer-card')
                    <!-- Pagination -->
                    {{ $trainers->links() }}
                    @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
