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

Route::get('/', 'AssetsController@index');
Route::get('/assets/create', 'AssetsController@create'); 
Route::get('/assets/{asset}', 'AssetsController@show');

Route::get('/', function () {
    return view('welcome');
});

Route::post('/assets','AssetsController@store'); 

Route::get('/assets/{asset}/edit','AssetsController@edit'); 

Route::put('/assets/{asset}','AssetsController@update'); 

Route::delete('/assets/{asset}','AssetsController@destroy'); 