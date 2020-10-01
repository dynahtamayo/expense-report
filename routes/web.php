<?php

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
