<!DOCTYPE html>
<html>
<head>
    <title>Pokémon List</title>
</head>
<body>
    <nav>
        <a href=""></a>
    </nav>
    <h1>Pokémon List</h1>
    <ul>
        @foreach($pokemonList as $pokemon)
        <div>
            <a href="{{ route('pokemon.show',  $pokemon['p_id']) }}">
                <div>
                    <img src="{{ $pokemon['image_url'] }}" alt="{{  $pokemon['url'] }}">
                    <p>No: {{ $pokemon['p_id'] }}</p>
                    <h3>{{ $pokemon['name'] }}</h3>
                    <p>Tipos: {{ implode(', ', $pokemon['types']) }}</p>
                </div>
            </a>
        </div>
        @endforeach
    </ul>
</body>
</html>
