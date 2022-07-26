<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TrainerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_access_route_trainers()
    {
        $trainer = User::factory()->create($attributes = ['isAdmin' => 1]);

        $response = $this->post('/login', [
            'email' => $trainer->email,
            'password' => $trainer->password,
            'password_confirmation' => $trainer->password,
        ]);

        $this->actingAs($trainer);

        $response = $this->get('/trainers');

        $response->assertStatus(200);
    }

    public function test_delete_trainer() {
        $trainer =  User::factory()->create($attributes = ['isAdmin' => 1]);
        
        $response = $this->actingAs($trainer)->delete("/trainer/{$trainer->id}");
        
        $response = $this->get('/');
        $response->assertStatus(200);
    }

    public function test_edit_trainer() {
        $trainer =  User::factory()->create($attributes = ['isAdmin' => 1]);
        
        $response = $this->actingAs($trainer)->put("/trainer/{$trainer->id}", [
            'name' => 'João',
        ]);

        $response = $this->get('/');
        $response->assertStatus(200);
    }

    public function test_access_route_trainer_perfil() {
        $trainer =  User::factory()->create($attributes = ['isAdmin' => 1]);
        
        $response = $this->actingAs($trainer)->get("/trainer/perfil/{$trainer->id}");
        
        $response->assertStatus(200);
    }
    
}