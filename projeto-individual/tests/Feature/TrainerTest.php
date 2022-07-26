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
    public function test_trainer()
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
}