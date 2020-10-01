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

Route::get('/expense-items', 'ExpenseItemsController@index');


Route::get('/expense-items/create', 'ExpenseItemsController@create'); // FIRST
Route::get('/expense-items/{expense_item}', 'ExpenseItemsController@show');

Route::post('/expense-items', 'ExpenseItemsController@store'); // SECOND

Route::get('/expense-items/{expense_item}/edit', 'ExpenseItemsController@edit'); //THIRD

Route::put('/expense-items/{expense_item}', 'ExpenseItemsController@update'); // FOURTH

Route::delete('/expense-items/{expense_item}', 'ExpenseItemsController@destroy'); // FIFTH


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