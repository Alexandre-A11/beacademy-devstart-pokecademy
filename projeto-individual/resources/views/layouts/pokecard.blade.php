<x-pokemon-card-container :type="$pokemon->type">
    <div class="absolute duration-1000 opacity-0 ease-in-out group-hover:opacity-100 -translate-x-[107%] translate-y-1/4 h-1/4 group-hover:px-10 bg-secondary rounded-md shadow-black shadow-2xl">

        <div class="hidden group-hover:block translate-y-1/4 mb-6 -mt-3">
            <img src="{{ asset("https://pokecademy.s3.amazonaws.com/{$pokemon->user->image}") }}" class="rounded-full w-20 h-20 object-cover" />
            <div class="font-bold text-xs text-white text-center my-2">
                {{ $pokemon->user->name }}
            </div>
        </div>

        @if (Auth::user()->id == $pokemon->trainer_id || Auth::user()->isAdmin)
        <a href="{{ route('pokemon.edit', $pokemon->id) }}">
            <x-button class="hidden group-hover:block  bg-yellow-500 hover:bg-yellow-400 translate-y-2/4 font-extrabold">
                Editar
            </x-button>
        </a>
        <form action="{{ route('pokemon.release', $pokemon->id) }}" method="POST" class="inline">
            @method("DELETE")
            @csrf
            <x-button class="hidden group-hover:block bg-red-500 hover:bg-red-400 translate-y-3/4 font-extrabold">
                Soltar
            </x-button>

        </form>
        @else
        <x-button class="hidden group-hover:block  bg-gray-500 translate-y-2/4 font-extrabold">
            Editar
        </x-button>
        <x-button class="hidden group-hover:block bg-gray-500 translate-y-3/4 font-extrabold">
            Soltar
        </x-button>
        @endif
    </div>
    <x-pokemon-card>
        <!-- Imagem -->
        <div class="grid justify-items-center h-1/2 pt-5 rounded-md">
            <div class="flex justify-center gap-4 ">
                <img src="{{ asset('https://pokecademy.s3.amazonaws.com/' . $pokemon->image) }}" alt="{{ $pokemon->name }}" class="h-52">
            </div>
        </div>

        <!-- Tipo -->
        <x-pokemon-type :type="$pokemon->type">{{ $pokemon->type }}</x-pokemon-type>
        <!-- Conteúdo -->
        <x-pokemon-content>
            <x-pokemon-h1-name>{{ $pokemon->name }}</x-pokemon-h1-name>
            <x-pokemon-stats>
                <div class="flex mt-1">
                    <x-pokemon-stats-attribute>Ataque: <span class="font-bold">{{ $pokemon->attack }}</span></x-pokemon-stats-attribute>
                </div>
                <div class="flex justify-between mr-10 mt-1">
                    <x-pokemon-stats-attribute>Poder: <span class="font-bold">{{ $pokemon->power }}</span></x-pokemon-stats-attribute>
                    <x-pokemon-stats-attribute>Defesa: <span class="font-bold">{{ $pokemon->defense }}</span></x-pokemon-stats-attribute>
                    <x-pokemon-stats-attribute>Vida: <span class="font-bold">{{ $pokemon->healthy }}</span></x-pokemon-stats-attribute>
                </div>
                <x-pokemon-stats-attribute>
                    <div class="flex mt-1">
                        <p class="text-xs mr-2">Fraqueza: {{$pokemon->weakness_type}}</p>
                        @for ($i = 0; $i < $pokemon->weakness; $i++)
                            <x-weakness-icon :type="$pokemon->weakness_type" />
                            @endfor
                    </div>
                </x-pokemon-stats-attribute>
                <x-pokemon-stats-attribute>Treinador: {{ $pokemon->user->name }}</x-pokemon-stats-attribute>
                <x-pokemon-stars-div class="mt-2">
                    @for ($i = 0; $i < $pokemon->stars; $i++)
                        <x-p-type-icon :type="$pokemon->type" />
                        @endfor
                </x-pokemon-stars-div>
            </x-pokemon-stats>
            <x-pokemon-logo />
        </x-pokemon-content>
    </x-pokemon-card>
</x-pokemon-card-container>
