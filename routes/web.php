<?php

use App\Http\Controllers\AulaController;
use App\Http\Controllers\ReservaController;
use App\Http\Controllers\HorarioController;
use App\Http\Controllers\MuebleController;
use App\Http\Controllers\ProyectorController;
use App\Http\Controllers\AireAcondicionadoController;
use App\Http\Controllers\CortinaController;
use App\Http\Controllers\FocoController;
use App\Http\Controllers\HistorialFocoController;
use App\Http\Controllers\HistorialUsoAireAcondicionadoController;
use App\Http\Controllers\DisponibilidadController;
use App\Http\Controllers\DocenteController;
use App\Http\Controllers\MateriaController;

use Illuminate\Support\Facades\Route;

/* -------------------------------------------
 * 1. RUTA PRINCIPAL (Menú Estético)
 * Esta es la única ruta '/' y apunta a la vista 'menu.blade.php'.
 * ------------------------------------------- */
Route::get('/', function () {
    return view('menu'); 
})->name('menu.principal'); 


/* -------------------------------------------
 * 2. RUTAS DE RECURSOS (Para que los botones funcionen)
 * Route::resource crea automáticamente la ruta '.index' (listado).
 * ------------------------------------------- */

// Recursos Principales para los botones:
Route::resource('docentes', DocenteController::class);
Route::resource('aulas', AulaController::class);
Route::resource('reservas', ReservaController::class);
Route::resource('horarios', HorarioController::class);
Route::resource('materias', MateriaController::class);
Route::resource('disponibilidades', DisponibilidadController::class);


// Recursos de Componentes y Otros:
Route::resource('muebles', MuebleController::class);
Route::resource('proyectores', ProyectorController::class);
Route::resource('aires', AireAcondicionadoController::class);
Route::resource('cortinas', CortinaController::class);
Route::resource('focos', FocoController::class);
Route::resource('historial-focos', HistorialFocoController::class);
Route::resource('historial-aires', HistorialUsoAireAcondicionadoController::class);