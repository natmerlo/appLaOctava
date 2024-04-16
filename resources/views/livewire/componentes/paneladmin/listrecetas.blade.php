<div>

      <div class="container mx-auto">
            <div class="flex items-center justify-between">
                  <span class="text-[2.5rem] font-extrabold eucrosia">Recetas</span>
                  @livewire('componentes.paneladmin.recetanueva')
            </div>
            <table class="table-fixed">
                  <thead>
                        <tr>
                              <th class="text-left bg-blue-100 text-white w-[40%] text-sm py-3 pl-2">Nombre</th>
                              <th class="text-left bg-blue-100 text-white w-[20%] text-sm">Tiempo de preparación</th>
                              <th class="text-left bg-blue-100 text-white w-[20%] text-sm">Tiempo de cocción</th>
                              <th class="text-left bg-blue-100 text-white w-[20%] text-sm">Tiempo total</th>
                              <th class="text-white bg-blue-100">Acciones</th>
                        </tr>
                  </thead>
                  <tbody>
                        @foreach ($listRecetas as $receta)
                        <tr class="hover:bg-gold-100 hover:cursor-pointer">
                              <td class="py-2 border-b-[1px] text-left text-sm">{{ $receta->nombre }}</td>
                              <td class="py-2 border-b-[1px] text-left text-sm">{{ $receta->tiempoPreparacion }}</td>
                              <td class="py-2 border-b-[1px] text-left text-sm">{{ $receta->tiempoCoccion }}</td>
                              <td class="py-2 border-b-[1px] text-left text-sm">{{ $receta->tiempoTotal }}</td>
                              <td class="py-2 border-b-[1px]">
                                    <div class="flex items-center justify-center">
                                          @livewire('componentes.paneladmin.recetaver', ['idReceta'=>$receta->id],
                                          key('01_'.uniqid()))
                                          @livewire('componentes.paneladmin.recetaedit', ['idReceta'=>$receta->id],
                                          key('02_'.uniqid()))
                                          @livewire('componentes.paneladmin.recetaeliminar', ['idReceta'=>$receta->id],
                                          key('03_'.uniqid()))
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