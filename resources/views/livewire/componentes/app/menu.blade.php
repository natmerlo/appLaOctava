<div>
    <header>
        <nav class="px-5 bg-white shadow-md lg:px-16 inter">

            <div class="flex h-16 lg:h-[95px] max-w-6xl mx-auto items-center justify-between">

                <div>
                    <a href="{{ route('mnuInicio') }}">
                        <img class="transition w-28 hover:scale-105 " src="{{ asset('img/la_octava.png') }}" alt="Logotipo La Octava">
                    </a>
                </div>

                
                <button class="lg:hidden" id="btMenuMovil">
                    <svg id="abrir-menu" class="w-8 h-8 text-blue" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path clip-rule="evenodd" fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z">
                        </path>
                    </svg>
                    <svg id="cerrar-menu" class="hidden w-8 h-8 text-blue" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path clip-rule="evenodd" fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z">
                        </path>
                    </svg>
                </button>

                


                <div class="hidden ml-8 space-x-8 lg:flex">
                    <a class="block px-3 py-2 font-medium transition-colors border-b-2 border-transparent hover:text-gold-100 hover:border-b-2 hover:border-gold-100"
                        href="{{ route('mnuInicio') }}">Inicio</a>
                    <a class="block px-3 py-2 font-medium transition-colors border-b-2 border-transparent hover:text-gold-100 hover:border-b-2 hover:border-gold-100"
                        href="{{ route('mnuProductos') }}">Productos</a>
                    <a class="block px-3 py-2 font-medium transition-colors border-b-2 border-transparent hover:text-gold-100 hover:border-b-2 hover:border-gold-100"
                        href="{{ route('mnuMontesano') }}">Montesano</a>
                    <a class="block px-3 py-2 font-medium transition-colors border-b-2 border-transparent hover:text-gold-100 hover:border-b-2 hover:border-gold-100"
                        href="{{ route('mnuRecetas') }}">Recetas</a>
                    <a class="block px-3 py-2 font-medium transition-colors border-b-2 border-transparent hover:text-gold-100 hover:border-b-2 hover:border-gold-100"
                        href="{{ route('mnuHistoria') }}">Historia</a>
                    <a class="block px-5 py-2 font-semibold text-white transition-colors rounded shadow-md bg-gold-100 hover:bg-gold-200"
                        href="{{ route('mnuContacto') }}">Contacto</a>
                </div>

            </div>


            <div id="menu-moviles" class="hidden py-3 space-y-1 lg:hidden">
                <a id="btMen_1" class="block px-3 py-2 font-medium transition-colors rounded-md hover:text-gold-100"
                    href="{{ route('mnuInicio') }}">Inicio</a>
                <a id="btMen_2" class="block px-3 py-2 font-medium transition-colors rounded-md hover:text-gold-100"
                    href="{{ route('mnuProductos') }}">Productos</a>
                <a id="btMen_3" class="block px-3 py-2 font-medium transition-colors rounded-md hover:text-gold-100"
                    href="{{ route('mnuMontesano') }}">Montesano</a>
                <a id="btMen_4" class="block px-3 py-2 font-medium transition-colors rounded-md hover:text-gold-100"
                    href="{{ route('mnuRecetas') }}">Recetas</a>
                <a id="btMen_4" class="block px-3 py-2 font-medium transition-colors rounded-md hover:text-gold-100"
                    href="{{ route('mnuHistoria') }}">Historia</a>
                <a id="btMen_5" class="block px-3 py-2 font-medium transition-colors rounded-md hover:text-gold-100"
                    href="{{ route('mnuContacto') }}">Contacto</a>
            </div>
        </nav>
    </header>
</div>