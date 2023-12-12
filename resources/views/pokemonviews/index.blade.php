    <x-header/>
    <main class="items-center mx-auto max-w-screen-xl p-4">
        <section>
            <div class="grid grid-cols-12 mt-[47px] mb-[32px]">

                <form id="formBuscar" action="{{ route('pokemon.store') }}" method="GET" class="col-start-2 col-span-3">
                    <p class="font-[geologica] text-[18px] mb-[3px] text-[#060D33]">Nombre o número</p>
                    <input name="nombre" id="nombre" required class="border border-[#D1D5DB] h-[50px] w-[346px] rounded-[10px]" type="text">
                </form>

            </div>
        </section>

        @if(isset($pokemon))
            <div class="flex justify-center flex-wrap items-center" id="resultados">
                <a href="{{ route('pokemon.show', $pokemon['id']) }}" class="flex justify-center flex-col items-center mx-3 bg-white my-3 h-[333px] rounded-md w-1/5 ded-[12px] shadow-nv hover:border hover:border-[#3A72F5] transition-transform hover:transform hover:-translate-y-3">
                    <div>
                        <img src="{{ $pokemon['sprites']['front_default'] }}" class="w-[212px] h-[212px]" alt="">
                    </div>
                    <div class="flex flex-col justify-center w-[212px]">
                        <p class="opacity-50 font-[geologica] text-[15px]">No: 000{{ $pokemon['id'] }}</p>
                        <p class="first-letter:uppercase text-[22px] font-[geologica]">{{ $pokemon['name'] }}</p>
                        <div>
                            <x-tipos :pokemon="$pokemon" />
                        </div>
                    </div>
                </a>
            </div>
        @endif

        <section class="flex flex-wrap justify-center mx-auto">
                    @foreach($pokemonListPaginated as $pokemon)
                        <div class="w-full sm:w-1/2 md:w-1/2 lg:w-[20%] xl:w-[20%] p-4 m-4 bg-[#FFFFFF] rounded-[12px] shadow-nv hover:border  hover:border-[#3A72F5] transition-transform hover:transform hover:-translate-y-2">
                            <a href="{{ route('pokemon.show',  $pokemon['p_id']) }}">
                                <div>
                                    <div class="flex items-center justify-center">
                                        <img src="{{ $pokemon['image_url'] }}" alt="{{ $pokemon['url'] }}" class="w-[212px] h-[212px]">
                                    </div>
                                    <div>
                                        <p class="font-geologica opacity-[0.5] text-[15px] not-italic tracking-normal">No: {{ $pokemon['p_id'] }}</p>
                                        <h3 class="font-medium not-italic text-[22px] font-geologica tracking-normal">{{ ucfirst($pokemon['name'])}}</h3>
                                        <x-tipos :pokemon="$pokemon" />
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
        </section>

            <!-- INICIO DE NAVEGACION -->

            <div class="flex justify-between border-t border-gray-200 bg-[#F5F8FA] mt-[42px] px-4 py-3 sm:px-6">
                <div class="sm:flex sm:flex-1 sm:items-center sm:justify-between">
                    <div>
                        <p class="text-sm text-gray-700">
                            Pagina
                            <span class="font-medium">{{ $pokemonListPaginated->currentPage() }}</span>
                        </p>
                    </div>

                    <div>
                        <nav class="isolate inline-flex -space-x-px rounded-md shadow-sm" aria-label="Pagination">
                            @if ($pokemonListPaginated->previousPageUrl())
                                <a href="{{ $pokemonListPaginated->previousPageUrl() }}" class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 border border-gray-300 rounded-md hover:bg-gray-50 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100 transition ease-in-out duration-150">
                                    Anterior
                                </a>
                            @endif

                                <a href="{{ route('pokemon.index', ['page' => $pokemonListPaginated->currentPage() + 1]) }}" class="relative ml-3 inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 border border-gray-300 rounded-md hover:bg-gray-50 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100 transition ease-in-out duration-150">
                                    Siguiente
                                </a>
                        </nav>
                    </div>
                </div>
            </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="{{ asset('js/loader.js') }}"></script>
</body>
</html>


