<?php

namespace App\Http\Controllers;

use App\Http\Requests\TrainerUpdate;
use App\Models\Pokemon;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TrainerController extends Controller
{
    public function __construct(User $user, Pokemon $pokemon)
    {
        $this->user = $user;
        $this->pokemon = $pokemon;
    }

    public function index(Request $request){
        $pokemons = $this->pokemon->getPokemons($request->search ?? '');

        return view('dashboard', compact('pokemons'));
    }

    public function edit($id){
        $trainer = $this->user->find($id);
        return view('trainer.edit', compact('trainer'));
    }

    public function update(TrainerUpdate $request, $id){
        $data = $request->except('password');
        if ($request->hasFile('image')){
            $data['image'] = $request->file('image')->store('trainers', 'public');
            Storage::disk('s3')->put($data['image'], file_get_contents($request->image));
        }
        
        if ($request->password){
            $data['password'] = bcrypt($request->password);
        }
        
        $this->user->find($id)->update($data);

        return redirect()->route('dashboard')->with('success', 'Dados alterados com sucesso!');
    }

    public function show($id){
        $trainer = $this->user->find($id);
        return view('dashboard', compact('trainer'));
    }

    public function show_trainers(Request $request){
        $trainers = $this->user->getTrainers($request->search ?? '');
        return view('dashboard', compact('trainers'));
    }

    public function delete($id){
        if ($this->user->find($id)->pokemons->count() > 0){
            return redirect()->route('show.trainers')->with('error', 'Não é possível excluir um treinador que possui Pokémons!');
        }
        
        $this->user->find($id)->delete();

        return redirect()->route('show.trainers')->with('success', 'Treinador deletado com sucesso!');
    }
}