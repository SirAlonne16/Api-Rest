<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\AdministradorController;
use App\Http\Controllers\ProfesorController;


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


Route::get('/crear-cliente', [ClienteController::class, 'formularioCrear'])->name('formulario_crear_cliente');
Route::post('/guardar-cliente', [ClienteController::class, 'guardarCliente'])->name('guardar_cliente');

Route::get('administradores/create', [AdministradorController::class, 'create'])->name('administradores.create');
Route::post('administradores', [AdministradorController::class, 'store'])->name('administradores.store');

Route::get('profesores/create', [ProfesorController::class, 'create'])->name('profesores.create');
Route::post('profesores', [ProfesorController::class, 'store'])->name('profesores.store');

Route::get('', function () {
    return view('Principal');
});
