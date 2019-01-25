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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/cargos', 'CargoController');

Route::resource('/sedes', 'SedeController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/tipoexamen', 'TipoExamenController');

Route::resource('tipoespecialidad', 'TipoEspecialidadController');

Route::resource('/tipovinculacion', 'TipoVinculacionController');

Route::resource('/productos', 'ProductoController');

Route::resource('/tipoausentismos','TipoausentismoController');

Route::resource('/empleados','EmpleadoController');

Route::resource('/ausentismos','AusentismoController');

Route::get('/prueba/{id}', 'AusentismoController@showDataEmploy');
Route::resource('/prorrogas','ProrrogaController');

 