<?php

namespace App\Livewire\Componentes\Paneladmin;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Livewire\Component;

class Recetaeliminar extends Component
{
      public $verForm;
      public $idReceta;

      public function VerForm(){
            $this->verForm=true;
      }

      public function CerrarAlertas(){
            $this->verForm=false;
      }
      public function Confirmar(){

            $dtosRcta = DB::table('bd_laoctava_recetas')
            ->where('id', $this->idReceta)
            ->first();

            $rutaArchivo = public_path('img/recetas/' . $dtosRcta->pathImg);
            
            if (File::exists($rutaArchivo)) {
                  File::delete($rutaArchivo);
            }

            DB::table('bd_laoctava_recetas')
                  ->where('id', $this->idReceta)
                  ->delete();

            DB::table('bd_laoctava_recetas_descrip')
                  ->where('idReceta', $this->idReceta)
                  ->delete();

            DB::table('bd_laoctava_recetas_ingredientes')
                  ->where('idReceta', $this->idReceta)
                  ->delete();

            $this->dispatch('actualiz-lista-recetas');
            $this->verForm=false;
      }

      public function render()
      {
            $dtosReceta = DB::table('bd_laoctava_recetas')
            ->where('id', $this->idReceta)
            ->first();
            return view('livewire.componentes.paneladmin.recetaeliminar', ['dtosReceta'=>$dtosReceta]);
      }
}
