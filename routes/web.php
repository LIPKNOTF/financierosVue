<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnosController;

<<<<<<< HEAD

// rutas apis(controladores) HECTOR
use App\Http\Controllers\ConsulasControlador;


// rutas apis(controladores) PANCHO

=======
>>>>>>> 52ea15595ff8dd5cd9bdc53ad73ee9d82b9e37aa
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
<<<<<<< HEAD
Route::apiResource('apiCapitulo', CapituloController::class);



// rutas apis(controladores) HECTOR
Route::apiResource('apiConsulta', ConsulasControlador::class);
Route::view('consulta', 'consultas/Consultas');
// rutas apis(controladores) PANCHO
=======
Route::apiResource('apiCapitulo',CapituloController::class);
>>>>>>> 52ea15595ff8dd5cd9bdc53ad73ee9d82b9e37aa
