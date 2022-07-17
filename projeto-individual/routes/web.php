<?php

use App\Http\Controllers\PokemonController;
use App\Http\Controllers\TrainerController;
use Illuminate\Support\Facades\Route;


Route::get('/', [TrainerController::class, 'index'])->middleware(['auth'])->name('dashboard');
Route::get('/capture', [PokemonController::class, 'show_capture'])->middleware(['auth'])->name('show.capture');
Route::post('/capture', [PokemonController::class, 'capture'])->middleware(['auth'])->name('pokemon.capture');

require __DIR__.'/auth.php';