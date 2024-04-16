<?php

namespace App\Livewire\Componentes\Paneladmin;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Productover extends Component
{
      public $verForm;
      public $idProducto;

      public function VerForm(){
            $this->verForm=true;
      }

      public function CerrarForm(){
            $this->verForm=false;
      }

      public function render()
      {
            $dtosProd = DB::table('bd_laoctava_vtaproductos')
            ->where('id', $this->idProducto)
            ->first();
      
            return view('livewire.componentes.paneladmin.productover', ['dtosProd'=>$dtosProd]);
      }
}
