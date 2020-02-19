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

/*Route::get('/', function () {
    return view('home');
});
Route::get('catalog', function () {
    return view('catalog.index');
});
Route::get('catalog/show/{id}', function ($id) {
    return	view('catalog.show',	array('id'=>$id));
});
Route::get('login', function(){
    return view('auth.login');
});

Route::get('logout', function(){
    return view('auth.logout');
});*/

Route::resource('almacen/categoria','CategoriaController');











/*Route::get('user/{name?}', function ($name = null){
    return "Bienvenido ".$name;
});*/

/*Route::get('user/{id}', "UserController@show");

Route::get('index', function (){
   return view('partials.navbar');
});*/


