<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'ExpensesController@index');
Route::get('/expenses/create', 'ExpensesController@create'); 
Route::get('/expenses/{expense}', 'ExpensesController@show');

Route::post('/expenses','ExpensesController@store'); 

Route::get('/expenses/{expense}/edit','ExpensesController@edit'); 

Route::put('/expenses/{expense}','ExpensesController@update'); 

Route::delete('/expenses/{expense}','ExpensesController@destroy'); 
