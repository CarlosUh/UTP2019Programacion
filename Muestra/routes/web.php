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

Route::get('/', 'TareaController@mostrar')
	->name("home");
Route::get('/tarea/form', 'TareaController@form')
	->name("tarea.formulario");
Route::get('/tareas/nuevo', 'TareaController@guardar')
	->name("tarea.guardar");









