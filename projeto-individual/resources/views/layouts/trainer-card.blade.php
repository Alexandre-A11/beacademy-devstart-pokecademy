<div class="w-80 mx-2 bg-white mb-6 shadow-lg rounded-xl mt-16">
    <div class="px-6">
        <div class="flex flex-wrap justify-center">
            <div class="w-full flex justify-center">
                <div class="relative">
                    <img src="{{ asset("storage/{$trainer->image}") }}" class="rounded-full w-40 h-40 object-cover" />
                </div>
            </div>
            <div class="w-full text-center">
                <div class="flex justify-center lg:pt-4 pt-8 pb-0">
                    <div class="p-3 text-center">
                        <span class="text-xl font-bold block uppercase tracking-wide text-slate-700">{{ $trainer->pokemons->count() }}</span>
                        <span class="text-sm text-slate-400">Pokémons</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-2">
            <h3 class="text-2xl text-slate-700 font-bold leading-normal mb-1">{{ $trainer->name }}</h3>
            <div class="text-xs mt-0 mb-2 text-slate-400 font-bold uppercase">
                {{$trainer->email}}
            </div>
            @if ($trainer->isAdmin)
            <div class="grid justify-items-center -mb-2">
                <h4 class="text-xs text-slate-400 absolute font-bold leading-normal"> Administrador </h4>
            </div>
            @endif
            <div class="text-right mt-2 text-slate-700 text-sm font-bold leading-normal"># {{ $trainer->id }}</div>
        </div>
        <div class="mt-6 py-6 border-t border-slate-200 text-center">
            <div class="flex flex-wrap justify-center">
                <div class="w-full px-4">
                    <a href="{{ route('trainer.edit', $trainer->id) }}">
                        <x-button class="bg-yellow-500 hover:bg-yellow-400">Editar</x-button>
                    </a>

                    <form action="{{ route('trainer.delete', $trainer->id) }}" method="POST" class="inline">
                        @method('DELETE')
                        @csrf
                        <x-button class="bg-red-500 hover:bg-red-400">Deletar</x-button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
