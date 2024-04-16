<?php

namespace App\Livewire\Componentes\Paneladmin;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\ValidationException;

class Recetaedit extends Component
{
      use WithFileUploads;

      public $verForm;
      public $idReceta;

      public $nombre;
      public $tpoPrepar;
      public $tpoCoccion;
      public $tpoFinal;
      public $txtSubtit;
      public $txtParrafos;
      public $txtIngrediente;
      public $imagen;
      public $imagenAntig;

      public $vecIngredientes = [];
      public $vecDescripRecetas = [];


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
                  'vecDescripRecetas',
                  'vecIngredientes',
            ]);
            $this->resetErrorBag();
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
            $this->vecIngredientes[] = ['clave' => uniqid() , 'valor' => $this->txtIngrediente ];
            $this->reset([
                  'txtIngrediente'
            ]);
      }

      public function EliminarIngrediente($varClave){
            $ingredientesAux = [];
            foreach($this->vecIngredientes as $it ){
                  if ($it['clave'] != $varClave)
                  {
                        $ingredientesAux[] = $it;
                  }
            }
            $this->vecIngredientes = [];
            $this->vecIngredientes = $ingredientesAux;
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
            $this->vecDescripRecetas[] = ['clave' => uniqid() , 'tag'=> 't', 'valor' => $this->txtSubtit ];
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
            $this->vecDescripRecetas[] = ['clave' => uniqid() , 'tagHtml'=> 'p', 'valor' => $this->txtParrafos ];
            $this->reset([
                  'txtParrafos'
            ]);
      }

      public function EliminarItem($varClave){
            $descripRecetasAux = [];
            foreach($this->vecDescripRecetas as $it ){
                  if ($it['clave'] != $varClave)
                  {
                        $descripRecetasAux[] = $it;
                  }
            }
            $this->vecDescripRecetas = [];
            $this->vecDescripRecetas = $descripRecetasAux;
      }

      public function Cancelar(){
            $this->LimpiarCampos();
            $this->verForm=false;            
      }
      
      public function Grabar(){
            $errorListasVacias = false;
            Session::forget('vectorDescripVacio');
            Session::forget('vectorIngredientes');
            if (count($this->vecDescripRecetas) == 0){
                  Session::put('vectorDescripVacio', 'No ha ingresado una descripción de la receta');
                  $errorListasVacias = true;
            }
            if (count($this->vecIngredientes) == 0){
                  Session::put('vectorIngredientes', 'No ha ingresado ningún Ingrediente');
                  $errorListasVacias = true;
            }

            if($this->imagen){
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
            } else {
                  $validatedData = $this->validate(
                        [
                              'nombre' => 'required|min:5|max:100',
                        ],
                        [
                              'nombre.required'=> 'Debe ingresar el Nombre de la Receta',
                              'nombre.min'=> 'El nombre de la receta debe tener como mínimo 5 caracteres',
                              'nombre.max'=> 'El nombre de la receta debe tener como máximo 100 caracteres',
                        ]
                  );
            }

            if ($errorListasVacias == true)
                  throw ValidationException::withMessages(['listasVacias'=>'Listas sin datos']);


            if($this->imagen){
                  $rutaArchivo = public_path('img/recetas/' . $this->imagenAntig);
                  if (File::exists($rutaArchivo)) {
                        File::delete($rutaArchivo);
                  }
                  $pathImg = $this->imagen->store('recetas', 'pathImg');

                  DB::table('bd_laoctava_recetas')
                  ->where('id', $this->idReceta)
                  ->update([
                        'nombre' => $this->nombre,
                        'tiempoPreparacion' => $this->tpoPrepar,
                        'tiempoCoccion' => $this->tpoCoccion,
                        'tiempoTotal' => $this->tpoFinal,
                        'pathImg' => basename($pathImg),
                        'idUsr' => auth()->user()->email,
                        'updated_at' => now(),
                  ]);

                  DB::table('bd_laoctava_recetas_descrip')
                  ->where('idReceta', $this->idReceta)
                  ->delete();

                  DB::table('bd_laoctava_recetas_ingredientes')
                  ->where('idReceta', $this->idReceta)
                  ->delete();

                  foreach($this->vecDescripRecetas as $it ){
                        DB::table('bd_laoctava_recetas_descrip')->insert([
                              'idReceta' => $this->idReceta,
                              'tagHtml' => $it['tagHtml'],
                              'estilos' => '',
                              'parrafo' => $it['valor'],
                              'created_at' => now(),
                              'updated_at' => now(),
                        ]);
                  }

                  $nroIng=1;
                  foreach($this->vecIngredientes as $it ){
                        DB::table('bd_laoctava_recetas_ingredientes')->insert([
                              'idReceta' => $this->idReceta,
                              'nroIngrediente' => $nroIng,
                              'descIngrediente' => $it['valor'],
                              'created_at' => now(),
                              'updated_at' => now(),
                        ]);
                        $nroIng++;
                  }
            } else {
                  DB::table('bd_laoctava_recetas')
                  ->where('id', $this->idReceta)
                  ->update([
                        'nombre' => $this->nombre,
                        'tiempoPreparacion' => $this->tpoPrepar,
                        'tiempoCoccion' => $this->tpoCoccion,
                        'tiempoTotal' => $this->tpoFinal,
                        'idUsr' => auth()->user()->email,
                        'updated_at' => now(),
                  ]);

                  DB::table('bd_laoctava_recetas_descrip')
                  ->where('idReceta', $this->idReceta)
                  ->delete();

                  DB::table('bd_laoctava_recetas_ingredientes')
                  ->where('idReceta', $this->idReceta)
                  ->delete();

                  foreach($this->vecDescripRecetas as $it ){
                        DB::table('bd_laoctava_recetas_descrip')->insert([
                              'idReceta' => $this->idReceta,
                              'tagHtml' => $it['tagHtml'],
                              'estilos' => '',
                              'parrafo' => $it['valor'],
                              'created_at' => now(),
                              'updated_at' => now(),
                        ]);
                  }

                  $nroIng=1;
                  foreach($this->vecIngredientes as $it ){
                        DB::table('bd_laoctava_recetas_ingredientes')->insert([
                              'idReceta' => $this->idReceta,
                              'nroIngrediente' => $nroIng,
                              'descIngrediente' => $it['valor'],
                              'created_at' => now(),
                              'updated_at' => now(),
                        ]);
                        $nroIng++;
                  }

            }

            $this->dispatch('actualiz-lista-recetas');
            $this->verForm=false;
            
      }


      public function VerForm(){
            $this->verForm=true;

            $dtosReceta = [];
            $descripRecetas = [];
            $ingredientes = [];
            
            $dtosReceta = DB::table('bd_laoctava_recetas')
                  ->where('id', $this->idReceta)
                  ->first();

            $this->nombre = $dtosReceta->nombre;
            $this->tpoPrepar = $dtosReceta->tiempoPreparacion;
            $this->tpoCoccion = $dtosReceta->tiempoCoccion;
            $this->tpoFinal = $dtosReceta->tiempoTotal;
            $this->imagenAntig = $dtosReceta->pathImg;

            
            $ingredientes = DB::table('bd_laoctava_recetas_ingredientes')
                  ->where('idReceta', $this->idReceta)
                  ->get();

            foreach($ingredientes as $it ){
                  $this->vecIngredientes[] = ['clave' => uniqid() , 'valor' => $it->descIngrediente ];
            }
                  
            $descripRecetas = DB::table('bd_laoctava_recetas_descrip')
                  ->where('idReceta', $this->idReceta)
                  ->get();
            
            foreach($descripRecetas as $it ){
                  $this->vecDescripRecetas[] = ['clave' => uniqid() , 'tagHtml'=>$it->tagHtml, 'valor' => $it->parrafo ];
            }


      }

      public function CerrarForm(){
            $this->verForm=false;
      }

      public function render()
      {
            return view('livewire.componentes.paneladmin.recetaedit');
      }
}
