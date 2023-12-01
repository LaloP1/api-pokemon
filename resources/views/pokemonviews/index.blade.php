<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
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
    <div class="">
        <ul class="">
            <li>
                @if ($page > 1)
                    <a href="{{ route('pokemon.index', ['page' => $page - 1]) }}" class="text-xl hover:text-gray-100"><i class="fa-solid fa-arrow-left"></i>Página anterior</a>
                @endif
            </li>
            <li>
                <a href="{{ route('pokemon.index', ['page' => $page + 1]) }}" class="text-xl hover:text-gray-100">Siguiente página<i class="fa-solid fa-arrow-right"></i></a>
            </li>
        </ul>
    </div>

</body>
</html>


