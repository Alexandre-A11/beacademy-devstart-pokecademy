<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pokemon extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'pokemons';

    protected $fillable = [
        'name',
        'type',
        'image',
        'power',
        'attack',
        'defense',
        'healthy',
        'weakness',
        'weakness_type',
        'stars',
        'pokedex_id',
        'trainer_id',
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class, 'trainer_id');
    }
}