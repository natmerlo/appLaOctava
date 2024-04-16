<div>
      <div wire:click="VerForm()" title="Eliminar Receta"
            class="p-1 h-[2rem] w-[2rem] hover:scale-125 transition-transform duration-200 hover:cursor-pointer">
            <svg data-slot="icon" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24"
                  xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round"
                        d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0">
                  </path>
            </svg>
      </div>

      <section class="modal_container z-[999]" x-cloak x-show="verForm = $wire.verForm" x-transition.duration.0ms>
            <div
                  class="cursor-auto mx-auto w-[22rem] h-[20rem] bg-white border mt-[10rem] p-6 flex flex-col justify-between">
                  <div class="flex justify-center">
                        <img class="w-[3rem] h-[3rem]" src="{{asset('img/ico_preguntar.svg')}}">
                  </div>
                  <h1 class="text-2xl font-extrabold text-center inter">ELIMINAR RECETA</h1>

                  @if ($dtosReceta && $dtosReceta->nombre)
                  <p class="text-[17px] text-center inter">Está a punto de eliminar la receta <span
                              class="font-extrabold">
                              {{ $dtosReceta->nombre }} </span></p>
                  @endif
                  <p class="text-[17px] text-center inter">¿Desea continuar?</p>
                  <div class="flex justify-center">
                        <button wire:click="CerrarAlertas()" type="button" class="mr-1 btn-uno">Cancelar</button>
                        <button wire:click="Confirmar()" type="button" class="btn-uno">Confirmar</button>
                  </div>
            </div>
      </section>

</div>