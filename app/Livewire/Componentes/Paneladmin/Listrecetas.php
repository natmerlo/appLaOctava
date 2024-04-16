<?php

namespace App\Livewire\Componentes\Paneladmin;

use Illuminate\Support\Facades\DB;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class Listrecetas extends Component
{
      use WithPagination;

      #[On('actualiz-lista-recetas')]
      public function render()
      {
            $listRecetas = DB::table('bd_laoctava_recetas')->paginate(20);

            return view('livewire.componentes.paneladmin.listrecetas', ['listRecetas' => $listRecetas]);
      }
}
