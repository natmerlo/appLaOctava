<div class="py-16 text-blue-100">

    <div class="items-center px-6 mx-auto lg:gap-10 lg:flex max-w-7xl md:px-16 lg:justify-between">

        <div class="flex items-center lg:gap-12">

            <div class="pl-4 border-l-[3px] lg:border-l-[5px] border-gold-100 py-2">
                <h2 class="subtitulo eucrosia">Productos</h3>
            </div>

            <a class="hidden text-[18px] font-bold lg:flex lg:flex-row text-gold-100 mt-2"
                href="{{ route('mnuProductosTodos') }}">
                Ver todos
                <svg class="w-4 ml-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 5h12m0 0L9 1m4 4L9 9" />
                </svg>
            </a>
        </div>


        <div class="hidden relative lg:flex w-[120px]">
            <div class="text-white bg-blue-100 shadow-md swiper-button-prev"></div>
            <div class="text-white bg-blue-100 shadow-md swiper-button-next"></div>
        </div>

    </div>


    <div class="py-5 swiper">

        <div class="swiper-wrapper">

            @foreach ($productos as $producto)
            <div class="mb-10 shadow-xl swiper-slide lato h-[440px] w-[311px] bg-white lg:w-[435px] lg:h-[610px]">
                <div class="flex flex-col justify-between h-full gap-5 p-6 pb-8 lg:p-8">
                    <img class="min-h-[200px] lg:h-[278px] object-auto"
                        src="{{ asset('img/productos/' . $producto->pathImg) }}" alt="Productos">


                    <h3 class="text-xl font-bold leading-5 lg:text-2xl">{{ $producto->nombre }}</h3>

                    <ul class="italic">
                        <li>Peso: {{ $producto->peso }}</li>
                        <li>Código: {{ $producto->codigo }}</li>
                    </ul>

                    <div class="hidden lg:flex max-h-[50px] overflow-hidden text-pretty">
                        <p>{{ $producto->descrip }}</p>
                    </div>

                    <a class="flex font-[800] text-blue-100 lg:text-gold-100"
                        href="{{ route('ProductoDetalle', ['1', $producto->id]) }}">
                        Ver detalles
                        <svg class="w-4 ml-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>

                </div>
            </div>
            @endforeach



        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>



    </div>

    <div class="px-10 mt-8 md:px-16 lg:hidden">
        <a href=""
            class="block py-[14px] font-semibold text-white transition-colors shadow-md bg-gold-100 hover:bg-gold-200 lg:py-4 text-center">Ver
            todos</a>
    </div>


</div>