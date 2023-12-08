<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ApiController;

// use App\Http\Livewire\PokemonSearch;

// use Livewire\Livewire;
Route::get('/', function () {
    return view('welcome');
});

Route::resource('/pokemon', ApiController::class);

// Utiliza el método `livewire` directamente
// Route::livewire('/pokemon-search', 'pokemon-search')->name('pokemon.search');
