<div>

      <div class="container mx-auto">
            <div class="flex justify-between items-center">
                  <span class="text-[2.5rem] font-extrabold">RECETAS</span>
                  @livewire('componentes.paneladmin.recetanueva')
            </div>
            <table class="table-fixed">
                  <thead>
                        <tr>
                              <th class="text-left bg-blue-200 text-white w-[40%] text-sm">Nombre</th>
                              <th class="text-left bg-blue-200 text-white w-[20%] text-sm">Tiempo de preparación</th>
                              <th class="text-left bg-blue-200 text-white w-[20%] text-sm">Tiempo de cocción</th>
                              <th class="text-left bg-blue-200 text-white w-[20%] text-sm">Tiempo total</th>
                              <th class="bg-blue-200 text-white">Acciones</th>
                        </tr>
                  </thead>
                  <tbody>
                        @foreach ($listRecetas as $receta)
                              <tr class="hover:bg-gold-100 hover:cursor-pointer">
                                    <td class="py-2 border-b-[1px] text-left text-xs">{{ $receta->nombre }}</td>
                                    <td class="py-2 border-b-[1px] text-left text-xs">{{ $receta->tiempoPreparacion }}</td>
                                    <td class="py-2 border-b-[1px] text-left text-xs">{{ $receta->tiempoCoccion }}</td>
                                    <td class="py-2 border-b-[1px] text-left text-xs">{{ $receta->tiempoTotal }}</td>
                                    <td class="py-2 border-b-[1px]">
                                          <div class="flex justify-center items-center">
                                                @livewire('componentes.paneladmin.recetaver', ['idReceta'=>$receta->id], key('01_'.uniqid()))
                                                @livewire('componentes.paneladmin.recetaedit', ['idReceta'=>$receta->id], key('02_'.uniqid()))
                                                @livewire('componentes.paneladmin.recetaeliminar', ['idReceta'=>$receta->id], key('03_'.uniqid()))
                                          </div>
                                    </td>
                              </tr>
                        @endforeach
                  </tbody>
            </table>
            <div class="mt-3 mb-[3rem]">
                  {{$listRecetas->links()}}
            </div>

      </div>

</div>
