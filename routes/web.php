<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', 'AuthController@index')->name('login');
Route::post('/login', 'AuthController@login');
Route::middleware(['auth'])->group(function(){
	Route::get('/dashboard', 'DashboardController@index');
	Route::get('/logout', 'AuthController@logout');
});
Route::get('/register', 'AuthController@register');
Route::post('/register', 'AuthController@store');

//users table
Route::get('/users', 'UsersController@index');
Route::get('/users/create', 'UsersController@create');
Route::get('/users/{users}', 'UsersController@show');
Route::post('/users', 'UsersController@store');
Route::get('/users/{users}/edit', 'UsersController@edit');
Route::put('/users/{users}', 'UsersController@update');
Route::delete('/users/{users}', 'UsersController@destroy');

//departments table
Route::get('/departments', 'DepartmentsController@index');
Route::get('/departments/create', 'DepartmentsController@create');
Route::get('/departments/{departments}', 'DepartmentsController@show');
Route::post('/departments', 'DepartmentsController@store');
Route::get('/departments/{departments}/edit', 'DepartmentsController@edit');
Route::put('/departments/{departments}', 'DepartmentsController@update');
Route::delete('/departments/{departments}', 'DepartmentsController@destroy');

//budget items table
Route::get('/budget-items', 'BudgetItemsController@index');
Route::get('/budget-items/create', 'BudgetItemsController@create'); // FIRST
Route::get('/budget-items/{budget_item}', 'BudgetItemsController@show');
Route::post('/budget-items', 'BudgetItemsController@store'); // SECOND
Route::get('/budget-items/{budget_item}/edit', 'BudgetItemsController@edit'); //THIRD
Route::put('/budget-items/{budget_item}', 'BudgetItemsController@update'); // FOURTH
Route::delete('/budget-items/{budget_item}', 'BudgetItemsController@destroy'); // FIFTH

//categories table
Route::get('/category', 'CategoryController@index');
Route::get('/category/create', 'CategoryController@create');  
Route::get('/category/{Categories}', 'CategoryController@show');
Route::post('/category', 'CategoryController@store'); 
Route::get('/category/{Categories}/edit', 'CategoryController@edit');  
Route::put('/category/{Categories}', 'CategoryController@update'); 
Route::delete('/category/{Categories}', 'CategoryController@destroy'); 

//assets table
Route::get('/assets', 'AssetsController@index');
Route::get('/assets/create', 'AssetsController@create'); 
Route::get('/assets/{asset}', 'AssetsController@show');
Route::post('/assets','AssetsController@store'); 
Route::get('/assets/{asset}/edit','AssetsController@edit'); 
Route::put('/assets/{asset}','AssetsController@update'); 
Route::delete('/assets/{asset}','AssetsController@destroy'); 

//expenseitems table
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

//expenses table
Route::get('/expenses', 'ExpensesController@index');
Route::get('/expenses/create', 'ExpensesController@create'); 
Route::get('/expenses/{expense}', 'ExpensesController@show');
Route::post('/expenses','ExpensesController@store'); 
Route::get('/expenses/{expense}/edit','ExpensesController@edit'); 
Route::put('/expenses/{expense}','ExpensesController@update'); 
Route::delete('/expenses/{expense}','ExpensesController@destroy'); 