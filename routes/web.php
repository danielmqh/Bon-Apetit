<?php

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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::resource('proveedores', 'ProveedoresController');

Route::resource('mesas', 'MesasController');

Route::resource('turnos', 'TurnosController');

Route::resource('cargos', 'CargosController');

Route::resource('trabajadores', 'trabajadoresController');

Route::resource('tipo_bebidas', 'Tipo_bebidasController');

Route::resource('tipo_platos', 'Tipo_platosController');

Route::resource('bebidas', 'BebidasController');

Route::resource('platos', 'PlatoController');

Route::resource('batender', 'Batender_bebidaController');
