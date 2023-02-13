<?php

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

Route::get('/', function () {
    return view('welcome');
});


Route::view('/tiendaSkate', 'website/index')->name('tiendaSkate');
Route::view('/productos', 'website/productos')->name('productos');
Route::view('/sesion', 'website/iniciosesion')->name('sesion');


Route::view('/panelControl', 'admin/index')->name('panelControl');
Route::view('/inventarioTenis', 'admin/tenis')->name('inventarioTenis');
Route::view('/inventarioRopa', 'admin/ropa')->name('inventarioRopa');
Route::view('/inventarioTablas', 'admin/tablas')->name('inventarioTablas');
