<div>
      <div wire:click="VerForm()" title="Editar Contenidos" class="p-1 h-[2rem] w-[2rem] hover:scale-125 transition-transform duration-200 hover:cursor-pointer">
            <svg data-slot="icon" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"></path>
            </svg>
      </div>      

      <section class="modal_container z-[999]" x-cloak x-show="verForm = $wire.verForm" x-transition.duration.0ms>
            <div class="panel-modal">
                  
                  <div class="flex justify-end pb-2">
                        <div wire:click="CerrarForm()" class="absolute top-3 right-3 w-8 h-8 flex cursor-pointer items-center justify-center border-[2px] border-black hover:border-red-800 rounded-full">
                              <svg class="font-extrabold w-5 h-5 hover:text-red-800" data-slot="icon" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12"></path>
                              </svg>
                        </div>
                  </div>

                  <div class="flex h-full flex-wrap">
                        <div class="w-[29rem]">
                              <div class="h-[45%] flex flex-col items-center">

                                    @php
                                          $uniqueId = uniqid();
                                    @endphp

                                    @if ($imagenAntig!=null && $imagen == null)
                                          <div class="flex flex-col text-center items-center">
                                                <label for="{{ $uniqueId }}" class="cursor-pointer btn-uno">Imagen de la Receta</label>
                                                <input id="{{ $uniqueId }}" wire:model="imagen" type="file" class="hidden">
                                                <img class="h-[14rem] mt-2" src="{{ asset('img/recetas') . '/' . $this->imagenAntig }}" alt="">
                                          </div>
                                    @else
                                          <div class="flex flex-col text-center items-center">
                                                @if ($errors->has('imagen'))
                                                      <span class="text-red mb-3">{{ $errors->first('imagen') }}</span>
                                                      <label for="{{ $uniqueId }}" class="cursor-pointer btn-uno">Imagen de la Receta</label>
                                                @else
                                                      <label for="{{ $uniqueId }}" class="cursor-pointer btn-uno">Imagen de la Receta</label>
                                                @endif
                                                <input id="{{ $uniqueId }}" wire:model="imagen" type="file" class="hidden">
                                                <img class="h-[14rem] mt-2" src="{{ $imagen?->temporaryUrl() }}" alt="">
                                          </div>
                                    @endif

                                    {{--
                                    @if ($errors->has('imagen'))
                                          <div class="flex flex-col items-center">
                                                <label for="77dd8e25-d16e-4c52-b815-a3535c648267" class="cursor-pointer btn-uno mb-3 w-[10rem]">Imagen del Producto</label>
                                                <input id="77dd8e25-d16e-4c52-b815-a3535c648267" wire:model="imagen" type="file" class="hidden">
                                                @if ($imagen)
                                                      <img class="h-[14rem]" src="{{ $imagen?->temporaryUrl() }}" alt="">
                                                @endif
                                                <span class="text-red mb-3">{{ $errors->first('imagen') }}</span>
                                          </div>
                                    @else
                                          @if ($imagen)
                                                <button wire:click="ModifImagenSubida()" class="btn-uno">
                                                      Modificar Imagen
                                                </button>

                                                <img class="h-[14rem] mt-2 mb-3" src="{{ $imagen?->temporaryUrl() }}" alt="">
                        
                                          @else
                                                <label for="77dd8e25-d16e-4c52-b815-a3535c648267" class="cursor-pointer btn-uno">Imagen del Producto</label>
                                                <input id="77dd8e25-d16e-4c52-b815-a3535c648267" wire:model="imagen" type="file" class="hidden">
                                          @endif                                    
                                    @endif
                                    --}}
                              </div>
                              <div class="mt-3 h-[55%]">                                    
                                    <div class="flex items-center">
                                          @if ($errors->has('txtIngrediente'))
                                                <label for="24b57712-6ca8-446d-9157-252a08e6b8ac" class="text-sm font-medium basis-[8rem] text-red">Ingrediente</label>
                                                <div class="flex flex-col w-full">
                                                      <input wire:model="txtIngrediente" id="24b57712-6ca8-446d-9157-252a08e6b8ac" type="text" class="border border-red text-red text-sm rounded-lg w-full p-2.5"  placeholder="Debe ingresar un ingrediente...">
                                                      <span class="text-sm text-red" >{{ $errors->first('txtIngrediente') }}</span>
                                                </div>
                                          @else
                                                <label for="24b57712-6ca8-446d-9157-252a08e6b8ac" class="text-sm font-medium basis-[8rem]">Ingrediente</label>
                                                <input wire:model="txtIngrediente" id="24b57712-6ca8-446d-9157-252a08e6b8ac"  type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"  placeholder="Ingresar un subtítulo...">
                                          @endif

                                          <button wire:click="GrabarIngrediente()" class="ml-2 mr-[3rem]">
                                                <svg class="w-6 h-6 hover:scale-110" data-slot="icon" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                      <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"></path>
                                                </svg>                                                
                                          </button>
                                    </div>

                                    @if (Session::has('vectorIngredientes'))
                                          <div class="overflow-y-auto h-[13.5rem] p-2 mt-3 rounded-md border-[1px]">
                                                <span class="text-red text-sm font-bold" >{{ Session::get('vectorIngredientes'); }}</span>
                                          </div>
                                    @else
                                          <div class="overflow-y-auto h-[13.5rem] p-2 mt-3 rounded-md border-[1px]">
                                                @foreach ($vecIngredientes as $it)
                                                      <div class="flex w-full">
                                                            <div wire:click="EliminarIngrediente('{{ $it['clave'] }}')" class="w-6 flex justify-center">
                                                                  <svg class="w-5 h-5 mt-[2px] hover:scale-110 hover:cursor-pointer" data-slot="icon" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"></path>
                                                                  </svg>
                                                            </div>
                                                            <div class="w-[45rem]">
                                                                  <span class="mb-3">{{ $it['valor'] }}</span>
                                                            </div>
                                                      </div>
                                                @endforeach
                                          </div>
                                    @endif                                    
                              </div>
                        </div>
                        <div class="p-3 w-[50rem]">
                              <div class="mb-5">
                                    @if ($errors->has('nombre'))
                                          <label for="ed056ea8-58e3-462c-b409-14d70bd5adfa" class="mb-2 text-sm font-medium text-red">{{ $errors->first('nombre') }}</label>
                                          <input wire:model="nombre" id="ed056ea8-58e3-462c-b409-14d70bd5adfa"  type="text" autofocus class="border border-red text-red text-sm rounded-lg w-full p-2.5"  placeholder="Ingresar nombre...">
                                    @else
                                          <label for="ed056ea8-58e3-462c-b409-14d70bd5adfa" class="block mb-2 text-sm font-medium text-gray-900">Nombre de la receta</label>
                                          <input wire:model="nombre" id="ed056ea8-58e3-462c-b409-14d70bd5adfa"  type="text" autofocus class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"  placeholder="Ingresar nombre...">
                                    @endif

                              </div>
                              <div class="flex mb-5">
                                    <div class="flex-grow mr-2">
                                          <label for="25a10e49-f44d-4ea4-8536-759b41ef9286" class="block mb-2 text-sm font-medium text-gray-900">Tiempo de preparación</label>
                                          <input wire:model="tpoPrepar" id="25a10e49-f44d-4ea4-8536-759b41ef9286"  type="text" autofocus class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"  placeholder="Ingresar tiempo de preparación...">
                                    </div>
      
                                    <div class="flex-grow mr-2">
                                          <label for="aace18aa-49d4-47f3-b59d-60998955c90e" class="block mb-2 text-sm font-medium text-gray-900">Tiempo de cocción</label>
                                          <input wire:model="tpoCoccion" id="aace18aa-49d4-47f3-b59d-60998955c90e"  type="text" autofocus class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"  placeholder="Ingresar tiempo de cocción...">
                                    </div>
      
                                    <div class="flex-grow">
                                          <label for="7c091f6f-d51a-4d21-a220-294aae55643f" class="block mb-2 text-sm font-medium text-gray-900">Tiempo total</label>
                                          <input wire:model="tpoFinal" id="7c091f6f-d51a-4d21-a220-294aae55643f"  type="text" autofocus class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"  placeholder="Ingresar tiempo total...">
                                    </div>
                              </div>
                              <div class="mb-5">
                                    <div class="flex items-center mb-2">
                                          @if ($errors->has('txtSubtit'))
                                                <label for="c8337de2-5eb8-4793-8a54-60347d89a3a8" class="text-sm font-medium basis-[8rem] text-red">Subtítulo</label>
                                                <div class="flex flex-col w-full">
                                                      <input wire:model="txtSubtit" id="c8337de2-5eb8-4793-8a54-60347d89a3a8" type="text" class="border border-red text-red text-sm rounded-lg w-full p-2.5"  placeholder="Debe ingresar un subtítulo...">
                                                      <span class="text-sm text-red" >{{ $errors->first('txtSubtit') }}</span>
                                                </div>
                                          @else
                                                <label for="c8337de2-5eb8-4793-8a54-60347d89a3a8" class="text-sm font-medium basis-[8rem]">Subtítulo</label>
                                                <input wire:model="txtSubtit" id="c8337de2-5eb8-4793-8a54-60347d89a3a8"  type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"  placeholder="Ingresar un subtítulo...">
                                          @endif

                                          <button wire:click="GrabarSubTit()" class="ml-2">
                                                <svg class="w-6 h-6 hover:scale-110" data-slot="icon" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                      <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"></path>
                                                </svg>                                                
                                          </button>
                                    </div>
                                    <div class="flex items-center">
                                          @if ($errors->has('txtParrafos'))
                                                <label for="64e870d3-7257-47e0-8103-8a81f93c0654" class="block text-sm font-medium basis-[8rem] text-red">Descripción</label>
                                                <div class="flex flex-col w-full">
                                                      <input wire:model="txtParrafos" id="64e870d3-7257-47e0-8103-8a81f93c0654"  type="text" autofocus class="border border-red text-red text-sm rounded-lg w-full p-2.5"  placeholder="Ingresar descripción...">
                                                      <span class="text-sm text-red" >{{ $errors->first('txtParrafos') }}</span>
                                                </div>                                                
                                          @else
                                                <label for="64e870d3-7257-47e0-8103-8a81f93c0654" class="block text-sm font-medium basis-[8rem]">Descripción</label>
                                                <input wire:model="txtParrafos" id="64e870d3-7257-47e0-8103-8a81f93c0654"  type="text" autofocus class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"  placeholder="Ingresar descripción...">
                                          @endif

                                          <button wire:click="GrabarParrafos()" class="ml-2">
                                                <svg class="w-6 h-6 hover:scale-110" data-slot="icon" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                      <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"></path>
                                                </svg>                                                
                                          </button>
                                    </div>                                    
                              </div>

                              @if (Session::has('vectorDescripVacio'))
                                    <div class="p-2 h-[17rem] rounded-md border-[1px] border-red">
                                          <span class="text-red text-sm font-bold" >{{ Session::get('vectorDescripVacio'); }}</span>
                                    </div>
                              @else
                                    <div class="p-2 h-[17rem] rounded-md border-[1px] overflow-y-auto">
                                          @foreach ($vecDescripRecetas as $it)
                                                <div class="flex w-full">
                                                      <div wire:click="EliminarItem('{{ $it['clave'] }}')" class="w-6 flex justify-center">
                                                            <svg class="w-5 h-5 mt-[2px] hover:scale-110 hover:cursor-pointer" data-slot="icon" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                                  <path stroke-linecap="round" stroke-linejoin="round" d="M15 12H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"></path>
                                                            </svg>
                                                      </div>
                                                      <div class="w-[45rem]">
                                                            <span class="mb-3">{{ $it['valor'] }}</span>                                                      
                                                      </div>
                                                </div>
                                          @endforeach
                                    </div>
                              @endif

                              <div class="flex justify-end mt-2">
                                    <button wire:click="Cancelar()" class="btn-uno mr-2">
                                          Cancelar
                                    </button>
                                    <button wire:click="Grabar()" class="btn-uno">
                                          Grabar
                                    </button>
                              </div>
                        </div>
                  </div>
                  
            </div>
      </section>

</div>
