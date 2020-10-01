<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BudgetItem;

class BudgetItemsController extends Controller
{
    public function index()
    {
    	$budget_items = budgetItem::all();
    	return view('budget-items.index', compact('budget_items'));
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
        $validated_fields = request() ->validate([
        
        
        'id' => 'required',
        'year' => 'required',
        'amount' => 'required',
        'total_expenses' => 'required',
        'department_id'=> 'required',
        'category_id' => 'required',
        

    ]);
        $budget_item =budget_item::create($validated_fields);
                return redirect('/');
    }


    public function edit(budgetItem $budget_item)
    {
    	return view('budget-items.edit', compact('budget_item'));
    }

    public function update(budgetItem $budget_item)
    {
        $validated_fields = request() ->validate([
        
        
        'id' => 'required',
        'year' => 'required',
        'amount' => 'required',
        'total_expenses' => 'required',
        'department_id'=> 'required',
        'category_id' => 'required',
        

    ]);
        
        $budget_item = budget_item::put($validated_fields);
        return redirect('/budget-items/'.$budget_item->id);
        
    }   

    public function destroy(budgetItem $budget_item)
    {
    	$budget_items->delete();
    	return redirect('/');
    }

}