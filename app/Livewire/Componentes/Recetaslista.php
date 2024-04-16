<?php

namespace App\Livewire\Componentes;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class Recetaslista extends Component
{
    public function render()
    {
        $recetas = DB::table('bd_laoctava_recetas')
            ->get();
        return view('livewire.componentes.recetaslista', ['recetas' => $recetas]);
    }
}
