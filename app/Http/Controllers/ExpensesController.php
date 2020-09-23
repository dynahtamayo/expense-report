<?php

namespace App\Http\Controllers;

use App\Expense;
use Illuminate\Http\Request;


class ExpensesController extends Controller
{
 	    public function index()
	    {
	    	$expenses = Expense::all();
	    	return view('expenses.index',compact('expenses'));
	    }

	    public function show(Expense $expense)
	    {
	    	return view('expenses.show',compact('expense'));
	    }

	    public function create()
	    {
	    	return view('expenses.create');
	    }

	    public function store()
	    {
	    	$expense = new Expense;
	    	$expense->description = request()->description;
	    	$expense->date_submitted = request()->date_submitted;
	    	$expense->date_status = request()->date_status;
	    	$expense->status = request()->status;
	    	$expense->submit_user_id = request()->submit_user_id;
	    	$expense->approval_user_id = request()->approval_user_id;
	    	$expense->save();

	    	return redirect('/');
	    }

	    public function edit(Expense $expense)
	    {
	    	return view('expenses.edit', compact('expense'));
	    }

	    public function update(Expense $expense)
	    {
	    	
	    	$expense->description = request()->description;
	    	$expense->date_submitted = request()->date_submitted;
	    	$expense->date_status = request()->date_status;
	    	$expense->status = request()->status;
	    	$expense->submit_user_id = request()->submit_user_id;
	    	$expense->approval_user_id = request()->approval_user_id;
	    	$expense->save();
	    	
	    	return redirect('/expenses/'.$expense->id);
	    }	

	    public function destroy(Expense $expense)
	    {
	    	$expense->delete();
	    	return redirect('/');
	    }

}
