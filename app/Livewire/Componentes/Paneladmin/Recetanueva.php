<?php

namespace App\Livewire\Componentes\Paneladmin;

use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\ValidationException;

class Recetanueva extends Component
{
      use WithFileUploads;

      public $verForm;
      public $nombre;
      public $tpoPrepar;
      public $tpoCoccion;
      public $tpoFinal;
      public $txtSubtit;
      public $txtParrafos;
      public $txtIngrediente;
      public $imagen;
      public $descripRecetas = [];
      public $ingredientes = [];


      private function LimpiarCampos(){
            Session::forget('vectorDescripVacio');
            Session::forget('vectorIngredientes');
            $this->reset([
                  'nombre',
                  'tpoPrepar',
                  'tpoCoccion',
                  'tpoFinal',
                  'txtSubtit',
                  'txtParrafos',
                  'txtIngrediente',
                  'imagen',
                  'descripRecetas',
                  'ingredientes',
            ]);
            $this->resetErrorBag();
      }


      public function ModifImagenSubida(){
            $this->reset(
                [
                    'imagen',
                ]);
    
            $this->resetErrorBag();
      }

      public function VerForm(){
            $this->LimpiarCampos();
            $this->verForm=true;
      }

      public function CerrarForm(){
            $this->LimpiarCampos();
            $this->verForm=false;
      }

      public function Cancelar(){
            $this->LimpiarCampos();
            $this->verForm=false;            
      }
      
      public function Grabar(){
            $errorListasVacias = false;
            Session::forget('vectorDescripVacio');
            Session::forget('vectorIngredientes');
            if (count($this->descripRecetas) == 0){
                  Session::put('vectorDescripVacio', 'No ha ingresado una descripción de la receta');
                  $errorListasVacias = true;
            }
            if (count($this->ingredientes) == 0){
                  Session::put('vectorIngredientes', 'No ha ingresado ningún Ingrediente');
                  $errorListasVacias = true;
            }

            $validatedData = $this->validate(
                  [
                        'nombre' => 'required|min:5|max:100',                        
                        'imagen' => 'image|max:1024',
                  ],
                  [
                        'nombre.required'=> 'Debe ingresar el Nombre de la Receta',
                        'nombre.min'=> 'El nombre de la receta debe tener como mínimo 5 caracteres',
                        'nombre.max'=> 'El nombre de la receta debe tener como máximo 100 caracteres',
                        'imagen.image'=> 'Debe subir un archivo de imagen',
                        'imagen.max'=> 'La imagen debe tener un tamaño máximo de 1MB',
                  ]
            );

            if ($errorListasVacias == true)
                  throw ValidationException::withMessages(['listasVacias'=>'Listas sin datos']);


            $pathImg = $this->imagen->store('recetas', 'pathImg');

            $idInsertado = DB::table('bd_laoctava_recetas')->insertGetId([
                  'nombre' => $this->nombre,
                  'tiempoPreparacion' => $this->tpoPrepar,
                  'tiempoCoccion' => $this->tpoCoccion,
                  'tiempoTotal' => $this->tpoFinal,
                  'pathImg' => basename($pathImg),
                  'idUsr' => auth()->user()->email,
                  'rta_destacada'=>2,
                  'created_at' => now(),
                  'updated_at' => now(),
            ]);

            foreach($this->descripRecetas as $it ){
                  DB::table('bd_laoctava_recetas_descrip')->insert([
                        'idReceta' => $idInsertado,
                        'tagHtml' => $it['tag'],
                        'estilos' => '',
                        'parrafo' => $it['valor'],
                        'created_at' => now(),
                        'updated_at' => now(),
                  ]);
            }

            $nroIng=1;
            foreach($this->ingredientes as $it ){
                  DB::table('bd_laoctava_recetas_ingredientes')->insert([
                        'idReceta' => $idInsertado,
                        'nroIngrediente' => $nroIng,
                        'descIngrediente' => $it['valor'],
                        'created_at' => now(),
                        'updated_at' => now(),
                  ]);
                  $nroIng++;
            }
            
            $this->dispatch('actualiz-lista-recetas');

            $this->verForm=false;
            
      }

      public function EliminarIngrediente($varClave){
            $ingredientesAux = [];
            foreach($this->ingredientes as $it ){
                  if ($it['clave'] != $varClave)
                  {
                        $ingredientesAux[] = $it;
                  }
            }
            $this->ingredientes = [];
            $this->ingredientes = $ingredientesAux;
      }

      public function EliminarItem($varClave){
            $descripRecetasAux = [];
            foreach($this->descripRecetas as $it ){
                  if ($it['clave'] != $varClave)
                  {
                        $descripRecetasAux[] = $it;
                  }
            }
            $this->descripRecetas = [];
            $this->descripRecetas = $descripRecetasAux;
      }

      public function GrabarIngrediente(){
            $validatedData = $this->validate(
                  [
                        'txtIngrediente' => 'required|min:5|max:100',
                  ],
                  [
                        'txtIngrediente.required'=> 'Debe ingresar ingrediente',
                        'txtIngrediente.min'=> 'El nombre del ingrediente debe tener como mínimo 5 caracteres',
                        'txtIngrediente.max'=> 'El nombre del ingrediente debe tener como máximo 100 caracteres',
                  ]
            );

            Session::forget('vectorIngredientes');
            $this->ingredientes[] = ['clave' => uniqid() , 'valor' => $this->txtIngrediente ];
            $this->reset([
                  'txtIngrediente'
            ]);
      }

      public function GrabarSubTit(){

            $validatedData = $this->validate(
                  [
                        'txtSubtit' => 'required|min:3|max:100',
                  ],
                  [
                        'txtSubtit.required'=> 'Debe ingresar un subtítulo',
                        'txtSubtit.min'=> 'El subtítulo debe tener como mínimo 5 caracteres',
                        'txtSubtit.max'=> 'El subtítulo debe tener como máximo 100 caracteres',
                  ]
            );

            Session::forget('vectorDescripVacio');
            $this->descripRecetas[] = ['clave' => uniqid() , 'tag'=> 't', 'valor' => $this->txtSubtit ];
            $this->reset([
                  'txtSubtit'
            ]);
      }
      

      public function GrabarParrafos(){
            $validatedData = $this->validate(
                  [
                        'txtParrafos' => 'required|min:5|max:500',
                  ],
                  [
                        'txtParrafos.required'=> 'Debe ingresar un texto de descripción',
                        'txtParrafos.min'=> 'El párrafo debe tener como mínimo 5 caracteres',
                        'txtParrafos.max'=> 'El párrafo debe tener como máximo 500 caracteres',
                  ]
            );

            Session::forget('vectorDescripVacio');
            $this->descripRecetas[] = ['clave' => uniqid() , 'tag'=> 'p', 'valor' => $this->txtParrafos ];
            $this->reset([
                  'txtParrafos'
            ]);
      }

      public function updatedImagen(){
            $this->resetErrorBag('imagen');
      }

            public function render()
      {
            return view('livewire.componentes.paneladmin.recetanueva');
      }
}
