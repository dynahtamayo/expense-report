<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BudgetItem;

class BudgetItemsController extends Controller
{
    public function index()
    {
    	$budget_items = BudgetItem::all();
    	return view('Budget-items.index', compact('budget_items'));
    }

    public function show(BudgetItem $budget_item)
    {
    	return view('budget-items.show', compact('budget_item'));
    }

    public function create()
    {
    	return view('budget-items.create');
    }

    public function store()
    {
    	// Create new event
    	$budget_item = new BudgetItem;
    	$budget_item->id = request()->id;
    	$budget_item->year = request()->year;
    	$budget_item->amount = request()->amount;
    	$budget_item->total_expenses = request()->total_expenses;
    	$budget_item->department_id = request()->department_id;
		$budget_item->category_id = request()->category_id;
    	$budget_item->save();


    	// Redirect
    	return redirect('/');
    }

    public function edit(BudgetItems $budget_item)
    {
    	return view('budget-items.edit', compact('budget_item'));
    }

    public function update(BudgetItems $budget_item)
    {

    	$budget_item = new BudgetItem;
    	$budget_item->id = request()->id;
    	$budget_item->year = request()->year;
    	$budget_item->amount = request()->amount;
    	$budget_item->total_expenses = request()->total_expenses;
    	$budget_item->department_id = request()->department_id;
		$budget_item->category_id = request()->category_id;
    	$budget_item->save();


    	return redirect('/budget-items/'.$budget_item->id);
    }	

    public function destroy(budgetItems $budget_item)
    {
    	$budget_item->delete();
    	return redirect('/');
    }

}