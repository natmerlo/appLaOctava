@extends('layouts.pltprincipal')

@section('titpagina', 'La Octava - Historia')

@section('contenidosPrincipales')

    <!-- Menu de navegación -->
    @livewire('componentes.app.menu')

    <div>
        @livewire('componentes.banner.historia')
    </div>

    <div class="lg:pb-36">

        @livewire('componentes.historia')

    </div>


    <div>
        @livewire('componentes.app.footer')
    </div>


@endsection

@section('scriptsJava')

    <script src="{{ asset('/js/js-principal.js') }}"></script>

@endsection
