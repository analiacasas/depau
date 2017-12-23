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
    return view('inicio/ini');
});
Route::get('admin', function () {
    return view('admin.inicio');
});
Route::get('colegio', function () {
    return view('admin.colegio');
});
Route::get('test', function () {
    return view('test.test');
});
//Route::get('admin/inicio', function () {
//    return view('ana');
//});
//Route::get('admin/inicio', function () {
//    //
//})->name('roy');
//Route::group(['prefix'=>'admin'], function (){
//    Route::resource('logins','LoginsController');
//});
Route::post('/login/store', 'LoginsController@store');
Route::get('con', 'LoginsController@index');
/*

/*

/*
 * rutas para colegio
 */
Route::get('/colegio/inicio','ColegioController@index');//inicio de colegio
Route::get("showcolegio",'ColegioController@mostrarinsertar'); // mostrar el formulario de agregar
Route::post('addcolegio','ColegioController@store'); /// ejecutar codigo en la bd para guardar un item
 route::get('listar/{page?}','ColegioController@listar');// listar los item de la tabla colegio
Route::post('buscarcolegio','ColegioController@buscar'); // envia el parametro de busqueda *request* al controlador
