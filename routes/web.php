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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::resource('articulo', 'ArticuloController');  //este metodo resource dice dame la ruta, cuando pongas /articulo va a pasar lo siguiente, en ArticuloController es una clase que va a tener toda la logica del proyecto
