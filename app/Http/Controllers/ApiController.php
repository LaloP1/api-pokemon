<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
            $limit = 8; // Cantidad de Pokémon por página
            $page = request()->input('page', 1);

            // Realiza una solicitud HTTP a la API de Pokémon para obtener la lista
            $response = Http::get("https://pokeapi.co/api/v2/pokemon", [
                'limit' => $limit,
                'offset' => ($page - 1) * $limit,
            ]);

         if($response->successful()){
            $data = $response->json();
             // Extrae la lista de Pokémon de la respuesta JSON
             $pokemonList = $data['results'];

             foreach($pokemonList as &$Letras){
                $Letras['nombre']= strtoupper(substr($Letras['name'], 0, 1)) . substr($Letras['name'], 1);
             }
            //  dd($pokemonList);

            // Obtener la URL directa de la imagen para cada Pokémon
            foreach ($pokemonList as &$pokemon) {
                $pokemonDetails = Http::get($pokemon['url'])->json();
                $pokemon['image_url'] = $pokemonDetails['sprites']['front_default'];
                $pokemon['p_id'] = $pokemonDetails['id'];

                // Obtener todos los tipos del Pokémon
                $types = [];
                foreach ($pokemonDetails['types'] as $typeData) {

                    // Obtener el nombre del tipo en español haciendo una solicitud a la API de tipos
                    $typeDetailsResponse = Http::get($typeData['type']['url']);
                    if($typeDetailsResponse->successful()){
                        $typeDetails = $typeDetailsResponse->json();
                        $typeNames = $typeDetails['names'];
                    }
                    foreach($typeNames as $typeName){
                        if($typeName['language']['name'] === 'es'){
                            $types[] = $typeName['name'];
                            break;
                        }
                    }

                }
                $pokemon['types'] = $types;

            }
            //  dd($pokemonDetails);

            return view('pokemonviews.index', compact('pokemonList', 'page'));


         }else{
            // Manejar el error si la solicitud a la API falla
            return response()->json(['error' => 'No se pudo obtener información del Pokémon'], $response->status());
         }

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
            $response = Http::get("https://pokeapi.co/api/v2/pokemon/{$id}");

        if ($response->successful()) {
            $pokemon = $response->json();

           // Obtener la descripción de la especie en español
           $speciesResponse = Http::get($pokemon['species']['url']);

           if($speciesResponse->successful()){
            $speciesDetails = $speciesResponse->json();
            $description = 'No hay una descripción disponible en español.';
            foreach($speciesDetails['flavor_text_entries'] as $flavorTextEntry){
                if($flavorTextEntry['language']['name'] == 'es'){
                    $description = $flavorTextEntry['flavor_text'];
                    break;
                }
            }
           }else{
                $description = 'No hay descripcion disponible.';
           }
           $types = [];
           foreach($pokemon['types'] as $typeData){
                $typeDetailsResponse = Http::get($typeData['type']['url']);
                if($typeDetailsResponse->successful()){
                    $typeDetails = $typeDetailsResponse->json();
                    $typeNames = $typeDetails['names'];
                    foreach($typeNames as $typeName){
                        if($typeName['language']['name'] === 'es'){
                            $types[] = $typeName['name'];
                            break;
                        }
                    }
                }
           }
           $debilidades = [];
           return view('pokemonviews.show', compact('pokemon', 'description', 'types', 'debilidades'));
        }else{
            return response()->json(['error'=>'No se pudo obtener información del Pokémon'], $response->status());
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
