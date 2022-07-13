<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use App\Models\User;
use Illuminate\Http\Request;

class TrainerController extends Controller
{
    public function __construct(User $user, Pokemon $pokemon)
    {
        $this->user = $user;
        $this->pokemon = $pokemon;
    }

    public function index(){
        $pokemons = $this->pokemon->all();

        return view('dashboard', compact('pokemons'));
    }
}
