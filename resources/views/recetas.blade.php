@extends('layouts.pltprincipal')

@section('titpagina', 'La Octava - Recetas')

@section('contenidosPrincipales')

    <!-- Menu de navegación -->
    @livewire('componentes.app.menu')

    <div>
        @livewire('componentes.banner.recetas')
    </div>

    <div>

        @livewire('componentes.recetaslista')

    </div>

    <div class="lg:pt-36">
        @livewire('componentes.app.footer')
    </div>


@endsection

@section('scriptsJava')

    <script src="{{ asset('/js/js-principal.js') }}"></script>

@endsection
