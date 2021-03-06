<?php

use App\Http\Controllers\PokemonController;
use App\Http\Controllers\TrainerController;
use Illuminate\Support\Facades\Route;

require __DIR__.'/auth.php';


Route::middleware(['auth'])->group(function () {
Route::get('/', [TrainerController::class, 'index'])->name('dashboard');
Route::get('/trainer/perfil/{id}', [TrainerController::class, 'show'])->name('trainer.show');
Route::get('/trainer/{id}', [TrainerController::class, 'edit'])->middleware(['verify_id'])->name('trainer.edit');
Route::put('/trainer/{id}', [TrainerController::class, 'update'])->name('trainer.update');
Route::get('/trainers', [TrainerController::class, 'show_trainers'])->middleware(['admin'])->name('show.trainers');
Route::delete('/trainer/{id}', [TrainerController::class, 'delete'])->name('trainer.delete');

Route::get('/capture', [PokemonController::class, 'show_capture'])->name('show.capture');
Route::post('/capture', [PokemonController::class, 'capture'])->name('pokemon.capture');
Route::get('/rename/{id}', [PokemonController::class, 'edit'])->name('pokemon.edit');
Route::put('/rename/{id}', [PokemonController::class, 'update'])->name('pokemon.rename');
Route::delete('/release/{id}', [PokemonController::class, 'delete'])->name('pokemon.release');
});