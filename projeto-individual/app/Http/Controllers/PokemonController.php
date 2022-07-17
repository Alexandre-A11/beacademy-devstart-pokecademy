<?php

namespace App\Http\Controllers;

use App\Http\Requests\PokemonCapture;
use App\Models\Pokemon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class PokemonController extends Controller
{
    public function __construct(Pokemon $pokemon)
    {
        $this->pokemon = $pokemon;
    }

    public function show_capture(){
        return view('capture');
    }

    public function capture(PokemonCapture $request){
        $data = $request->all();
        $data['trainer_id'] = auth()->user()->id;
        $data['pokedex_id'] = $request['pokedex'];
        
        $this->pokemon->create($data);
        
        return redirect()->route('dashboard');
    }
}