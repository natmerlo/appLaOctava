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
            <div class="justify-start md:justify-center panel-modal-1">

                  <div class="flex flex-col items-center justify-center gap-5 md:flex-row md:grid-cols-2">
                        <div class="p-4 space-y-4 bg-gold-100 min-w-[300px]">
                              <div>
                                    <img class="h-[200px] w-full object-cover"
                                          src="{{ asset('img/recetas/' . $dtosReceta->pathImg) }}" alt="Receta">
                              </div>
                              <div>
                                    <div style="overflow-y: auto; max-height: 200px;">
                                          <ul class="order-3 text-left text-white list-disc list-inside">
                                                @foreach ($dtosIngredientes as $ingrediente)
                                                <li>{{ $ingrediente->descIngrediente }}</li>
                                                @endforeach
                                          </ul>
                                    </div>
                              </div>
                        </div>

                        <div class="flex flex-col gap-4 px-4 md:pr-8">
                              <h2 class="text-white subtitulo eucrosia">{{ $dtosReceta->nombre }}</h2>

                              <ul class="text-gold-100 lg:text-[18px]">

                                    <li class="flex gap-3 ">
                                          <svg xmlns="http://www.w3.org/2000/svg" fill="#C59A6F" width="22" height="22"
                                                viewBox="0 0 24 24">
                                                <path
                                                      d="M12 2c5.514 0 10 4.486 10 10s-4.486 10-10 10-10-4.486-10-10 4.486-10 10-10zm0-2c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm1 12v-6h-2v8h7v-2h-5z" />
                                          </svg><strong>Preparación:</strong> {{ $dtosReceta->tiempoPreparacion }}

                                    </li>

                                    <li class="flex gap-3"><svg xmlns="http://www.w3.org/2000/svg" fill="#C59A6F"
                                                width="22" height="22" viewBox="0 0 24 24">
                                                <path
                                                      d="M18.513 7.119c.958-1.143 1.487-2.577 1.487-4.036v-3.083h-16v3.083c0 1.459.528 2.892 1.487 4.035l3.086 3.68c.567.677.571 1.625.009 2.306l-3.13 3.794c-.936 1.136-1.452 2.555-1.452 3.995v3.107h16v-3.107c0-1.44-.517-2.858-1.453-3.994l-3.13-3.794c-.562-.681-.558-1.629.009-2.306l3.087-3.68zm-4.639 7.257l3.13 3.794c.652.792.996 1.726.996 2.83h-1.061c-.793-2.017-4.939-5-4.939-5s-4.147 2.983-4.94 5h-1.06c0-1.104.343-2.039.996-2.829l3.129-3.793c1.167-1.414 1.159-3.459-.019-4.864l-3.086-3.681c-.66-.785-1.02-1.736-1.02-2.834h12c0 1.101-.363 2.05-1.02 2.834l-3.087 3.68c-1.177 1.405-1.185 3.451-.019 4.863z" />
                                          </svg><strong>Tiempo de cocción:</strong> {{ $dtosReceta->tiempoCoccion }}

                                    </li>

                                    <li class="flex gap-3"><svg fill="#C59A6F" width="22" height="22"
                                                xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd"
                                                clip-rule="evenodd">
                                                <path
                                                      d="M18.496 24h-.001c-.715 0-1.5-.569-1.5-1.5v-8.5s-1.172-.003-2.467 0c.802-6.996 3.103-14 4.66-14 .447 0 .804.357.807.851.01 1.395.003 16.612.001 21.649 0 .828-.672 1.5-1.5 1.5zm-11.505-12.449c0-.691-.433-.917-1.377-1.673-.697-.56-1.177-1.433-1.088-2.322.252-2.537.862-7.575.862-7.575h.6v6h1.003l.223-6h.607l.173 6h1.003l.242-6h.562l.199 6h1.003v-6h.549s.674 5.005.951 7.55c.098.902-.409 1.792-1.122 2.356-.949.751-1.381.967-1.381 1.669v10.925c0 .828-.673 1.5-1.505 1.5-.831 0-1.504-.672-1.504-1.5v-10.93z" />
                                          </svg><strong>Listo en:</strong> {{ $dtosReceta->tiempoTotal }}
                                    </li>
                              </ul>

                              <div style="overflow-y: auto; max-height: 18rem;">
                                    @foreach ($dtosPrepar as $it)
                                    @if ($it->tagHtml == 't')
                                    <h2 class="mt-3 mb-3 text-left text-white">{{ $it->parrafo }}</h2>
                                    @endif
                                    @if ($it->tagHtml == 'p')
                                    <p class="mb-3 text-left text-white">{{ $it->parrafo }}</p>
                                    @endif
                                    @endforeach
                              </div>
                        </div>
                  </div>

                  {{-- <div class="h-full gr01">

                        <div class="flex items-center justify-center gr01-C1 bg-gold-100">
                              <img class="h-[200px] w-[250px] object-cover"
                                    src="{{ asset('img/recetas/' . $dtosReceta->pathImg) }}" alt="Receta">
                        </div>
                        <div class="flex justify-center gr01-C2 bg-gold-100">
                              <div style="overflow-y: auto; max-height: 200px;">
                                    <ul class="order-3 text-left text-white list-disc list-inside">
                                          @foreach ($dtosIngredientes as $ingrediente)
                                          <li>{{ $ingrediente->descIngrediente }}</li>
                                          @endforeach
                                    </ul>
                              </div>
                        </div>
                        <div class="gr01-C3">
                              <h2 class="text-white subtitulo eucrosia">{{ $dtosReceta->nombre }}</h2>
                        </div>
                        <div class="pt-4 gr01-C4">
                              <ul class="text-gold-100 lg:text-[18px]">

                                    <li class="flex gap-3 ">
                                          <svg xmlns="http://www.w3.org/2000/svg" fill="#C59A6F" width="22" height="22"
                                                viewBox="0 0 24 24">
                                                <path
                                                      d="M12 2c5.514 0 10 4.486 10 10s-4.486 10-10 10-10-4.486-10-10 4.486-10 10-10zm0-2c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm1 12v-6h-2v8h7v-2h-5z" />
                                          </svg><strong>Preparación:</strong> {{ $dtosReceta->tiempoPreparacion }}

                                    </li>

                                    <li class="flex gap-3"><svg xmlns="http://www.w3.org/2000/svg" fill="#C59A6F"
                                                width="22" height="22" viewBox="0 0 24 24">
                                                <path
                                                      d="M18.513 7.119c.958-1.143 1.487-2.577 1.487-4.036v-3.083h-16v3.083c0 1.459.528 2.892 1.487 4.035l3.086 3.68c.567.677.571 1.625.009 2.306l-3.13 3.794c-.936 1.136-1.452 2.555-1.452 3.995v3.107h16v-3.107c0-1.44-.517-2.858-1.453-3.994l-3.13-3.794c-.562-.681-.558-1.629.009-2.306l3.087-3.68zm-4.639 7.257l3.13 3.794c.652.792.996 1.726.996 2.83h-1.061c-.793-2.017-4.939-5-4.939-5s-4.147 2.983-4.94 5h-1.06c0-1.104.343-2.039.996-2.829l3.129-3.793c1.167-1.414 1.159-3.459-.019-4.864l-3.086-3.681c-.66-.785-1.02-1.736-1.02-2.834h12c0 1.101-.363 2.05-1.02 2.834l-3.087 3.68c-1.177 1.405-1.185 3.451-.019 4.863z" />
                                          </svg><strong>Tiempo de cocción:</strong> {{ $dtosReceta->tiempoCoccion }}

                                    </li>

                                    <li class="flex gap-3"><svg fill="#C59A6F" width="22" height="22"
                                                xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd"
                                                clip-rule="evenodd">
                                                <path
                                                      d="M18.496 24h-.001c-.715 0-1.5-.569-1.5-1.5v-8.5s-1.172-.003-2.467 0c.802-6.996 3.103-14 4.66-14 .447 0 .804.357.807.851.01 1.395.003 16.612.001 21.649 0 .828-.672 1.5-1.5 1.5zm-11.505-12.449c0-.691-.433-.917-1.377-1.673-.697-.56-1.177-1.433-1.088-2.322.252-2.537.862-7.575.862-7.575h.6v6h1.003l.223-6h.607l.173 6h1.003l.242-6h.562l.199 6h1.003v-6h.549s.674 5.005.951 7.55c.098.902-.409 1.792-1.122 2.356-.949.751-1.381.967-1.381 1.669v10.925c0 .828-.673 1.5-1.505 1.5-.831 0-1.504-.672-1.504-1.5v-10.93z" />
                                          </svg><strong>Listo en:</strong> {{ $dtosReceta->tiempoTotal }}
                                    </li>
                              </ul>

                        </div>

                        <div class="gr01-C5">
                              <div style="overflow-y: auto; max-height: 18rem;">
                                    @foreach ($dtosPrepar as $it)
                                    @if ($it->tagHtml == 't')
                                    <h2 class="mt-3 mb-3 text-left text-white">{{ $it->parrafo }}</h2>
                                    @endif
                                    @if ($it->tagHtml == 'p')
                                    <p class="mb-3 text-left text-white">{{ $it->parrafo }}</p>
                                    @endif
                                    @endforeach
                              </div>
                        </div>
                  </div> --}}

                  <div class="flex justify-end pb-2">
                        <div wire:click="CerrarForm()"
                              class="absolute top-3 right-3 w-8 h-8 hover:scale-105 flex cursor-pointer items-center justify-center border-[2px] border-white rounded-full">
                              <svg class="w-5 h-5 font-extrabold text-white" data-slot="icon" fill="none"
                                    stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12">
                                    </path>
                              </svg>
                        </div>
                  </div>
            </div>
      </section>

</div>