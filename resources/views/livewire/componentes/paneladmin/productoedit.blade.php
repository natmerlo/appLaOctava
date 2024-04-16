<div>
      <div wire:click="VerForm()" title="Editar Contenidos" class="p-1 h-[2rem] w-[2rem] hover:scale-125 transition-transform duration-200 hover:cursor-pointer">
            <svg data-slot="icon" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"></path>
            </svg>
      </div>      

      <section class="modal_container z-[999]" x-cloak x-show="verForm = $wire.verForm" x-transition.duration.0ms>
            <div class="panel-modal-2">
                  <div class="flex justify-end pb-2">
                        <div wire:click="CerrarForm()" class="absolute top-3 right-3 w-8 h-8 flex cursor-pointer hover:scale-105 items-center justify-center border-[2px] border-black hover:border-red-800 rounded-full">
                              <svg class="font-extrabold w-5 h-5 hover:text-red-800" data-slot="icon" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12"></path>
                              </svg>
                        </div>
                  </div>

                  <div class="flex flex-col sm:flex-row h-full">
                        <div class="flex justify-center h-full sm:w-[50%]">
                              @php
                                    $uniqueId = uniqid();
                              @endphp

                              @if ($imagenAntig!=null && $imagen == null)
                                    <div class="flex flex-col text-center items-center">
                                          <label for="{{ $uniqueId }}" class="cursor-pointer btn-uno">Imagen del Producto</label>
                                          <input id="{{ $uniqueId }}" wire:model="imagen" type="file" class="hidden">
                                          <img class="h-[25rem] mt-2" src="{{ asset('img/productos') . '/' . $this->imagenAntig }}" alt="">
                                    </div>
                              @else
                                    <div class="flex flex-col text-center items-center">
                                          @if ($errors->has('imagen'))
                                                <span class="text-red mb-3">{{ $errors->first('imagen') }}</span>
                                                <label for="{{ $uniqueId }}" class="cursor-pointer btn-uno">Imagen del Producto</label>
                                          @else
                                                <label for="{{ $uniqueId }}" class="cursor-pointer btn-uno">Imagen del Producto</label>
                                          @endif
                                          <input id="{{ $uniqueId }}" wire:model="imagen" type="file" class="hidden">
                                          <img class="h-[25rem] mt-2" src="{{ $imagen?->temporaryUrl() }}" alt="">
                                    </div>
                              @endif
                        </div>
                        <div class="h-full sm:w-[50%] pb-4">
                              <div class="mb-[1rem] mt-2">
                                    @if ($errors->has('nombre'))
                                        <label for="ed056ea8-58e3-462c-b409-14d70bd5adfa" class="flex items-start mb-2 text-sm font-medium text-red">{{ $errors->first('nombre') }}</label>
                                        <input value="{{ old('nombre') }}" type="text"  wire:model="nombre" id="ed056ea8-58e3-462c-b409-14d70bd5adfa" class="border border-red text-red placeholder-red text-sm rounded-lg block w-full p-2.5" placeholder="Ingresar nombre...">
                                    @else
                                        <label for="ed056ea8-58e3-462c-b409-14d70bd5adfa" class="flex items-start mb-2 text-sm font-medium text-gray-900">Nombre del producto</label>
                                        <input wire:model="nombre" id="ed056ea8-58e3-462c-b409-14d70bd5adfa"  type="text" autofocus class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"  placeholder="Ingresar nombre...">
                                    @endif
                              </div>                              
                              <div class="mb-[2.5rem] h-[17rem]">
                                    @if ($errors->has('descrip'))
                                          <label for="bca87a66-b93a-4900-9896-28aafbb26f87" class="flex items-start mb-2 text-sm font-medium text-red">{{ $errors->first('descrip') }}</label>
                                          <textarea id="bca87a66-b93a-4900-9896-28aafbb26f87" wire:model="descrip" class="block p-2.5 w-full h-full text-sm rounded-lg border border-red text-red">{{ old('descrip') }}</textarea>
                                    @else
                                          <label for="bca87a66-b93a-4900-9896-28aafbb26f87" class="flex items-start mb-2 text-sm font-medium text-gray-900">Descripción</label>
                                          <textarea id="bca87a66-b93a-4900-9896-28aafbb26f87" wire:model="descrip" class="block p-2.5 w-full h-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"></textarea>
                                    @endif
                              </div>
                              <div class="flex mb-[1rem] space-x-2">
                                    <div class="flex-grow">
                                          @if ($errors->has('idLinea'))
                                                <label for="d10303f1-4a06-427f-a54b-51a4d294eb1c" class="flex items-start mb-2 text-sm font-medium text-red">{{ $errors->first('idLinea') }}</label>
                                                <select wire:model="idLinea" id="d10303f1-4a06-427f-a54b-51a4d294eb1c" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                                      <option value="">Seleccionar Opción...</option>                                                      
                                                      @foreach ($listLinea as $linea)
                                                            <option value="{{$linea->idLinea}}">{{$linea->nombre}}</option>
                                                      @endforeach
                                                </select>
                                          @else
                                                <label for="d10303f1-4a06-427f-a54b-51a4d294eb1c" class="flex items-start mb-2 text-sm font-medium text-gray-900">Línea</label>
                                                <select wire:model="idLinea" id="d10303f1-4a06-427f-a54b-51a4d294eb1c" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                                      <option value="">Seleccionar Opción...</option>                                                      
                                                      @foreach ($listLinea as $linea)
                                                            <option value="{{$linea->idLinea}}">{{$linea->nombre}}</option>
                                                      @endforeach
                                                </select>
                                          @endif                                          

                                    </div>
                                    <div class="flex-grow">
                                          @if ($errors->has('idCategoria'))
                                                <label for="0bf51c01-4c07-4027-a824-9dc03d152191" class="flex items-start mb-2 text-sm font-medium text-red">{{ $errors->first('idCategoria') }}</label>
                                                <select wire:model="idCategoria" id="0bf51c01-4c07-4027-a824-9dc03d152191" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                                      <option value="">Seleccionar Opción...</option>
                                                      @foreach ($listCategoria as $categoria)
                                                            <option value="{{$categoria->idCat}}">{{$categoria->nombre}}</option>
                                                      @endforeach
                                                </select>
                                          @else
                                                <label for="0bf51c01-4c07-4027-a824-9dc03d152191" class="flex items-start mb-2 text-sm font-medium text-gray-900">Categoría</label>
                                                <select wire:model="idCategoria" id="0bf51c01-4c07-4027-a824-9dc03d152191" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                                      <option value="">Seleccionar Opción...</option>
                                                      @foreach ($listCategoria as $categoria)
                                                            <option value="{{$categoria->idCat}}">{{$categoria->nombre}}</option>
                                                      @endforeach
                                                </select>
                                          @endif

                                    </div>
                                    <div class="flex-grow">
                                          <label for="3d66a047-cfe2-4fb0-90f3-46e96f83f132" class="flex items-start mb-2 text-sm font-medium text-gray-900">Código</label>
                                          <input wire:model="codigo" id="3d66a047-cfe2-4fb0-90f3-46e96f83f132" type="text" autofocus class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"  placeholder="Ingresar código...">

                                    </div>
                              </div>

                              <div class="flex mb-[1rem] space-x-2">
                                    <div class="flex-grow">
                                          <label for="1d145eed-6574-48b4-83e4-b5b89758a1c2" class="flex items-start mb-2 text-sm font-medium text-gray-900">Peso</label>
                                          <input wire:model="peso" id="1d145eed-6574-48b4-83e4-b5b89758a1c2" type="text" autofocus class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"  placeholder="Ingresar peso...">
                                    </div>
                                    <div class="flex-grow">
                                          <label for="c308795b-3005-4e67-a801-1187c434081d" class="flex items-start mb-2 text-sm font-medium text-gray-900">Tiempo de curado</label>
                                          <input wire:model="tiempoCurado" id="c308795b-3005-4e67-a801-1187c434081d" type="text" autofocus class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Ingresar tiempo de curado...">
                                    </div>
                              </div>

                              <div class="flex justify-end">
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
