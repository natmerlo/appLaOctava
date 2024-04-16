<?php

namespace App\Livewire\Componentes;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Productosmontesano extends Component
{
    public $varLinea;

    public function render()
    {
        $productos = DB::table('bd_laoctava_productos')
            ->where('idLinea', $this->varLinea)
            ->select(
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
            ->get();
        return view('livewire.componentes.productosmontesano', ['productos' => $productos]);
    }
}
