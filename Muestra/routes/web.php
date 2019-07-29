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

Route::get('/tarea/form', 'TareaController@form')
	->name("tarea.formulario");
Route::get('/tareas/nuevo', 'TareaController@guardar')
	->name("tarea.guardar");
	
Route::get('/b', function () {
    return view('Login');
});

Route::group(['middleware' => 'auth'], function () {
    //    Route::get('/link1', function ()    {
//        // Uses Auth Middleware
//    });
	Route::get('/', 'TareaController@mostrar')
	->name("home");
    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
});

Route::resource('tareas', 'TareasController');