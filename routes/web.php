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
    return view('auth/login');
});
/*
Rutas de bodega
 */
Route::get('/bodega', 'BodegaController@index');
Route::get('/bodega/recepcion', 'BodegaController@recepcion');
Route::get('/bodega/movimientos', 'BodegaController@movimientos');
Route::get('/bodega/pedidos', 'BodegaController@pedidos');
Route::get('/bodega/inventario', 'BodegaController@inventario');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
