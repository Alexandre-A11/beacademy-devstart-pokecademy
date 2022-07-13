<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pokemon extends Model
{
    use HasFactory;
    protected $table = 'pokemons';

    protected $fillable = [
        'name',
        'type',
        'image',
        'description',
        'power',
        'damage',
        'attack',
        'healthy',
        'pokedex_id',
        'stars',
        'user_id',
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
