<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocalidadController;
use App\Http\Controllers\EquipoController;
use App\Http\Controllers\JugadorController;

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

Route::get('/',[LocalidadController::class,'index'])->name('index');

/////////////////////////////////////*Localidades*///////////////////////////////////////////////////////////////
//index
Route::get('localidadesIndex',[LocalidadController::class,'localidadesIndex'])->name('localidad.index');

//Listar
Route::get('localidades',[LocalidadController::class,'localidadesListar'])->name('localidad.listar');

//Crear
Route::get('localidades/crear',[LocalidadController::class,'crearlocalidad'])->name('localidad.crearlocalidad');
Route::post('localidades',[LocalidadController::class,'guardarlocalidad'])->name('localidad.guardar');

//editar
Route::get('Localidades/editar/{id}',[LocalidadController::class,'editarlocalidad'])->name('localidad.editar');
Route::put('Localidades/{id}',[LocalidadController::class,'actualizarlocalidad'])->name('localidad.actualizar');

//Eliminar
Route::delete('Localidades/{id}',[LocalidadController::class,'eliminarlocalidad'])->name('localidad.eliminar');

/////////////////////////////////////*Equipos*///////////////////////////////////////////////////////////////

//listar
Route::get('equipos',[EquipoController::class,'listarequipos'])->name('equipo.index');

//Crear
Route::get('equipos/crear',[EquipoController::class,'crearequipos'])->name('equipo.crear');
Route::post('equipos',[EquipoController::class,'guardarequipos'])->name('equipo.guardar');

//editar
Route::get('equipos/editar/{id}',[EquipoController::class,'editarequipos'])->name('equipo.editar');
Route::put('equipos/{id}',[EquipoController::class,'actualizarequipos'])->name('equipo.actualizar');

//eliminar
Route::delete('equipos/{id}',[EquipoController::class,'eliminarequipos'])->name('equipo.eliminar');

/////////////////////////////////////*Jugadores*///////////////////////////////////////////////////////////////

//listar
Route::get('jugadores',[JugadorController::class,'jugadoreslistar'])->name('jugador.index');

//Crear
Route::get('jugadores/crear',[JugadorController::class,'crearjugador'])->name('jugador.crear');
Route::post('jugadores',[JugadorController::class,'guardarjugadores'])->name('jugador.guardar');

//editar
Route::get('jugadores/editar/{id}',[JugadorController::class,'editarjugadores'])->name('jugador.editar');
Route::put('jugadores/{id}',[JugadorController::class,'actualizarjugadores'])->name('jugador.actualizar');

//Eliminar
Route::delete('jugadores/{id}',[JugadorController::class,'eliminarjugadores'])->name('jugador.eliminar');
