<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use Illuminate\Http\Request;

class PokemonController extends Controller
{
    public function __construct(Pokemon $pokemon)
    {
        $this->pokemon = $pokemon;
    }

    public function capture(){
        return view('capture');
    }
}