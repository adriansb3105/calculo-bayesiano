<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/estilo', function () {
    return view('estilos');
});

Route::get('/recinto', function () {
    return view('recinto');
});

Route::get('/sexos', function () {
    return view('sexo');
});

Route::get('/formas', function () {
    return view('formas');
});

Route::get('/profesores', function () {
    return view('profesores');
});

Route::get('/redes', function () {
    return view('redes');
});

Route::get('/eficiencia', function () {
    return view('eficiencia');
});