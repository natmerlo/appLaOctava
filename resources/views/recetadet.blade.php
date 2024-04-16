@extends('layouts.pltprincipal')

@section('titpagina', 'La Octava - Recetas')

@section('contenidosPrincipales')

<!-- Menu de navegación -->
@livewire('componentes.app.menu')

<div class="relative text-white mont" style="background-image: url({{ asset('img/recetas/' . $dtosReceta->pathImg) }})">
    <div class="absolute inset-0 z-10 bg-blue-100 bg-opacity-95"></div>
</div>

<div class="relative pb-48 text-white bg-no-repeat bg-cover"
    style="background-image: url({{ asset('img/recetas/' . $dtosReceta->pathImg) }})">
    {{-- Pseudo-elemento para agregar el color azulado transparente --}}
    <div class="absolute inset-0 z-10 bg-blue-100 bg-opacity-95"></div>

    <div class="grid px-6 py-16 mx-auto lg:grid-cols-2 max-w-7xl md:px-16 mont">

        <div class="relative z-20 lg:w-[400px] xl:w-[458px] p-6 lg:p-8 flex flex-col gap-6"
            style="background-image: linear-gradient(180deg, rgba(197,154,111,1) 42%, rgba(197,154,111,0) 82%);">

            <h2 class="lg:hidden subtitulo eucrosia">{{ $dtosReceta->nombre }}</h2>
            <h2 class="hidden lg:block subtitulo eucrosia">Ingredientes:</h2>


            <ul class="order-3 pl-3 list-disc list-inside">
                @foreach ($dtosIngredientes as $ingrediente)
                <li>{{ $ingrediente->descIngrediente }}</li>
                @endforeach
            </ul>

            <img class="w-full lg:h-[350px] object-cover lg:order-3"
                src="{{ asset('img/recetas/' . $dtosReceta->pathImg) }}" alt="Receta" class="z-10">
        </div>

        <div class="relative z-20 flex flex-col gap-8">

            <div class="space-y-8 lg:mb-24 lg:mt-6">
                <h2 class="hidden lg:flex subtitulo eucrosia">{{ $dtosReceta->nombre }}</h2>

                <h2 class="lg:hidden subtitulo eucrosia">Preparación</h2>

                <ul class="text-gold-100 lg:text-[18px]">

                    <li class="flex gap-3 ">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="#C59A6F" width="22" height="22"
                            viewBox="0 0 24 24">
                            <path
                                d="M12 2c5.514 0 10 4.486 10 10s-4.486 10-10 10-10-4.486-10-10 4.486-10 10-10zm0-2c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm1 12v-6h-2v8h7v-2h-5z" />
                        </svg><strong>Preparación:</strong> {{ $dtosReceta->tiempoPreparacion }}

                    </li>

                    <li class="flex gap-3"><svg xmlns="http://www.w3.org/2000/svg" fill="#C59A6F" width="22" height="22"
                            viewBox="0 0 24 24">
                            <path
                                d="M18.513 7.119c.958-1.143 1.487-2.577 1.487-4.036v-3.083h-16v3.083c0 1.459.528 2.892 1.487 4.035l3.086 3.68c.567.677.571 1.625.009 2.306l-3.13 3.794c-.936 1.136-1.452 2.555-1.452 3.995v3.107h16v-3.107c0-1.44-.517-2.858-1.453-3.994l-3.13-3.794c-.562-.681-.558-1.629.009-2.306l3.087-3.68zm-4.639 7.257l3.13 3.794c.652.792.996 1.726.996 2.83h-1.061c-.793-2.017-4.939-5-4.939-5s-4.147 2.983-4.94 5h-1.06c0-1.104.343-2.039.996-2.829l3.129-3.793c1.167-1.414 1.159-3.459-.019-4.864l-3.086-3.681c-.66-.785-1.02-1.736-1.02-2.834h12c0 1.101-.363 2.05-1.02 2.834l-3.087 3.68c-1.177 1.405-1.185 3.451-.019 4.863z" />
                        </svg><strong>Tiempo de cocción:</strong> {{ $dtosReceta->tiempoCoccion }}

                    </li>

                    <li class="flex gap-3"><svg fill="#C59A6F" width="22" height="22" xmlns="http://www.w3.org/2000/svg"
                            fill-rule="evenodd" clip-rule="evenodd">
                            <path
                                d="M18.496 24h-.001c-.715 0-1.5-.569-1.5-1.5v-8.5s-1.172-.003-2.467 0c.802-6.996 3.103-14 4.66-14 .447 0 .804.357.807.851.01 1.395.003 16.612.001 21.649 0 .828-.672 1.5-1.5 1.5zm-11.505-12.449c0-.691-.433-.917-1.377-1.673-.697-.56-1.177-1.433-1.088-2.322.252-2.537.862-7.575.862-7.575h.6v6h1.003l.223-6h.607l.173 6h1.003l.242-6h.562l.199 6h1.003v-6h.549s.674 5.005.951 7.55c.098.902-.409 1.792-1.122 2.356-.949.751-1.381.967-1.381 1.669v10.925c0 .828-.673 1.5-1.505 1.5-.831 0-1.504-.672-1.504-1.5v-10.93z" />
                        </svg><strong>Listo en:</strong> {{ $dtosReceta->tiempoTotal }}
                    </li>
                </ul>

                @foreach ($dtosPrepar as $it)
                @if ($it->tagHtml == 't')
                <h2 class="{{ $it->estilos }}">{{ $it->parrafo }}</h2>
                @endif
                @if ($it->tagHtml == 'p')
                <p>{{ $it->parrafo }}</p>
                @endif
                @endforeach

            </div>

            {{-- paginación --}}
            <div class="flex justify-between gap-3">

                @if($recetaAnterior)

                <div class="flex flex-col items-start basis-1/3">
                    <a class="flex flex-col w-12 p-1 shadow bg-gold-100"
                        href="{{ route('RecetaDetalle', [$ori, 'id' => $recetaAnterior->id]) }}"><svg
                            clip-rule="evenodd" fill-rule="evenodd" fill="white" stroke-linejoin="round"
                            stroke-miterlimit="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="m9.474 5.209s-4.501 4.505-6.254 6.259c-.147.146-.22.338-.22.53s.073.384.22.53c1.752 1.754 6.252 6.257 6.252 6.257.145.145.336.217.527.217.191-.001.383-.074.53-.221.293-.293.294-.766.004-1.057l-4.976-4.976h14.692c.414 0 .75-.336.75-.75s-.336-.75-.75-.75h-14.692l4.978-4.979c.289-.289.287-.761-.006-1.054-.147-.147-.339-.221-.53-.221-.191-.001-.38.071-.525.215z"
                                fill-rule="nonzero" />
                        </svg></a>
                    <div class="hidden lg:flex text-left font-[600] mt-4">{{ $recetaAnterior->nombre }}</div>

                </div>

                <div class="hidden lg:inline-block text-center text-3xl font-[600] basis-1/3">{{ $dtosReceta->id
                    }}</div>

                @else
                <div>
                    <a class="flex flex-col w-12 p-1 shadow bg-[#717171c9]" href=""><svg clip-rule="evenodd"
                            fill-rule="evenodd" fill="white" stroke-linejoin="round" stroke-miterlimit="2"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="m9.474 5.209s-4.501 4.505-6.254 6.259c-.147.146-.22.338-.22.53s.073.384.22.53c1.752 1.754 6.252 6.257 6.252 6.257.145.145.336.217.527.217.191-.001.383-.074.53-.221.293-.293.294-.766.004-1.057l-4.976-4.976h14.692c.414 0 .75-.336.75-.75s-.336-.75-.75-.75h-14.692l4.978-4.979c.289-.289.287-.761-.006-1.054-.147-.147-.339-.221-.53-.221-.191-.001-.38.071-.525.215z"
                                fill-rule="nonzero" />
                        </svg></a>
                </div>

                @endif

                @if($recetaPosterior)

                <div class="flex flex-col items-end basis-1/3">
                    <a class="flex flex-col w-12 p-1 shadow bg-gold-100"
                        href="{{ route('RecetaDetalle', [$ori, 'id' => $recetaPosterior->id]) }}"><svg
                            clip-rule="evenodd" fill="white" fill-rule="evenodd" stroke-linejoin="round"
                            stroke-miterlimit="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="m14.523 18.787s4.501-4.505 6.255-6.26c.146-.146.219-.338.219-.53s-.073-.383-.219-.53c-1.753-1.754-6.255-6.258-6.255-6.258-.144-.145-.334-.217-.524-.217-.193 0-.385.074-.532.221-.293.292-.295.766-.004 1.056l4.978 4.978h-14.692c-.414 0-.75.336-.75.75s.336.75.75.75h14.692l-4.979 4.979c-.289.289-.286.762.006 1.054.148.148.341.222.533.222.19 0 .378-.072.522-.215z"
                                fill-rule="nonzero" />
                        </svg></a>
                    <div class="hidden lg:inline-block text-right font-[600] mt-4">{{ $recetaPosterior->nombre }}</div>
                </div>

                @else
                <div class="flex justify-end h-[48px] basis-1/3">
                    <a class="flex flex-col w-12 p-1 shadow bg-[#717171c9]" href=""><svg clip-rule="evenodd"
                            fill="white" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="m14.523 18.787s4.501-4.505 6.255-6.26c.146-.146.219-.338.219-.53s-.073-.383-.219-.53c-1.753-1.754-6.255-6.258-6.255-6.258-.144-.145-.334-.217-.524-.217-.193 0-.385.074-.532.221-.293.292-.295.766-.004 1.056l4.978 4.978h-14.692c-.414 0-.75.336-.75.75s.336.75.75.75h14.692l-4.979 4.979c-.289.289-.286.762.006 1.054.148.148.341.222.533.222.19 0 .378-.072.522-.215z"
                                fill-rule="nonzero" />
                        </svg></a>
                </div>
                @endif

            </div>

        </div>
    </div>
</div>


<div>
    @livewire('componentes.app.footer')
</div>

@endsection