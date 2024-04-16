@extends('layouts.pltprincipal')

@section('titpagina', 'La Octava')

@section('contenidosPrincipales')

<!-- Menu de navegación -->
@livewire('componentes.app.menu')

<div>
    {{-- Banner inicio --}}
    @livewire('componentes.banner.inicio')

    {{-- Productos destacados--}}
    @livewire('componentes.slider.productos')

</div>


{{-- Linea Montesano --}}
<div class="xl:pb-[130px] xl:pt-[calc(133px-64px)]">
    @livewire('componentes.lineamontesanoinicio')
</div>


<div class="bg-blue-100 lg:pb-36">
    {{-- Recetas Destacadas --}}
    @livewire('componentes.slider.recetas')

</div>

<div>
    @livewire('componentes.app.footer')
</div>


@endsection

@section('scriptsJava')

<script src="{{ asset('/js/js-principal.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper(".swiper", {
            effect: "coverflow",
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: "auto",
            coverflowEffect: {
                rotate: 0,
                stretch: 0,
                depth: 100,
                modifier: 2,
                slideShadows: false
            },
            keyboard: {
                enabled: true,
   
            },
            mousewheel: {
                enabled: false,
                
            },
            spaceBetween: 70,
            loop: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true
            },
            navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
            },
    
            

        });
</script>

<script src="{{ asset('/js/js-principal.js') }}"></script>

@endsection