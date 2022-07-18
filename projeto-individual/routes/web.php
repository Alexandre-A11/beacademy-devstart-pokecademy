<?php

use App\Http\Controllers\PokemonController;
use App\Http\Controllers\TrainerController;
use Illuminate\Support\Facades\Route;


Route::get('/', [TrainerController::class, 'index'])->middleware(['auth'])->name('dashboard');
Route::get('/capture', [PokemonController::class, 'show_capture'])->middleware(['auth'])->name('show.capture');
Route::post('/capture', [PokemonController::class, 'capture'])->middleware(['auth'])->name('pokemon.capture');
Route::get('/rename/{id}', [PokemonController::class, 'edit'])->middleware(['auth'])->name('pokemon.edit');
Route::put('/rename/{id}', [PokemonController::class, 'update'])->middleware(['auth'])->name('pokemon.rename');
Route::delete('/release/{id}', [PokemonController::class, 'delete'])->middleware(['auth'])->name('pokemon.release');

require __DIR__.'/auth.php';