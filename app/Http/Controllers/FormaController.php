<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class FormaController extends Controller
{
    public function getFormas()
    {
        $formas = DB::table('recinto')->select('recinto', 'promedio', 'sexo', 'estilo')->get();
        
        return $formas;
    }
}
