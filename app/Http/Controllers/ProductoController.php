<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductoController extends Controller
{
    public function ProductoDetalle($ori, $id){

      $dtosProd = DB::table('bd_laoctava_productos')
      ->where('id', $id)
      ->select(
          'bd_laoctava_productos.nombre',
          'bd_laoctava_productos.peso',
          'bd_laoctava_productos.tiempoCurado',
          'bd_laoctava_productos.codigo',
          'bd_laoctava_productos.descrip',
          'bd_laoctava_productos.pathImg',
          'bd_laoctava_productos.idLinea',
          'bd_laoctava_productos.idCategoria',
      )
      ->get();

      return view('productodet', ['ori'=>$ori, 'dtosProd' => $dtosProd]);
    }
}
