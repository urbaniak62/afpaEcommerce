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

Route::get('/', 'ConnectionController@index');
route::post('/','ConnectionController@connect');

Route::get('/inscription','InscriptionController@formulaire');
Route::post('/inscription','InscriptionController@traitement');

Route::get('/admin','AdminController@liste');

route::get('/homme',function(){
    return view('homme');
});

route::get('ajouter','ProductController@index');
