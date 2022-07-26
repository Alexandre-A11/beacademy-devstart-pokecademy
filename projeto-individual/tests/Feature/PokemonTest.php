<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class PokemonTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_pokemon() {
        $trainer =  User::factory()->create($attributes = ['isAdmin' => 1]);
        
        Storage::fake('avatars');
        $file = UploadedFile::fake()->image('avatars.svg');
        
        $response = $this->actingAs($trainer)->post('/capture', [
        'name' => 'Pikachu',
        'type' => 'Elétrico',
        'image' => $file,
        'power' => '10',
        'attack' => 'Choque do Trovão',
        'defense' => '10',
        'healthy' => '25',
        'weakness' => 3,
        'weakness_type'=> 'Água',
        'stars' => 3,
        'trainer_id' => 1,
        "pokedex" => 25,
    ]);
    
        Storage::disk('avatars')->assertMissing($file->hashName());

       $response->assertRedirect('/'); 
    }
}