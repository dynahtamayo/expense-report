<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', 'BudgetItemsController@index');


Route::get('/budget-items/create', 'BudgetItemsController@create'); // FIRST
Route::get('/budget-items/{budget_item}', 'BudgetItemsController@show');

Route::post('/budget-items', 'BudgetItemsController@store'); // SECOND

Route::get('/budget-items/{budget_item}/edit', 'BudgetItemsController@edit'); //THIRD

Route::put('/budget-items/{budget_item}', 'BudgetItemsController@update'); // FOURTH

Route::delete('/budget-items/{budget_item}', 'BudgetItemsController@destroy'); // FIFTH

Route::get('/', 'CategoryController@index');
Route::get('/category/create', 'CategoryController@create'); // FIRST 
Route::get('/category/{Categories}', 'CategoryController@show');
Route::post('/category', 'CategoryController@store'); // SECOND
Route::get('/category/{Categories}/edit', 'CategoryController@edit'); //THIRD
Route::put('/category/{Categories}', 'CategoryController@update'); // FOURTH
Route::delete('/category/{Categories}', 'CategoryController@destroy'); // FIFT


//users table
Route::get('/', 'UsersController@index');

Route::get('/users/create', 'UsersController@create');
Route::get('/users/{users}', 'UsersController@show');

Route::post('/users', 'UsersController@store');
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

