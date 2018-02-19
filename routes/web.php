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
    return view('home');
});

Route::resource('/users', 'UsersController');
Route::resource('/productos', 'ProductosController');
Route::resource('/detalles', 'DetallesController');
Route::resource('/proveedor', 'ProveedorController');


Route::get('/users/{id}', function ($id) {
    return 'usuarios/'.$id;
});