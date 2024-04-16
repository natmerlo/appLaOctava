<?php

namespace App\Livewire\Componentes\Slider;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Productos extends Component
{
    public function render()
    {
        $productos = DB::table('bd_laoctava_prodcarrucel')
            ->where('prtDestacado', 1)
            ->join('bd_laoctava_productos', 'bd_laoctava_prodcarrucel.id_producto', '=', 'bd_laoctava_productos.id')
            ->select(
                'bd_laoctava_prodcarrucel.ordenPres',
                'bd_laoctava_productos.id',
                'bd_laoctava_productos.nombre',
                'bd_laoctava_productos.peso',
                'bd_laoctava_productos.tiempoCurado',
                'bd_laoctava_productos.codigo',
                'bd_laoctava_productos.descrip',
                'bd_laoctava_productos.pathImg',
                'bd_laoctava_productos.idLinea',
                'bd_laoctava_productos.idCategoria',
            )
            ->orderBy('bd_laoctava_prodcarrucel.ordenPres')
            ->get();

        return view('livewire.componentes.slider.productos', ['productos' => $productos]);
    }
}
