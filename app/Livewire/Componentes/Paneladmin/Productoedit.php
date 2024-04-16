<?php

namespace App\Livewire\Componentes\Paneladmin;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Livewire\WithFileUploads;

class Productoedit extends Component
{
      use WithFileUploads;

      public $verForm;
      public $idProducto;

      public $imagen;
      public $imagenAntig;
      public $nombre;
      public $descrip;
      public $idLinea;
      public $idCategoria;
      public $listLinea = [];
      public $listCategoria = [];
      public $codigo;
      public $peso;
      public $tiempoCurado;

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


      public function VerForm(){
            $dtosProduc = DB::table('bd_laoctava_productos')->where('id', $this->idProducto)->first();

            $this->nombre = $dtosProduc->nombre;
            $this->tiempoCurado = $dtosProduc->tiempoCurado;
            $this->codigo = $dtosProduc->codigo;
            $this->peso = $dtosProduc->peso;
            $this->descrip = $dtosProduc->descrip;
            $this->idLinea = $dtosProduc->idLinea;
            $this->idCategoria = $dtosProduc->idCategoria;
            $this->imagenAntig = $dtosProduc->pathImg;
                        
            $this->verForm=true;
      }

      public function Cancelar(){
            $this->verForm=false;
            $this->LimpiarCampos();
      }

      public function Grabar(){

            if($this->imagen){
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
            } else {
                  $validatedData = $this->validate(
                        [
                              'nombre' => 'required|min:5|max:100',
                              'descrip'=>'required',
                              'idLinea'=>'required',
                              'idCategoria'=>'required',
                        ],
                        [
                              'nombre.required'=> 'Debe ingresar el Nombre del Prducto',
                              'nombre.min'=> 'El nombre del Producto debe tener como mínimo 5 caracteres',
                              'nombre.max'=> 'El nombre del Producto debe tener como máximo 100 caracteres',
                              'descrip'=> 'Debe ingresar una descripción',
                              'idLinea.required'=> 'Debe indicar Línea',
                              'idCategoria.required'=> 'Debe ingresar Categoría',
                        ]
                  );
            }

            if($this->imagen){
                  $rutaArchivo = public_path('img/productos/' . $this->imagenAntig);
                  if (File::exists($rutaArchivo)) {
                        File::delete($rutaArchivo);
                  }
                  $pathImg = $this->imagen->store('Productos', 'pathImg');

                  DB::table('bd_laoctava_productos')
                  ->where('id', $this->idProducto)
                  ->update([
                        'nombre' => $this->nombre,
                        'tiempoCurado' => $this->tiempoCurado,
                        'codigo' => $this->codigo,
                        'peso' => $this->peso,
                        'descrip' => $this->descrip,
                        'pathImg' => basename($pathImg),
                        'idLinea'=>$this->idLinea,
                        'idCategoria'=>$this->idCategoria,
                        'idUsr' => auth()->user()->email,
                        'updated_at' => date("Y-m-d H:i:s"),
                  ]);
            }
            else {
                  DB::table('bd_laoctava_productos')
                  ->where('id', $this->idProducto)
                  ->update([
                        'nombre' => $this->nombre,
                        'tiempoCurado' => $this->tiempoCurado,
                        'codigo' => $this->codigo,
                        'peso' => $this->peso,
                        'descrip' => $this->descrip,
                        'idLinea'=>$this->idLinea,
                        'idCategoria'=>$this->idCategoria,
                        'idUsr' => auth()->user()->email,
                        'updated_at' => date("Y-m-d H:i:s"),
                  ]);
            }
            
            $this->dispatch('actualiz-lista-productos');
            $this->verForm=false;
            $this->LimpiarCampos();
      }

      public function CerrarForm(){
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
            return view('livewire.componentes.paneladmin.productoedit');
      }
}
