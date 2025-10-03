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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('aulas', AulaController::class);
Route::resource('reservas', ReservaController::class);
Route::resource('horarios', HorarioController::class);
Route::resource('muebles', MuebleController::class);
Route::resource('proyectores', ProyectorController::class);
Route::resource('aires', AireAcondicionadoController::class);
Route::resource('cortinas', CortinaController::class);
Route::resource('focos', FocoController::class);
Route::resource('historial-focos', HistorialFocoController::class);
Route::resource('historial-aires', HistorialUsoAireAcondicionadoController::class);
Route::resource('disponibilidades', DisponibilidadController::class);
Route::resource('docentes', DocenteController::class);
Route::resource('materias', MateriaController::class);
