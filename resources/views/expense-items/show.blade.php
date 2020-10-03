@extends('layouts.master')

@section('content')

<div class="container">
	
	<a href="/expense-items/{{ $expense_item->id }}/edit" class="btn waves-effect waves-light green">Edit Expense Item<i class="material-icons right">edit</i></a><br><br>
	<form action="/expense-items/{{ $expense_item->id }}" method="POST">

		@csrf
		@method('DELETE')
		
			<button  class="btn waves-effect waves-light red"type="submit" name="action">DELETE
				<i class="material-icons right">delete</i>
			</button>
		

	</form>
	
	<h4>ID =  {{ $expense_item->id }}</h4>
	<h4>Description =  {{ $expense_item->description }} </h4>
	<h4>Date =  {{ $expense_item->date }}</h4>
	<h4>Amount =  {{ $expense_item->amount }}</h4>
	<h4>Approved Amount = {{ $expense_item->approved_amount }}</h4>
	<h4>Submit User ID =  {{ $expense_item->submit_user_id }}</h4>
	<h4>Expenses ID = {{ $expense_item->expenses_id }}</h4>
	<h4>Expenses Category ID = {{ $expense_item->expenses_category_id }}</h4>
	<h4>Asset ID = {{ $expense_item->asset_id }}</h4>
	
</div>
@endsection