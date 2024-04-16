<?php

namespace App\Livewire\Componentes\Paneladmin;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Livewire\Component;

class Productoeliminar extends Component
{
      public $verForm;
      public $idProducto;

      public function VerForm(){
            $this->verForm=true;
      }

      public function CerrarAlertas(){
            $this->verForm=false;
      }
      public function Confirmar(){
            $dtosProd = DB::table('bd_laoctava_vtaproductos')
            ->where('id', $this->idProducto)
            ->first();

            $rutaArchivo = public_path('img/productos/' . $dtosProd->pathImg);
            
            if (File::exists($rutaArchivo)) {
                    File::delete($rutaArchivo);
            }

            DB::table('bd_laoctava_productos')
            ->where('id', $this->idProducto)
            ->delete();

            $this->dispatch('actualiz-lista-productos');

            $this->verForm=false;
      }

      public function render()
      {
            $dtosProd = DB::table('bd_laoctava_vtaproductos')
            ->where('id', $this->idProducto)
            ->first();

            return view('livewire.componentes.paneladmin.productoeliminar', ['dtosProd'=>$dtosProd]);
      }
}
