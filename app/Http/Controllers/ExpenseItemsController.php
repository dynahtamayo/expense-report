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
        $validated_fields = request()->validate([
            'description' => 'required',
            // 'date' => 'required',
            // 'amount' => 'required',
            // 'approved_amount' => 'required',
            // 'submit_user_id' => 'required|unique:expense_items',
            // 'expenses_id' => 'required|unique:expense_items',
            // 'expenses_category_id' => 'required|unique:expense_items',
            // 'asset_id' => 'required|unique:expense_items'

        ]);

        $expense_item = ExpenseItem::create($validated_fields);

    	return redirect('/expense-items');
    }

    public function edit(ExpenseItem $expense_item)
    {
    	return view('expense-items.edit', compact('expense_item'));
    }

    public function update(ExpenseItem $expense_item)
    {

        $validated_fields = request()->validate([
            'description' => 'required',
            // 'date' => 'required',
            // 'amount' => 'required',
            // 'approved_amount' => 'required',
            // 'submit_user_id' => 'required',
            // 'expenses_id' => 'required',
            // 'expenses_category_id' => 'required',
            // 'asset_id' => 'required'           

        ]);

        $expense_item->update($validated_fields);
    	
    	return redirect('/expense-items/');
    }	

    public function destroy(ExpenseItem $expense_item)
    {
    	$expense_item->delete();
    	return redirect('/expense-items');
    }

}
