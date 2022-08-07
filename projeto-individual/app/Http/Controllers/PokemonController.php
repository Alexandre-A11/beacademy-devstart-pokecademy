<?php

namespace App\Http\Controllers;

use App\Http\Requests\PokemonCapture;
use App\Models\Pokemon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Storage;

class PokemonController extends Controller
{
    public function __construct(Pokemon $pokemon)
    {
        $this->pokemon = $pokemon;
    }

    public function show_capture(){
        return view('pokemon.capture');
    }

    public function capture(PokemonCapture $request){
        $data = $request->all();
        $data['trainer_id'] = auth()->user()->id;
        $data['pokedex_id'] = $request['pokedex'];
        $data['image'] = $request->file('image')->store('pokemons', 'public');
        Storage::disk('s3')->put($data['image'], file_get_contents($request->image));

        
        $this->pokemon->create($data);
        
        return redirect()->route('dashboard')->with('success', 'Pokémon capturado com sucesso!');
    }

    public function edit($id){
        $pokemon = $this->pokemon->find($id);
        return view('pokemon.edit', compact('pokemon'));
    }
    
    public function update(PokemonCapture $request, $id){
        $data = $request->all();
        
        if ($request->image){
            $data['image'] = $request->file('image')->store('pokemons', 'public');
            Storage::disk('s3')->put($data['image'], file_get_contents($request->image));
        }

        if ($request->type){
            $data['type'] = $request->type;
        }

        $this->pokemon->find($id)->update($data);
        
        return redirect()->route('dashboard')->with('success', 'Pokémon alterado com sucesso!');
    }

    public function delete($id){
        if (!$pokemon = $this->pokemon->find($id)){
            return redirect()->route('dashboard')->with('error', 'Pokémon não encontrado');
        };
        
        Storage::disk('s3')->delete($pokemon->image);
        $pokemon->delete();
        return redirect()->route('dashboard');
    }
}