<?php

// rutas apis(controladores) PINCHE DAVID
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnosController;


// rutas apis(controladores) HECTOR
use App\Http\Controllers\ConsulasControlador;


// rutas apis(controladores) PANCHO

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

// rutas apis(controladores) PINCHE DAVID
Route::apiResource('apiAlumno',AlumnosController::class);
Route::apiResource('apiCapitulo', CapituloController::class);



// rutas apis(controladores) HECTOR
Route::apiResource('apiConsulta', ConsulasControlador::class);
Route::view('consulta', 'consultas/Consultas');
// rutas apis(controladores) PANCHO