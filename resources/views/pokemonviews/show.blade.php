<!DOCTYPE html>
<html>
<head>
    <title>{{ $pokemon['name'] }} Details</title>
</head>
<body>
    <h1>{{ $pokemon['name'] }} Details</h1>
    <ul>
        <li>ID: {{ $pokemon['id'] }}</li>
        <li>Nombre: {{ $pokemon['name'] }}</li>
        <li>Descripción: {{ $description }}</li>
        <li>Tipo: {{ implode(', ', $types) }}</li>
        <li>Debilidades: {{ implode(', ', $debilidades) }}</li>

        <!-- Mostrar la imagen del Pokémon -->
        <img src="{{ $pokemon['sprites']['front_default'] }}" alt="{{ $pokemon['name'] }}">

        <!-- Otras propiedades del Pokémon según sea necesario -->
        <a href="{{ route('pokemon.index')}}">Regresar</a>
    </ul>
</body>
</html>
