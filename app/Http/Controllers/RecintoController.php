<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class RecintoController extends Controller
{
    public function getRecintos()
    {
        $recintos = DB::table('recinto')->select('estilo', 'promedio', 'sexo', 'recinto')->get();
        
        return $recintos;
    }
}
