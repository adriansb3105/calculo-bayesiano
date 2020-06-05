<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class ProfesorController extends Controller
{
    public function getProfesores()
    {
        $profesores = DB::table('profesores')->select('edad','sexo','evaluacion','veces','fondo','habilidad','experiencia','web','clase')->get();
        
        return $profesores;
    }
}
