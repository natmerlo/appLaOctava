<div>
      <div wire:click="VerForm()" title="Revisión de datos"
            class="p-1 h-[2rem] w-[2rem] hover:scale-125 transition-transform duration-200 hover:cursor-pointer">
            <svg data-slot="icon" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24"
                  xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round"
                        d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z">
                  </path>
                  <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"></path>
            </svg>
      </div>

      <section class="modal_container z-[999]" x-cloak x-show="verForm = $wire.verForm" x-transition.duration.0ms>
            <div class="justify-center panel-modal">
                  <div class="flex justify-end">
                        <div wire:click="CerrarForm()"
                              class="absolute hover:scale-105 top-3 right-3 w-8 h-8 flex cursor-pointer items-center justify-center border-[2px] border-black hover:border-red-800 rounded-full">
                              <svg class="w-5 h-5 font-extrabold hover:text-red-800" data-slot="icon" fill="none"
                                    stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12">
                                    </path>
                              </svg>
                        </div>
                  </div>

                  @if ($dtosProd->idLinea == 1)
                  <div class="grid gap-4 lg:grid-cols-2 justify-items-center">
                        <div class="w-full">
                              <img src="{{ asset('img/productos/' . $dtosProd->pathImg) }}" alt="Producto"
                                    class="object-cover w-full h-full" />
                        </div>

                        <div class="flex flex-col text-blue-100 text-start">
                              <div class="space-y-8 lg:py-12 lg:firulete-producto">
                                    <h2 class="pr-8 text-5xl subtitulo eucrosia">{{ $dtosProd->nombre }}</h2>
                                    <ul class="font-[500] lg:text-xl">
                                          @if ($dtosProd->linea)
                                          <li>Linea: {{ $dtosProd->linea }}</li>
                                          @endif

                                          @if ($dtosProd->categoria)
                                          <li>Categoría: {{ $dtosProd->categoria }}</li>
                                          @endif

                                          @if ($dtosProd->peso)
                                          <li>Peso: {{ $dtosProd->peso }}</li>
                                          @endif

                                          @if ($dtosProd->codigo)
                                          <li>Código: {{ $dtosProd->codigo }}</li>
                                          @endif

                                          @if ($dtosProd->tiempoCurado)
                                          <li>Tiempo de curado: {{ $dtosProd->tiempoCurado }}</li>
                                          @endif
                                    </ul>
                                    <p>{{ $dtosProd->descrip }}</p>
                              </div>
                        </div>
                  </div>
                  @else
                  <div class="grid gap-4 lg:grid-cols-2 justify-items-center">

                        <div class="w-full">
                              <img src="{{ asset('img/productos/' . $dtosProd->pathImg) }}" alt="Producto"
                                    class="object-cover w-full h-full" />
                        </div>

                        <div class="flex flex-col text-green text-start">
                              <div class="pr-5 space-y-5 lg:py-12 lg:firulete-producto-mont">
                                    <h2 class="text-5xl subtitulo eucrosia ">{{ $dtosProd->nombre }}</h2>
                                    <ul class="font-[500] lg:text-xl">
                                          @if ($dtosProd->linea)
                                          <li>Linea: {{ $dtosProd->linea }}</li>
                                          @endif

                                          @if ($dtosProd->categoria)
                                          <li>Categoría: {{ $dtosProd->categoria }}</li>
                                          @endif

                                          @if ($dtosProd->peso)
                                          <li>Peso: {{ $dtosProd->peso }}</li>
                                          @endif

                                          @if ($dtosProd->codigo)
                                          <li>Código: {{ $dtosProd->codigo }}</li>
                                          @endif

                                          @if ($dtosProd->tiempoCurado)
                                          <li>Tiempo de curado: {{ $dtosProd->tiempoCurado }}</li>
                                          @endif
                                    </ul>

                                    <div class="lg:firulete-descripcion-mont lg:py-14">
                                          <p>{{ $dtosProd->descrip }}</p>
                                    </div>
                              </div>
                        </div>
                  </div>
                  @endif
            </div>
      </section>

</div>