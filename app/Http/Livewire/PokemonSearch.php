<?php

// app/Http/Livewire/PokemonSearch.php
namespace App\Http\Livewire;
use Livewire\Component;
use Illuminate\Support\Facades\Http;
use Livewire\WithPagination;

class PokemonSearch extends Component
{
    use WithPagination;

    public $searchTerm = '';

    public function render()
    {
        $response = Http::get("https://pokeapi.co/api/v2/pokemon", [
            'limit' => 8,
        ]);

        if ($response->successful()) {
            $data = $response->json();
            $pokemonList = $data['results'];
            $this->pokemonList = $this->paginate($this->pokemonList, $data['count'], 8);
        }

        return view('livewire.pokemon-search');
    }
}
