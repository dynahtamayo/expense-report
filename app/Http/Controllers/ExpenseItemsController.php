<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ExpenseItem;

class ExpenseItemsController extends Controller
{
    public function index()
    {
    	$expense_items = ExpenseItem::all();
    	return view('expense-items.index', compact('expense_items'));
    }

    public function show(ExpenseItem $expense_item)
    {
    	return view('expense-items.show', compact('expense_item'));
    }

    public function create()
    {
    	return view('expense-items.create');
    }

    public function store()
    {
    	// Create new event
    	$expense_item = new ExpenseItem;
    	$expense_item->description = request()->description;
    	$expense_item->date = request()->date;
    	$expense_item->amount = request()->amount;
    	$expense_item->approved_amount = request()->approved_amount;
    	$expense_item->submit_user_id = request()->submit_user_id;
    	$expense_item->expenses_id = request()->expenses_id;
    	$expense_item->expenses_category_id = request()->expenses_category_id;
    	$expense_item->asset_id = request()->asset_id;
    	$expense_item->save();


    	// Redirect
    	return redirect('/');
    }

    public function edit(ExpenseItem $expense_item)
    {
    	return view('expense-items.edit', compact('expense_item'));
    }

    public function update(ExpenseItem $expense_item)
    {
    	
    	$expense_item->description = request()->description;
    	$expense_item->date = request()->date;
    	$expense_item->amount = request()->amount;
    	$expense_item->approved_amount = request()->approved_amount;
    	$expense_item->submit_user_id = request()->submit_user_id;
    	$expense_item->expenses_id = request()->expenses_id;
    	$expense_item->expenses_category_id = request()->expenses_category_id;
    	$expense_item->asset_id = request()->asset_id;
    	$expense_item->save();


    	
    	return redirect('/expense-items/'.$expense_item->id);
    }	

    public function destroy(ExpenseItem $expense_item)
    {
    	$expense_item->delete();
    	return redirect('/');
    }

}
