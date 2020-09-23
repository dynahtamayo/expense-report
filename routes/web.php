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
	
