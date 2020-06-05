<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class RedController extends Controller
{
    public function getRedes()
    {
        $redes = DB::table('redes')->select('fiabilidad', 'enlaces', 'capacidad', 'costo', 'clase')->get();
        
        return $redes;
    }
}
