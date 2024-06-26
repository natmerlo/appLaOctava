<div>
    <header>
        <nav class="px-5 bg-white shadow-md lg:px-16 inter">

            <div class="flex h-16 lg:h-[95px] max-w-6xl mx-auto items-center justify-between">

                <div>
                  <img class="transition w-28 hover:scale-105 " src="{{ asset('img/la_octava.png') }}" alt="Logotipo La Octava">
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
                  <form action="{{ route('CerrarSesion') }}" method="POST">

                        @csrf
                        <button class="block px-3 py-2 font-medium transition-colors border-b-2 border-transparent hover:text-gold-100 hover:border-b-2 hover:border-gold-100" type="submit" class="btn-uno">
                              <span>Cerrar Sesión</span>
                        </button>

                  </form>        
                </div>

            </div>


            <div id="menu-moviles" class="hidden py-3 space-y-1 lg:hidden">
                  <form action="{{ route('CerrarSesion') }}" method="POST">

                        @csrf
                        <button id="btMen_1" class="block px-3 py-2 font-medium transition-colors border-b-2 border-transparent hover:text-gold-100 hover:border-b-2 hover:border-gold-100" type="submit" class="btn-uno">
                              <span>Cerrar Sesión</span>
                        </button>

                  </form>        
            </div>
        </nav>
    </header>
</div>