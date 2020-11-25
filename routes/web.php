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

Route::get('/', 'WelcomePage@index');

Route::get('/toko', 'TokoController@index');
Route::get('/tokosearch', 'TokoController@tokosearch');

Route::get('/login', 'AdminController@login');
Route::post('/admlogin', 'AdminController@admlogin');
Route::get('/logout', 'AdminController@logout');

Route::get('/admin', 'AdminController@home');

Route::get('/tambahdest', 'AdminController@tambahdest');
Route::post('/tambahdestf', 'AdminController@tambahdestf');
Route::get('/{id}/deletedest', 'AdminController@deletedest');

Route::get('/admintoko', 'AdminController@admintoko');
Route::get('/tambahbarang', 'AdminController@tambahbarang');
Route::post('/tambahbarangf', 'AdminController@tambahbarangf');
Route::get('/{id}/deletebarang', 'AdminController@deletebarang');

Route::get('/admintokosearch','AdminController@admintokosearch');
