<?php

use App\Http\Controllers\PokemonController;
use App\Http\Controllers\TrainerController;
use Illuminate\Support\Facades\Route;


Route::get('/', [TrainerController::class, 'index'])->middleware(['auth'])->name('dashboard');
Route::get('/capture', [PokemonController::class, 'show_capture'])->middleware(['auth'])->name('show.capture');
Route::post('/capture', [PokemonController::class, 'capture'])->middleware(['auth'])->name('pokemon.capture');
Route::delete('/release/{id}', [PokemonController::class, 'delete'])->middleware(['auth'])->name('pokemon.release');

require __DIR__.'/auth.php';