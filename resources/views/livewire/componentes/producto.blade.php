<div class="lg:max-w-7xl max-w-4xl mx-auto ">
    <div class="grid items-start grid-cols-1 lg:grid-cols-5 gap-5">

        <div class="lg:col-span-2 lg:order-2 flex flex-col gap-4 lg:gap-8 firulete-producto">
            <h2 class="subtitulo eucrosia">{{ $dtosProd[0]->nombre }}</h2>
            <ul class="font-semibold lg:text-xl">
                <li>{{ $dtosProd[0]->peso }}</li>
                <li>{{ $dtosProd[0]->codigo }}</li>
            </ul>

            <p class="parrafo">{{ $dtosProd[0]->descrip }}</p>
        </div>

        <div class="lg:col-span-3 w-full lg:sticky top-0 text-center lg:order-1">
            <div class="px-4 py-10  relative">
                <img src="{{ asset('img/productos/' . $dtosProd[0]->pathImg) }}" alt="Producto"
                    class="w-4/5 rounded object-cover" />
            </div>
            {{-- <div class="mt-6 flex flex-wrap justify-center gap-6 mx-auto">
                <div class="p-4 ">
                    <img src="https://readymadeui.com/images/laptop2.webp" alt="Product2" class="w-24 cursor-pointer" />
                </div>
                <div class="p-4 ">
                    <img src="https://readymadeui.com/images/laptop3.webp" alt="Product2" class="w-24 cursor-pointer" />
                </div>
                <div class="p-4 ">
                    <img src="https://readymadeui.com/images/laptop4.webp" alt="Product2" class="w-24 cursor-pointer" />
                </div>
                <div class="p-4 ">
                    <img src="https://readymadeui.com/images/laptop5.webp" alt="Product2" class="w-24 cursor-pointer" />
                </div>
            </div> --}}
        </div>
    </div>
</div>
