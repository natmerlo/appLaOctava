@extends('layouts.pltprincipal')

@section('titpagina', 'La Octava')

@section('contenidosPrincipales')

      @livewire('componentes.app.menupaneladmin')
      
      <div class="mt-[3rem]">
            @livewire('componentes.paneladmin.listproductos')
      </div>
      
      <div class="mt-[3rem]">
            @livewire('componentes.paneladmin.listrecetas')
      </div>

@endsection

@section('scriptsJava')

    <script src="{{ asset('/js/js-mnupaneladmin.js') }}"></script>
    
@endsection



