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

// l'index renvoie au contrôleur de la page d'accueil
Route::get('/', 'HomeController@index');
Route::get('/Home', 'HomeController@index');
Route::get('/Articles', 'ArticlesController@index');
Route::get('/articles/{post_name}', 'ArticlesController@show');
Route::get('/Contact', 'ContactController@index');