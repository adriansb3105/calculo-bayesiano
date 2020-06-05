<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('estilos', 'EstilosController@getEstilos');
Route::get('recintos', 'RecintoController@getRecintos');
Route::get('sexos', 'SexoController@getSexos');
Route::get('formas', 'FormaController@getFormas');
Route::get('profesores', 'ProfesorController@getProfesores');
Route::get('redes', 'RedController@getRedes');