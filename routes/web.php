<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\ProductoController;
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




Route::view('/', 'website/index')->name('tiendaSkate');
Route::view('/productos', 'website/productos')->name('productos');
Route::view('/sesion', 'website/iniciosesion')->name('sesion');


// Route::view('/panelControl', 'admin/index')->name('panelControl');
Route::view('/panelControl', 'admin/dashboard')->name('panelControl');
Route::view('/inventarioTenis', 'admin/tenis')->name('inventarioTenis');
Route::view('/inventarioRopa', 'admin/ropa')->name('inventarioRopa');
Route::view('/inventarioTablas', 'admin/tablas')->name('inventarioTablas');



Route::view('/clientes', 'admin/clientes/index')->name('clientes');
Route::view('/equipo', 'admin/empleados/index')->name('equipo');
Route::view('/inventario', 'admin/productos/index')->name('inventario');

Route::resource('/clienteAdmin',ClienteController::class);
Route::resource('/equipoAdmin',EmpleadoController::class);
Route::resource('/productoAdmin',ProductoController::class);



