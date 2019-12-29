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
    return view('welcome');
});
//ruta basica
Route::get('/miruta',function(){
    return "hola mundo";
});
//Con entrada
Route::get('/name/{input}/lastname/{input2}',function($entrada,$entrada2){
    return "hola ".$entrada.$entrada2 ;
});
//Con entrada opcional
Route::get('/nombre/{name}/apellido/{apellido?}',function($nom,$ape=null){
    return "hola ".$nom. $ape;
});
//Con controller
Route::get('/pruebaControl','pruebaController@funcionPrueba');
//Controller con Parametro
Route::get('/pruebaCTParam/{input}','pruebaController@funcionPrueba2');
//A controller de tipo resource
Route::resource('/trainers', 'TrainerController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::resource('pokemon', 'PokemonController');

Route::get('/home', 'HomeController@index')->name('home');
