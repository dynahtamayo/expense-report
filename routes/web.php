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

Route::get('/category/create', 'CategoryController@create'); // FIRST 
Route::get('/category/{Categories}', 'CategoryController@show');

Route::post('/category', 'CategoryController@store'); // SECOND

Route::get('/category/{Categories}/edit', 'CategoryController@edit'); //THIRD
 
Route::put('/category/{Categories}', 'CategoryController@update'); // FOURTH

Route::delete('/category/{Categories}', 'CategoryController@destroy'); // FIFT


//display
// GET /events/create = display the create form FIRST
// GET /events/{event}/edit = display the update form THIRD

//REST 
//submit
// POST /events = store a record SECOND

//update
// PUT /events/{event} = update a record FOURTH

//delete
// DELETE /events/{event} = delete a record FIFTH



