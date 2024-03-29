<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\MarcaController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProductoUserController;
use App\Http\Controllers\IndexUserController;
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




Route::view('/sesion', 'website/iniciosesion')->name('sesion');
Route::view('/detalle', 'website/piezas/detalle')->name('detalle');
Route::view('/eventos', 'website/eventos')->name('eventos');
Route::view('/blog', 'website/blog')->name('blog');
Route::view('/landing', 'website/landing')->name('landing');

Route::view('/miCuenta', 'website/clientes/index')->name('miCuenta');
Route::view('/misPedidos', 'website/clientes/pedidos')->name('misPedidos');



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
Route::resource('/marcasAdmin',MarcaController::class);
Route::resource('/categoriasAdmin',CategoriaController::class);


//Metodos de controladores
Route::get('/productos',[ProductoUserController::class, 'index']);
Route::get('/',[IndexUserController::class, 'index']);
Route::get('/detalle/{id}',[ProductoUserController::class, 'show']);
