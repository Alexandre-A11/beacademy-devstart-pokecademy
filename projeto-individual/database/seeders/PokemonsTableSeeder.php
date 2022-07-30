<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Schema\ForeignIdColumnDefinition;
use Illuminate\Database\Seeder;
use Illuminate\Http\File;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PokemonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pokemons = [
            [
            'name' => 'Bulbasaur',
            'type' => 'Planta',
            'image' => Storage::disk('public')->putFile('pokemons', new File('storage/app/public/svg/1.svg')),
            'power' => 14,
            'attack' => 'Chicote de Cipó',
            'defense' => 18,
            'healthy' => 25,
            'weakness' => 3,
            'weakness_type' => 'Fire',
            'stars' => 3,
            'pokedex_id' => 1,
            'trainer_id' => User::inRandomOrder()->first()->id,
            ],
            [
                'name' => 'Charmander',
                'type' => 'Fogo',
                'image' => Storage::disk('public')->putFile('pokemons', new File('storage/app/public/svg/4.svg')),
                'power' => 18,
                'attack' => 'Bola de Fogo',
                'defense' => 14,
                'healthy' => 20,
                'weakness' => 3,
                'weakness_type' => 'Água',
                'stars' => 3,
                'pokedex_id' => 4,
                'trainer_id' => User::inRandomOrder()->first()->id
            ],
                [
                'name' => 'Squirtle',
                'type' => 'Água',
                'image' => Storage::disk('public')->putFile('pokemons', new File('storage/app/public/svg/7.svg')),
                'power' => 13,
                'attack' => 'Bolhas',
                'defense' => 25,
                'healthy' => 25,
                'weakness' => 3,
                'weakness_type' => 'Elétrico',
                'stars' => 3,
                'pokedex_id' => 7,
                'trainer_id' => User::inRandomOrder()->first()->id
            ],
            
                [
                'name' => 'Pikachu',
                'type' => 'Elétrico',
                'image' => Storage::disk('public')->putFile('pokemons', new File('storage/app/public/svg/25.svg')),
                'power' => 14,
                'attack' => 'Choque do Trovão',
                'defense' => 16,
                'healthy' => 18,
                'weakness' => 3,
                'weakness_type' => 'Água',
                'stars' => 2,
                'pokedex_id' => 25,
                'trainer_id' => User::inRandomOrder()->first()->id
            ],
                [
                'name' => 'Caterpie',
                'type' => 'Inseto',
                'image' => Storage::disk('public')->putFile('pokemons', new File('storage/app/public/svg/10.svg')),
                'power' => 10,
                'attack' => 'Seda',
                'defense' => 10,
                'healthy' => 12,
                'weakness' => 4,
                'weakness_type' => 'Fogo',
                'stars' => 1,
                'pokedex_id' => 10,
                'trainer_id' => User::inRandomOrder()->first()->id
            ],
                [
                'name' => 'Pidgey',
                'type' => 'Voador',
                'image' => Storage::disk('public')->putFile('pokemons', new File('storage/app/public/svg/16.svg')),
                'power' => 13,
                'attack' => 'Asas',
                'defense' => 14,
                'healthy' => 16,
                'weakness' => 3,
                'weakness_type' => 'Életrico',
                'stars' => 2,
                'pokedex_id' => 16,
                'trainer_id' => User::inRandomOrder()->first()->id
            ],
                [
                'name' => 'Geodude',
                'type' => 'Pedra',
                'image' => Storage::disk('public')->putFile('pokemons', new File('storage/app/public/svg/74.svg')),
                'power' => 24,
                'attack' => 'Rochas',
                'defense' => 40,
                'healthy' => 45,
                'weakness' => 4,
                'weakness_type' => 'Água',
                'stars' => 3,
                'pokedex_id' => 74,
                'trainer_id' => User::inRandomOrder()->first()->id
            ],
                [
                'name' => 'Gastly',
                'type' => 'Fantasma',
                'image' => Storage::disk('public')->putFile('pokemons', new File('storage/app/public/svg/92.svg')),
                'power' => 20,
                'attack' => 'Língua',
                'defense' => 15,
                'healthy' => 25,
                'weakness' => 3,
                'weakness_type' => 'Desconhecida',
                'stars' => 3,
                'pokedex_id' => 92,
                'trainer_id' => User::inRandomOrder()->first()->id
            ],
        ];

        
        DB::table('pokemons')->insert($pokemons);
    }
}