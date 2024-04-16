<?php

namespace App\Livewire\Componentes;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class Producto extends Component
{
    public $id;

    public function render()
    {
        $dtosProd = DB::table('bd_laoctava_productos')
            ->where('id', $this->id)
            ->select(
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
        
        return view('livewire.componentes.producto', ['dtosProd'=>$dtosProd]);
    }
}
