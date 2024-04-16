<div class="py-16 text-white bg-blue-100 mont">
    <div class="px-6 mx-auto lg:gap-10 lg:flex max-w-7xl md:px-16 ">
        <div class="lg:border-l-[5px] border-gold-100 lg:pl-6">
            <div class="flex flex-col lg:flex-row lg:items-baseline lg:gap-12">

                <div class="pl-4 border-l-[3px] lg:border-l-0 border-gold-100 py-2 lg:px-0">
                    <h2 class="subtitulo eucrosia">Recetas Destacadas</h3>
                </div>


                <a class="hidden text-[18px] font-bold lg:flex lg:flex-row text-gold-100"
                    href="{{ route('mnuRecetas') }}">
                    Ver más
                    <svg class="w-4 ml-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </a>

            </div>

            <p class="px-5 pt-1 lg:text-[18px] lg:px-0">
                Las recetas más ricas para preparar con tus productos favoritos de La Octava.
            </p>

        </div>
    </div>

    <div class="pt-10 lg:pt-20 swiper">
        <div class="mb-12 swiper-wrapper">



            @foreach ($recetas as $receta)
            <div id="recetas" class="swiper-slide w-[267px] lg:w-[316px]">
                <div class="space-y-5">
                    <a href="{{ Route('RecetaDetalle',['1', $receta->id] ) }}">
                        <img class="shadow-xl h-[270px] lg:h-[316px] lg:w-[316px] "
                            src="{{ asset('img/recetas/' . $receta->pathImg) }}" alt="Recetas">
                    </a>

                    <h3 class="text-3xl font-semibold leading-7 text-center eucrosia lg:text-4xl lg:leading-8">{{
                        $receta->nombre }}
                    </h3>
                </div>
            </div>


            @endforeach



        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>


        <div class="recetas">
            <div class="hidden text-white lg:flex swiper-button-prev lg:left-[30%]  xl:left-[35%] lg:top-[40%]"></div>
            <div class="hidden text-white lg:flex swiper-button-next lg:right-[30%] xl:right-[35%] lg:top-[40%]"></div>
        </div>

    </div>

    <div class="px-10 mt-8 md:px-16 lg:hidden">
        <a href=""
            class="block py-[14px] font-semibold text-white transition-colors shadow-md bg-gold-100 hover:bg-gold-200 lg:py-4 text-center">Ver
            todas</a>
    </div>
</div>