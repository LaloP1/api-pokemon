    <x-header/>
    <main class="items-center mx-auto max-w-screen-xl p-4">
        <h1 class="text-3xl text-lime-400">Pokémon List</h1>
        <section class="flex flex-wrap justify-center mx-auto">
                    @foreach($pokemonList as $pokemon)
                        <div class="w-full sm:w-1/2 md:w-1/2 lg:w-[20%] xl:w-[20%] p-4 m-4 bg-[#FFFFFF] rounded-[12px] shadow-nv hover:border  hover:border-[#3A72F5] transition-transform hover:transform hover:-translate-y-2">
                            <a href="{{ route('pokemon.show',  $pokemon['p_id']) }}">
                                <div>
                                    <div class="flex items-center justify-center">
                                        <img src="{{ $pokemon['image_url'] }}" alt="{{ $pokemon['url'] }}" class="w-[212px] h-[212px]">
                                    </div>
                                    <div>
                                        <p class="font-geologica opacity-[0.5] text-[15px] not-italic tracking-normal">No: {{ $pokemon['p_id'] }}</p>
                                        <h3 class="font-medium not-italic text-[22px] font-geologica tracking-normal">{{ $pokemon['nombre'] }}</h3>
                                        @foreach ($pokemon['types'] as $type )
                                            <div>
                                                <p class="not-italic text-[10px] font-geologica tracking-normal opacity-[1]">{{ $type }}</p>
                                                {{-- <p>Tipos: {{ implode(', ', $pokemon['types']) }}</p> --}}
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
        </section>

        <div class="">
            <ul class="">
                <li>
                    @if ($page > 1)
                        <a href="{{ route('pokemon.index', ['page' => $page - 1]) }}" class="text-xl"><i class="fa-solid fa-arrow-left"></i>Página anterior</a>
                    @endif
                </li>
                <li>
                    <a href="{{ route('pokemon.index', ['page' => $page + 1]) }}" class="text-xl">Siguiente página<i class="fa-solid fa-arrow-right"></i></a>
                </li>
            </ul>
        </div>
    </main>
</body>
</html>


