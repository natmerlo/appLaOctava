<?php

namespace App\Livewire\Componentes\Slider;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Recetas extends Component
{
    public function render()
    {
        $recetas = DB::table('bd_laoctava_recetas')
            ->where('rta_destacada', 1)
            ->select('bd_laoctava_recetas.id', 'bd_laoctava_recetas.nombre', 'bd_laoctava_recetas.pathImg')
            ->get();

        return view('livewire.componentes.slider.recetas', ['recetas' => $recetas]);
    }
}
