<div class="px-10 py-16 mx-auto md:px-16 text-blue-100 mont max-w-7xl text-center">

    <h2 class="subtitulo eucrosia mb-4">
        ¡Manos a la obra!
    </h2>


    <div class="lg:firulete-recetas lg:pt-4 lg:pb-[5rem]">
        <p class="lg:text-[18px] lg:mb-16 mb-5">Crea los platos más originales y sabrosos con nuestra variedad de
            fiambres.
        </p>

        <div class="grid md:grid-cols-3 justify-items-center lg:px-16 xl:px-[5rem] lg:gap-9 md:gap-4 ">

            @foreach ($recetas as $it)

            <a class="block w-full h-[207px] lg:h-[260px] " href="{{ Route('RecetaDetalle', ['2', $it->id]) }}" style="background-image: url('{{ asset('img/recetas/' . $it->pathImg) }}');
                   background-size: cover;
                   background-repeat: no-repeat;
                   background-position: center;">

                <h3
                    class="hidden md:block md:opacity-0 md:hover:opacity-100  transition p-8 md:text-[22px] font-[900] text-white lato backdrop-blur  h-full content-center shadow-md leading-6 backdrop-contrast-50">
                    {{ $it->nombre }}
                </h3>
            </a>

            <div class="md:hidden shadow p-5 w-full mb-8">
                <p class="lato font-[800] text-xl">{{ $it->nombre }}</p>
            </div>

            @endforeach
        </div>
    </div>

</div>