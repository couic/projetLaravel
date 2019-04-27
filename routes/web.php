<?php
use Illuminate\Support\Facades\Route;

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

Route::get('/', 'HomeController@index');
Route::get('/Home', 'HomeController@index');
Route::get('/Articles', 'ArticlesController@index');
Route::get('/articles/{post_name}', 'ArticlesController@show');
Route::get('/Contact', 'ContactController@index');
Route::post('contact', 'ContactController@store');