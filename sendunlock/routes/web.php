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

//ADMIN
Route::get('/','UsuarioController@index');//controlador del usuario
Route::get('/admin','AdministradorController@index');//controlador del administrador
Route::get('/agregarusuario','UsuarioController@store');//agregar usuarios 
Route::get('/eliminarusuario/{id}','UsuarioController@destroy');//borrar usuarios 
Route::get('/editarusuario/{id}','UsuarioController@edit');//editar usuarios 
Route::get('/nuevaplantilla','UsuarioController@plantilla');//nueva plantilla 
Route::get('/editaplantilla/{id}','UsuarioController@editaplantilla');//nueva plantilla 
Route::get('/borrarplantilla/{id}','UsuarioController@borrarplantilla');//borra plantilla 
Route::get('/agregarmodelo','UsuarioController@agregarmodelo');//nueva plantilla 
Route::get('/borrarmodelo/{id}','UsuarioController@borrarmodelo');//nueva plantilla 

//PERFIL
Route::get('/profile','UsuarioController@profile');//mostrar perfil
Route::get('/editprofile/{id}','UsuarioController@editprofile');//editar perfil


//SMS
Route::get('/quicksms','SmsController@index');//muestra de sms
Route::get('/unlockphones','SmsController@unlockphones');//guardar sms
Route::get('/realsms','SmsController@realsms');//guardar sms
Route::get('/kamelstore','SmsController@kamelstore');//guardar sms
Route::get('/aces','SmsController@aces');//guardar sms


Route::get('/historysms','SmsController@historysms');//guardar sms

//SenderID
Route::get('/senderid','UsuarioController@senderid');//agregar senderid
Route::get('/editsenderid/{id}','UsuarioController@editsenderid');//agregar senderid
Route::get('/eliminarsenderid/{id}','UsuarioController@eliminarsenderid');//agregar senderid

//AUTH
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

