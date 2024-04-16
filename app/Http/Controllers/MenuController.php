<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{

    public function PnaInicio()
    {
        return view('paginaprincipal');
    }

    public function PnaProductos()
    {
        return view('productos');
    }

    public function PnaProductosTodos()
    {
      session(['categActual' => 0]);
        return view('productos');
    }
    
    public function PnaMontesano()
    {
        return view('montesano');
    }
    public function PnaRecetas()
    {
        return view('recetas');
    }
    public function PnaHistoria()
    {
        return view('historia');
    }
    public function PnaContacto()
    {
        return view('contactos');
    }
}
