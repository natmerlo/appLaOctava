@extends('layouts.pltprincipal')

@section('titpagina', 'La Octava - Productos')

@section('contenidosPrincipales')

<!-- Menu de navegación -->
@livewire('componentes.app.menu')
<!-- Aquí es donde tenes que maquetar el Detalle de un Producto -->

@if ($dtosProd[0]->idLinea == 1)
<div class="px-6 py-16 mx-auto text-blue-100 xl:max-w-[80rem] md:px-16 mont ">
    <div class="grid lg:grid-cols-2 justify-items-center">
        
        <div class="h-[347px] w-auto lg:h-[565px] mb-8 lg:mb-0">
            <img src="{{ asset('img/productos/' . $dtosProd[0]->pathImg) }}" alt="Producto"
                class="object-cover w-full h-full" />
        </div>

        <div class="flex flex-col xl:pt-12 lg:ml-20 ">
            <div class="space-y-8 lg:py-12 lg:firulete-producto lg:pr-5">
                <h2 class="text-4xl lg:text-5xl subtitulo eucrosia ">{{ $dtosProd[0]->nombre }}</h2>
                <ul class="font-[500] lg:text-xl">
                    <li>Peso: {{ $dtosProd[0]->peso }}</li>
                    <li>Código: {{ $dtosProd[0]->codigo }}</li>

                </ul>


                <p class="text-justify">{{ $dtosProd[0]->descrip }}</p>

                <div class="flex justify-center lg:hidden">
                    <img class="w-[80%]" src="{{ asset('img/recursos/firulete_producto_mobile.svg') }}"
                        alt="">
                </div>

            </div>
        </div>
    </div>
</div>
@else

<div class="px-6 py-16 mx-auto text-green xl:max-w-[80rem] md:px-16 mont ">
    <div class="grid lg:grid-cols-2 justify-items-center">

        <div class="h-[347px] w-auto lg:h-[565px] mb-8 lg:mb-0">
            <img src="{{ asset('img/productos/' . $dtosProd[0]->pathImg) }}" alt="Producto"
                class="object-cover w-full h-full" />
        </div>

        <div class="flex flex-col lg:ml-20">
            <div class="lg:pr-5 space-y-6 lg:py-12 lg:firulete-producto-mont">
                <h2 class="text-4xl lg:text-5xl subtitulo eucrosia ">{{ $dtosProd[0]->nombre }}</h2>
                <ul class="font-[500] lg:text-xl">
                    <li>Peso: {{ $dtosProd[0]->peso }}</li>
                    <li>Código: {{ $dtosProd[0]->codigo }}</li>
                </ul>

                <div class="firulete-descripcion-mont lg:py-14 py-12 text-justify">
                    <p>{{ $dtosProd[0]->descrip }}</p>
                </div>
            </div>

        </div>
    </div>
</div>
@endif

<div class="lg:pt-36">
    @livewire('componentes.app.footer')
</div>


@section('scriptsJava')

    <script src="{{ asset('/js/js-principal.js') }}"></script>

@endsection
