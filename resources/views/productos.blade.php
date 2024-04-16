@extends('layouts.pltprincipal')

@section('titpagina', 'La Octava - Productos')

@section('contenidosPrincipales')

    <!-- Menu de navegación -->
    @livewire('componentes.app.menu')

    <div>
        @livewire('componentes.banner.productos')
    </div>

   <div>
        @livewire('componentes.productoslista', ['filtCategoria' => session('categActual'), 'varLinea' => '1'])

    </div>

    <div class="lg:pt-36">
        @livewire('componentes.app.footer')
    </div>

@endsection

@section('scriptsJava')

    <script src="{{ asset('/js/js-principal.js') }}"></script>

@endsection
