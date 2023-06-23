<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnosController;

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

// ruta plantilla master
Route::get('index', function () {
    return view('index');
});

//rutas vistas
Route::view('alumno','alumnos/alumnos');
Route::view('capitulo','capitulo/capitulo');

// rutas apis(controladores)
Route::apiResource('apiAlumno',AlumnosController::class);
Route::apiResource('apiCapitulo',CapituloController::class);