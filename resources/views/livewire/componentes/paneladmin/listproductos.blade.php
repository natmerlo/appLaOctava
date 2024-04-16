<div>
      
      <div class="container mx-auto">
            <div class="flex justify-between items-center">
                  <span class="text-[2.5rem] font-extrabold">PRODUCTOS</span>
                  @livewire('componentes.paneladmin.productonuevo')
            </div>

            <div class="flex flex-wrap">
                  <div class="hidden sm:block w-full py-3 pl-2 text-left sm:w-[8%] sm:text-left bg-blue-200 text-white text-sm font-bold">Línea</div>
                  <div class="hidden sm:block w-full py-3 text-left sm:w-[8%] sm:text-center bg-blue-200 text-white text-sm font-bold">Código</div>
                  <div class="hidden sm:block w-full py-3 text-left sm:w-[8%] sm:text-left bg-blue-200 text-white text-sm font-bold">Categoría</div>
                  <div class="hidden sm:block w-full py-3 text-left sm:w-[20%] sm:text-left bg-blue-200 text-white text-sm font-bold">Nombre</div>
                  <div class="hidden sm:block w-full py-3 text-left sm:w-[30%] sm:text-left bg-blue-200 text-white text-sm font-bold">Descripción</div>
                  <div class="hidden sm:block w-full py-3 text-left sm:w-[8%] sm:text-center bg-blue-200 text-white text-sm font-bold">Peso</div>
                  <div class="hidden sm:block w-full py-3 text-left sm:w-[8%] sm:text-center bg-blue-200 text-white text-sm font-bold">Tpo. Curado</div>
                  <div class="hidden sm:block w-full py-3 text-left sm:w-[10%] sm:text-center bg-blue-200 text-white text-sm font-bold">Acciones</div>
            </div>
            @foreach ($listProductos as $producto)
                  <div class="flex flex-wrap border-b-[1px] hover:bg-gold-100 hover:cursor-pointer">
                        <div class="w-full flex mx-1 sm:mx-0 items-center text-left sm:w-[8%] sm:text-left text-sm">{{ $producto->linea }}</div>
                        <div class="w-full flex mx-1 sm:mx-0 items-center justify-start sm:justify-center sm:w-[8%] sm:text-center  text-sm">{{ $producto->codigo }}</div>
                        <div class="w-full flex mx-1 sm:mx-0 items-center text-left sm:w-[8%] sm:text-left  text-sm">{{ $producto->categoria }}</div>
                        <div class="w-full flex mx-1 sm:mx-0 items-center text-left sm:w-[20%] sm:text-left  text-sm">{{ $producto->nombre }}</div>
                        <div class="w-full flex mx-1 sm:mx-0 items-center text-left sm:w-[30%] sm:text-left  text-sm">{{ $producto->descrip }}</div>
                        <div class="w-full flex mx-1 sm:mx-0 items-center justify-start sm:justify-center sm:w-[8%] sm:text-center  text-sm">{{ $producto->peso }}</div>
                        <div class="w-full flex mx-1 sm:mx-0 items-center justify-start sm:justify-center sm:w-[8%] sm:text-center  text-sm">{{ $producto->tiempoCurado }}</div>
                        <div class="w-full flex items-center justify-center sm:w-[10%] sm:text-center text-sm">
                              <div class="flex justify-center">
                                    @livewire('componentes.paneladmin.productover', ['idProducto'=>$producto->id], key('01_'.uniqid()))
                                    @livewire('componentes.paneladmin.productoedit', ['idProducto'=>$producto->id], key('02_'.uniqid()))
                                    @livewire('componentes.paneladmin.productoeliminar', ['idProducto'=>$producto->id], key('03_'.uniqid()))
                              </div>
                        </div>
                  </div>
            @endforeach

            <div class="mt-3">
                  {{$listProductos->links()}}
            </div>
      </div>

</div>
