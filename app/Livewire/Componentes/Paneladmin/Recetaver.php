<?php

namespace App\Livewire\Componentes\Paneladmin;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Recetaver extends Component
{
      public $verForm;
      public $idReceta;
      public $dtosReceta = [];
      public $dtosIngredientes = [];
      public $dtosPrepar = [];

      public function VerForm(){
            $this->verForm=true;
      }

      public function CerrarForm(){
            $this->verForm=false;
      }

      public function mount(){
            $this->dtosReceta = DB::table('bd_laoctava_recetas')
                  ->where('id', $this->idReceta)
                  ->first();

            $this->dtosIngredientes = DB::table('bd_laoctava_recetas_ingredientes')
                  ->where('idReceta', $this->idReceta)
                  ->get();
      
            $this->dtosPrepar = DB::table('bd_laoctava_recetas_descrip')
                  ->where('idReceta', $this->idReceta)
                  ->get();      
      }


      public function render()
      {
            return view('livewire.componentes.paneladmin.recetaver');
      }
}
