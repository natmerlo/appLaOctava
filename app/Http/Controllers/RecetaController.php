<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RecetaController extends Controller
{
      public function RecetaDetalle($ori, $id)
      {            
            $dtosReceta = DB::table('bd_laoctava_recetas')
                  ->where('id', $id)
                  ->first();
            
            // Obtener receta anterior
            $recetaAnterior = DB::table('bd_laoctava_recetas')
                  ->where('id', '<', $id) // Recetas con ID menor al actual
                  ->orderBy('id', 'desc') // Ordenar por ID en orden descendente
                  ->first();

            // Obtener receta posterior
            $recetaPosterior = DB::table('bd_laoctava_recetas')
                  ->where('id', '>', $id) // Recetas con ID mayor al actual
                  ->orderBy('id', 'asc') // Ordenar por ID en orden ascendente
                  ->first();

            $dtosPrepar = DB::table('bd_laoctava_recetas_descrip')
                  ->where('idReceta', $id)
                  ->get();

            $dtosIngredientes = DB::table('bd_laoctava_recetas_ingredientes')
                        ->where('idReceta', $id)
                  ->get();

            return view('recetadet', 
            [
                  'dtosReceta' => $dtosReceta,
                  'dtosPrepar' => $dtosPrepar,
                  'dtosIngredientes' => $dtosIngredientes,
                  'recetaAnterior' => $recetaAnterior,
                  'recetaPosterior' => $recetaPosterior,
                  'ori' => $ori,
            ]);
      }
}
