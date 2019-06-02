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


Route::get('/','UsuarioController@index');//controlador del usuario
Route::get('/admin','AdministradorController@index');//controlador del administrador
Route::get('/agregarusuario','UsuarioController@store');//agregar usuarios 
Route::get('/{id}','UsuarioController@destroy');//borrar usuarios 

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
