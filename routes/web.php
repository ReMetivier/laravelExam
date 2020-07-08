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

Route::get('/', 'NavController@home');

Route::get('/listing', 'NavController@listing');
Route::get('/addAnimal', 'NavController@addAnimal');
Route::get('/deleteAnimal', 'NavController@deleteAnimal');
Route::post('/update', 'NavController@update');
Route::get('/ajout', 'NavController@ajout');


Route::post('/addOne', 'ActionController@addOne');
Route::post('/destroy', 'ActionController@destroy');

Route::post('/updateOne', 'ActionController@updateOne');
