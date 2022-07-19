<x-pokemon-card-container>
    <div class="absolute">
        <a href="{{ route('pokemon.edit', $pokemon->id) }}">
            <x-button class="hidden bg-yellow-500 hover:bg-yellow-400 group-hover:block -translate-x-full translate-y-4 font-extrabold">
                Editar
            </x-button>
        </a>
        <form action="{{ route('pokemon.release', $pokemon->id) }}" method="POST" class="inline">
            @method("DELETE")
            @csrf
            <x-button class="hidden bg-red-500 hover:bg-red-400 group-hover:block -translate-x-full translate-y-8 font-extrabold">
                Soltar
            </x-button>

        </form>
    </div>
    <x-pokemon-card>
        <!-- Imagem -->
        <div class="grid justify-items-center h-1/2 pt-5 rounded-md">
            <div class="flex justify-center gap-4 ">
                <img src="{{ asset('storage/' . $pokemon->image) }}" alt="{{ $pokemon->name }}" class="h-52">
            </div>
        </div>

        <!-- Tipo -->
        <x-pokemon-type :type="$pokemon->type">{{ $pokemon->type }}</x-pokemon-type>
        <!-- Conteúdo -->
        <x-pokemon-content>
            <x-pokemon-h1-name>{{ $pokemon->name }}</x-pokemon-h1-name>
            <x-pokemon-stats>
                <x-pokemon-stats-attribute>Power: {{ $pokemon->power }}</x-pokemon-stats-attribute>
                <x-pokemon-stats-attribute>Damage: {{ $pokemon->damage }} </x-pokemon-stats-attribute>
                <x-pokemon-stats-attribute>Attack: {{ $pokemon->attack }} </x-pokemon-stats-attribute>
                <x-pokemon-stats-attribute>Healthy: {{ $pokemon->healthy }} </x-pokemon-stats-attribute>
                <x-pokemon-stats-attribute>Defense: {{ $pokemon->defense }}</x-pokemon-stats-attribute>
                <x-pokemon-stats-attribute>Trainer: {{ $pokemon->user->name }}</x-pokemon-stats-attribute>
                <x-pokemon-stars-div>
                    @for ($i = 0; $i < $pokemon->stars ; $i++)
                        <x-p-eletric :type="$pokemon->type" />
                        @endfor
                </x-pokemon-stars-div>
            </x-pokemon-stats>
            <x-pokemon-h2-logo>Logo</x-pokemon-h2-logo>
        </x-pokemon-content>
    </x-pokemon-card>
</x-pokemon-card-container>
