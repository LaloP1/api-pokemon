<div>
    <form wire:submit.prevent="render">
        <input wire:model="searchTerm" type="text" placeholder="Buscar Pokémon por nombre o número">
        <button type="submit">Buscar</button>
    </form>

    <ul>
        @foreach($pokemonList as $pokemon)
            <li>{{ $pokemon['name'] }}</li>
        @endforeach
    </ul>

    {{ $pokemonList->links() }}
</div>
