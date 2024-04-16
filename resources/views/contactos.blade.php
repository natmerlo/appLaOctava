@extends('layouts.pltprincipal')

@section('titpagina', 'La Octava - Contactos')

@section('contenidosPrincipales')

    <!-- Menu de navegación -->
    @livewire('componentes.app.menu')

    <div>
        @livewire('componentes.banner.contacto')
    </div>

   <div class="lg:pb-36">

        @livewire('componentes.contacto')

    </div>


    <div>
        @livewire('componentes.app.footer')
    </div>



@endsection

@section('scriptsJava')

    <script src="{{ asset('/js/js-principal.js') }}"></script>

@endsection
