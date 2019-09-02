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
Route::group(['middleware' => 'readwrite'], function () {
Route::get('/tarea/form', 'TareaController@form')
	->name("tarea.formulario");
Route::post('/tareas/nuevo', 'TareaController@guardar')
	->name("tarea.guardar");
Route::get('/usuarios', 'UsuarioController@index');
Route::post('/usuarios', 'UsuarioController@reestablecer');
});

Route::get('/b', function () {
    return view('Login');
});

Route::get('/ver', 
'TareaController@ver');

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