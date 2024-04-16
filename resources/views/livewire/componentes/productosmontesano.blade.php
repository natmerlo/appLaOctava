<div class="px-6 py-16 mx-auto max-w-[84rem] md:px-16 xl:px-24 text-green mont lg:space-y-20">

    <div class="mb-8 space-y-4 text-center">
        <img class="mx-auto" src="img/montesano.png" alt="Linea Montesano Logo">
        <p class="lg:text-xl">Conozca todos los exquisitos productos de la línea Montesano, nuestra marca
            Premium.</p>
    </div>


    <div class="grid gap-5 px-4 md:grid-cols-2 lg:grid-cols-3 lato justify-items-center lg:px-0 lg:gap-y-8">
        @foreach ($productos as $producto)
        <div
            class="flex flex-col justify-between gap-4 p-6 pb-7 shadow h-[440px] xl:w-[375px] xl:h-[528px] xl:p-7 xl:pb-9">
            <div class="h-[200px] lg:min-h-[240px] lg:w-[321px]">
                <img class="object-cover h-full" src="{{ asset('img/productos/' . $producto->pathImg) }}" alt="">
            </div>


            <h3 class="text-xl font-bold">{{ $producto->nombre }}</h3>

            <ul class="italic font-light text-blue ">
                {{--  
                @if($producto->tiempoCurado!='')
                    <li>Curado: {{ $producto->tiempoCurado }}</li>
                @endif
                --}}

                @if ($producto->peso!='')
                <li>Peso: {{ $producto->peso }}</li>
                @endif

                @if ($producto->codigo!='')
                <li>Código: {{ $producto->codigo }}</li>
                @endif
            </ul>

            <div class="max-h-[46px] overflow-hidden hidden xl:flex">
                <p class="text-blue">{{ $producto->descrip }}</p>
            </div>

            <a class="flex font-[800]" href="{{ route('ProductoDetalle', ['3', $producto->id]) }}">
                Ver detalles
                <svg class="w-4 mt-[2px] ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 5h12m0 0L9 1m4 4L9 9" />
                </svg>
            </a>
        </div>
        @endforeach
    </div>



</div>