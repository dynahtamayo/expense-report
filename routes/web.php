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
//users table
Route::get('/', 'UsersController@index');
//GET - display the Create users form
Route::get('/users/create', 'UsersController@create');
Route::get('/users/{users}', 'UsersController@show');

//POST - store a record
Route::post('/users', 'UsersController@store');

//GET - display and edit users form
Route::get('/users/{users}/edit', 'UsersController@edit');

//PUT - update a users record
Route::put('/users/{users}', 'UsersController@update');

//DELETE - delete a users record
Route::delete('/users/{users}', 'UsersController@destroy');

//departments table
Route::get('/departments', 'DepartmentsController@index');
//GET - display the Create departments form
Route::get('/departments/create', 'DepartmentsController@create');
Route::get('/departments/{departments}', 'DepartmentsController@show');

//POST - store a record
Route::post('/departments', 'DepartmentsController@store');

//GET - display and edit departments form
Route::get('/departments/{departments}/edit', 'DepartmentsController@edit');

//PUT - update a departments record
Route::put('/departments/{departments}', 'DepartmentsController@update');

//DELETE - delete a departments record
Route::delete('/departments/{departments}', 'DepartmentsController@destroy');