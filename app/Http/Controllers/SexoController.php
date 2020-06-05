<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class SexoController extends Controller
{
    public function getSexos()
    {
        $sexos = DB::table('recinto')->select('estilo', 'promedio', 'recinto', 'sexo')->get();
        
        return $sexos;
    }
}
