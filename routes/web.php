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

/**
 * Ruta principal de la aplicacion
 * Redirige al usuario al controlador WebController 
 * al metodo/función index
 * Regresa la vista de principal de la aplicacion
 */
Route::get('/', 'WebController@index');

/**
 * Ruta para la visualizacion de una carrera seleccionada
 * se le manda como parametro el id de la carrera 
 * Redirige al usuario al controlador CarreraController 
 * al metodo/función show
 * Regresa la vista de detalle de una carrera
 */
Route::get('/carreras/{carrera}', 'CarreraController@show');
