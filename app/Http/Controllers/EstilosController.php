<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class EstilosController extends Controller
{
    public function getEstilos()
    {
        $estilos = DB::table('estilos')->select('ca', 'ec', 'ea', 'ro', 'estilo')->get();
        //$select = DB::select('select ca, ec, ea, ro, estilo from estilos');
        
        return $estilos;
    }
}
