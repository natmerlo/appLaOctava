<?php

namespace App\Livewire\Componentes\Paneladmin;

use Illuminate\Support\Facades\DB;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class Listproductos extends Component
{
      use WithPagination;

      #[On('actualiz-lista-productos')]
      public function render()
      {
            $listProductos = DB::table('bd_laoctava_vtaproductos')
            ->orderBy('idLinea')
            ->orderBy('idCategoria')
            ->paginate(20);

            return view('livewire.componentes.paneladmin.listproductos', ['listProductos'=>$listProductos]);
      }
}
