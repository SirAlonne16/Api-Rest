<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfeController;

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
Route::get('/crear-admin', [AdminController::class, 'formularioCrear'])->name('formulario_crear_admin');

Route::get('/crear-profe', [ProfeController::class, 'formularioCrear'])->name('formulario_crear_profe');

Route::get('/crear-cliente', [ClienteController::class, 'formularioCrear'])->name('formulario_crear_cliente');

Route::post('/guardar-admin', [AdminController::class, 'guardarCliente'])->name('guardarAdmin');

Route::post('/guardar-profe', [ProfeController::class, 'guardarCliente'])->name('guardarProfe');

Route::post('/guardar-cliente', [ClienteController::class, 'guardarCliente'])->name('guardar_cliente');


Route::get('', function () {
    return view('welcome');
});
