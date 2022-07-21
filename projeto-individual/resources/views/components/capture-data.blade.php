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

        <form method="POST" action="{{ route('pokemon.capture') }}" enctype="multipart/form-data">
            @csrf

            <!-- Pokemon Name -->
            <div>
                <x-label for="name" :value="__('Pokémon')" />
                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>


            <!-- Pokemon Type -->
            <div class="mt-4">
                <x-label for="email" :value="__('Tipo')" />
                <div class="flex flex-wrap mt-1">

                    <div class="flex items-center mr-4">
                        <input id="fire" type="radio" value="Fogo" name="type" class="w-4 h-4 text-red-600 bg-gray-100 border-gray-300 focus:ring-red-500 dark:focus:ring-red-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="fire" class="ml-2 text-sm font-medium text-gray-90">Fogo</label>
                    </div>
                    <div class="flex items-center mr-4">
                        <input id="water" type="radio" value="Água" name="type" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="water" class="ml-2 text-sm font-medium text-gray-900">Água</label>
                    </div>
                    <div class="flex items-center mr-4">
                        <input id="grass" type="radio" value="Planta" name="type" class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="grass" class="ml-2 text-sm font-medium text-gray-900">Planta</label>
                    </div>
                    <div class="flex items-center mr-4">
                        <input id="ghost" type="radio" value="Fantasma" name="type" class="w-4 h-4 text-purple-600 bg-gray-100 border-gray-300 focus:ring-purple-500 dark:focus:ring-purple-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="ghost" class="ml-2 text-sm font-medium text-gray-900">Fantasma</label>
                    </div>
                </div>

                <div class="flex flex-wrap mt-1">
                    <div class="flex items-center mr-2.5">
                        <input id="rock" type="radio" value="Pedra" name="type" class="w-4 h-4 text-stone-600 bg-gray-100 border-gray-300 focus:ring-stone-500 dark:focus:ring-stone-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="rock" class="ml-2 text-sm font-medium text-gray-900">Pedra</label>
                    </div>
                    <div class="flex items-center mr-1.5">
                        <input id="flying" type="radio" value="Voador" name="type" class="w-4 h-4 text-sky-600 bg-gray-100 border-gray-300 focus:ring-sky-500 dark:focus:ring-sky-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="flying" class="ml-2 text-sm font-medium text-gray-900">Voador</label>
                    </div>
                    <div class="flex items-center mr-2.5">
                        <input id="eletric" type="radio" value="Elétrico" name="type" class="w-4 h-4 text-amber-600 bg-gray-100 border-gray-300 focus:ring-amber-500 dark:focus:ring-amber-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="eletric" class="ml-2 text-sm font-medium text-gray-900">Elétrico</label>
                    </div>
                    <div class="flex items-center mr-4">
                        <input id="insect" type="radio" value="Inseto" name="type" class="w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="insect" class="ml-2 text-sm font-medium text-gray-900">Inseto</label>
                    </div>
                </div>
            </div>

            <div class="mt-4 flex text-center">
                <!-- Pokemon Attack -->
                <div class="mr-4">
                    <x-label for="attack" :value="__('Ataque')" />
                    <x-input id="attack" class="block mt-1 w-full" type="text" name="attack" :value="old('attack')" required />
                </div>

                <!-- Pokemon Power -->
                <div class="mr-4">
                    <x-label for="power" :value="__('Poder')" />
                    <x-input id="power" class="block mt-1 w-full" type="number" name="power" :value="old('power')" required />
                </div>
            </div>

            <div class="mt-4 flex text-center">
                <!-- Pokemon Defense -->
                <div class="mr-4">
                    <x-label for="defense" :value="__('Defesa')" />
                    <x-input id="defense" min="0" class="block mt-1 w-full" type="number" name="defense" :value="old('defense')" />
                </div>

                <!-- Pokemon Healthy -->
                <div class="mr-4">
                    <x-label for="healthy" :value="__('Vida')" />
                    <x-input id="healthy" min="1" class="block mt-1 w-full" type="number" name="healthy" :value="old('healthy')" />
                </div>

                <!-- Pokedex -->
                <div class="mr-4">
                    <x-label for="pokedex" :value="__('Pokedex')" />
                    <x-input id="pokedex" min="1" class="block mt-1 w-full" type="number" name="pokedex" :value="old('pokedex')" />
                </div>
            </div>

            <div class="mt-4 text-center flex justify-center">
                <!-- Pokemon Weakness Type -->
                <div class="mr-4">
                    <x-label for="weakness_type">Fraco Contra:</x-label>
                    <select id="weakness_type" name="weakness_type" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        <option value="Fogo" selected>Fogo</option>
                        <option value="Água">Água</option>
                        <option value="Planta">Planta</option>
                        <option value="Elétrico">Elétrico</option>
                        <option value="Pedra">Pedra</option>
                        <option value="Voador">Voador</option>
                        <option value="Fantasma">Fantasma</option>
                        <option value="Inseto">Inseto</option>
                    </select>
                </div>

                <!-- Pokemon Weakness -->
                <div class="mr-4">
                    <x-label for="weakness" :value="__('Nível Fraqueza')" />
                    <x-input id="weakness" min="1" max="5" class="block mt-1 w-full" type="number" name="weakness" :value="old('weakness')" required />
                </div>
            </div>

            <!-- Pokemon Stars -->
            <div class="mt-4 grid justify-items-center">
                <x-label for="stars" :value="__('Estrelas')" />
                <x-input id="stars" min="1" max="5" class="block mt-1 w-1/2" type="range" name="stars" :value="old('stars')" oninput="this.nextElementSibling.value = this.value" /><output>3</output>
            </div>

            <!-- Image -->
            <div class="mt-4 text-center">
                <x-label for="image" :value="__('Imagem')" />
                <x-input id="image" class="border-2 border-slate-500 block mt-1 w-full bg-slate-400" type="file" name="image" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button class="ml-4">
                    {{ __('Capturar') }}
                </x-button>
            </div>
        </form>
    </div>
</div>
