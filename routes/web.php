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

Route::get('/', 'CategoryController@index');
Route::get('/category/create', 'CategoryController@create');  
Route::get('/category/{Categories}', 'CategoryController@show');
Route::post('/category', 'CategoryController@store'); 
Route::get('/category/{Categories}/edit', 'CategoryController@edit');  
Route::put('/category/{Categories}', 'CategoryController@update'); 
Route::delete('/category/{Categories}', 'CategoryController@destroy'); 






