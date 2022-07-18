<x-app-layout>
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-end mb-5">
                <a href="{{ route('show.capture') }}">
                    <x-button class="ml-4">
                        {{ __('Caçar') }}
                    </x-button>
                </a>
            </div>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg grid items-start justify-items-center">
                <div class="py-6 bg-white border-b border-gray-200 flex flex-wrap justify-start w-5/6">
                    @foreach ($pokemons as $pokemon)
                    @include('layouts.pokecard')
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>