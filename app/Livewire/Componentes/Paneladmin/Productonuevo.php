<?php

namespace App\Livewire\Componentes\Paneladmin;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Livewire\WithFileUploads;

class Productonuevo extends Component
{
      use WithFileUploads;

      public $verForm;
      public $imagen;
      public $nombre;
      public $descrip;
      public $idLinea;
      public $idCategoria;
      public $listLinea = [];
      public $listCategoria = [];
      public $codigo;
      public $peso;
      public $tiempoCurado;

      public function ModifImagenSubida(){
            $this->reset(
                [
                    'imagen',
                ]);
    
            $this->resetErrorBag();
      }
    
      public function VerForm(){
            $this->verForm=true;
      }

      public function CerrarForm(){
            $this->verForm=false;
            $this->LimpiarCampos();
      }

      private function LimpiarCampos(){
            $this->reset([
                  'imagen',
                  'nombre',
                  'descrip',
                  'idLinea',
                  'listLinea',
                  'listCategoria',
                  'codigo',
                  'peso',
                  'tiempoCurado',
            ]);
            $this->resetErrorBag();
      }

      public function Cancelar(){
            $this->verForm=false;
            $this->LimpiarCampos();
      }

      public function Grabar(){

            $validatedData = $this->validate(
                  [
                        'nombre' => 'required|min:5|max:100',
                        'descrip'=>'required',
                        'idLinea'=>'required',
                        'idCategoria'=>'required',
                        'imagen' => 'image|max:1024',
                  ],
                  [
                        'nombre.required'=> 'Debe ingresar el Nombre del Prducto',
                        'nombre.min'=> 'El nombre del Producto debe tener como mínimo 5 caracteres',
                        'nombre.max'=> 'El nombre del Producto debe tener como máximo 100 caracteres',
                        'descrip'=> 'Debe ingresar una descripción',
                        'idLinea.required'=> 'Debe indicar Línea',
                        'idCategoria.required'=> 'Debe ingresar Categoría',
                        'imagen.image'=> 'Debe subir un archivo de imagen',
                        'imagen.max'=> 'La imagen debe tener un tamaño máximo de 1MB',
                  ]
            );

            $pathImg = $this->imagen->store('productos', 'pathImg');
           
            DB::table('bd_laoctava_productos')->insert([
            'nombre' => $this->nombre,
            'tiempoCurado' => $this->tiempoCurado,
            'codigo' => $this->codigo,
            'peso' => $this->peso,
            'descrip' => $this->descrip,
            'pathImg' => basename($pathImg),
            'idLinea' => $this->idLinea,
            'idCategoria' => $this->idCategoria,
            'prtDestacado' => 2,
            'idUsr' => auth()->user()->email,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
            ]);
            
            $this->dispatch('actualiz-lista-productos');
            $this->verForm=false;
            $this->LimpiarCampos();
      }

      public function updatedImagen(){
            $this->resetErrorBag('imagen');
      }
      
      public function mount(){
            $this->listLinea = DB::table('bd_laoctava_linea')->get();
            $this->listCategoria = DB::table('bd_laoctava_categoria')
            ->where('idCat', '>', 0)
            ->get();
      }

      public function render()
      {
            return view('livewire.componentes.paneladmin.productonuevo');
      }
}
