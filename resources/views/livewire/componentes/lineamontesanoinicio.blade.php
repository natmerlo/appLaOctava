<div class="px-6 pb-16 mx-auto text-blue-100 lg:grid-col-2 max-w-7xl md:px-16 mont">
    <div class="grid lg:grid-cols-2 lg:gap-[78px]">

        <div class="content-center order-2 lg:firulete">
            <div class="pl-4 border-l-[3px] lg:border-l-[0px] border-gold-100 mb-8 ">
                <h2 class="subtitulo eucrosia">Linea Montesano</h3>
            </div>

            <div class="px-5 space-y-9">
                <div class="space-y-5 lg:text-xl">
                    <p>Como en Italia, con el mismo conocimiento y tecnología, con nuestra marca
                        <strong>Montesano</strong>
                        elaboramos
                        productos únicos.
                    </p>
                    <p>Como nuestro <strong>Jamón Crudo Parma</strong> rico en proteínas y con bajo contenido de sal y
                        nuestra
                        <strong>Mortadela Puro
                            Cerdo</strong> con
                        pistacho.
                    </p>
                </div>

                <div class="lg:hidden">
                    <img class="h-[390px] object-cover" src="img/inicio/jamon_montesano.jpg" alt="">
                </div>


                <a class="hidden text-[18px] font-bold lg:flex lg:flex-row text-gold-100 inter"
                    href="{{ route('mnuMontesano') }}">
                    Ver más
                    <svg class="w-4 ml-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </a>
            </div>

            <div class="px-4 mt-12 lg:hidden">
                <a href="{{ route('mnuMontesano') }}"
                    class="block py-[14px] font-semibold text-white transition-colors shadow-md bg-gold-100 hover:bg-gold-200 lg:py-4 text-center">Ver
                    todos</a>
            </div>
        </div>

        <div class="hidden gap-6 lg:flex h-[540px]">
            <img class="w-[50%] object-cover" src="img/inicio/jamon_montesano.jpg" alt="">
            <img class="w-[50%] object-cover" src="img/inicio/jamon_montesano_1.jpg" alt="">
        </div>

    </div>
</div>