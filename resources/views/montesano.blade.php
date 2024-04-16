@extends('layouts.pltprincipal')

@section('titpagina', 'La Octava - Montesano')

@section('contenidosPrincipales')

    <!-- Menu de navegación -->
    @livewire('componentes.app.menu')


    <div>
        @livewire('componentes.banner.montesano')
    </div>

    <div>
        @livewire('componentes.productosmontesano', ['varLinea' => '2'])
    </div>

    <div class="lg:pt-36">
        @livewire('componentes.app.footer')
    </div>



@endsection

@section('scriptsJava')

    <script src="{{ asset('/js/js-principal.js') }}"></script>

@endsection
