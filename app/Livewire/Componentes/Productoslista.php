<?php

namespace App\Livewire\Componentes;

use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Illuminate\Support\Facades\Session;

class Productoslista extends Component
{
    public $varLinea;
    public $filtCategoria;
    public $tbCategorias = [];

    public function mount(){
        $this->tbCategorias = DB::table('bd_laoctava_categoria')
            ->select(
                'bd_laoctava_categoria.idCat',
                'bd_laoctava_categoria.nombre',
            )
            ->get();

    }

    public function render()
    {
      session(['categActual' => $this->filtCategoria]);

      if ($this->filtCategoria == 0 || $this->filtCategoria == null)
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
      } else {
        $productos = DB::table('bd_laoctava_productos')
            ->where('idLinea', $this->varLinea)
            ->where('idCategoria', $this->filtCategoria)
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
      }


        return view('livewire.componentes.productoslista', 
        [
            'productos' => $productos,
            'tbCategorias'=>$this->tbCategorias,
      ]);
    }
}
