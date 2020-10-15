@extends('layouts.master')

@section('content')

<div class="container">

	<a href="/expense-items/{{ $expense_item->id }}/edit" class="btn waves-effect waves-light green">Edit Budget Item<i class="material-icons right">edit</i></a><br><br>
	
	<form action="/budget-items/{{ $budget_item->id }}" method="POST">

		@csrf
		@method('DELETE')
		<button  class="btn waves-effect waves-light red"type="submit" name="action">DELETE
				<i class="material-icons right">delete</i>
			</button>

	</form>

	<h4>ID =  {{ $budget-item->id }}</h2>
	<h4>Year =  {{ $budget-item->year }} </h1>
	<h4>Amount =  {{ $budget-item->amount }}</h2>
	<h4>Total Expenses =  {{ $budget-item->total_expenses }}</h2>
	<h4>Departement ID = {{ $budget-item->department_id }}</h2>
	<h4>Category ID =  {{ $budget-item->category_id }}</h2>
	

	

</div>
@endsection