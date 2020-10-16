@extends('layouts.master')

@section('content')

<div class="container">

	<div class="row">
			<div class="col s12">
	<h5>Update Budget Items</h5>
				<form action="/budget-items/{{ $budget_item->id }}" method="POST">
					@method("PUT")
					@include('layouts.errors')
					@csrf

					<div class="row">
			        		<div class="input-field col s6">
			          <input placeholder="ID" id="id" type="number" name="id" value='{{ $budget-items->id }}'>
			          <label for="id"></label>
			      </div>
			      	<div class="input-field col s6">
			          <input placeholder="Year" id="year" type="date" name="year" value='{{ $budget-items->year }}'>
			          <label for="year"></label>
			      </div>
			  </div>
			  		<div class="row">
			  			<div class="input-field col s6">
			          <input placeholder="Amount" id="amount" type="number" step="0.01" name="amount" value='{{ $budget-items->amount }}'>
			          <label for="amount"></label>
			      </div>

			      	<div class="input-field col s6">
			          <input placeholder="Total Expenses" id="total_expenses" type="number" step="0.01" name="total_expenses" value='{{ $budget-items->total_expenses }}'>
			          <label for="total_expenses"></label>
			      </div>
			      </div>

			      <div class="row">
			      	<div class="input-field col s6">
			          <input placeholder="Department ID" id="department_id" type="number" name="department_id" value='{{ $budget-items->department_id }}'>
			          <label for="department_id"></label>
			      </div>

			      <div class="input-field col s6">
			          <input placeholder="Category ID" id="category_id" type="number" name="category_id" value='{{ $budget-items->category_id }}'>
			          <label for="category_id"></label>
			      </div>
			      </div>

			           <div class="center">
							<button  class="btn waves-effect waves-light green"type="submit" name="action">Submit
							<i class="material-icons right">send</i>
							</button>
						</div>	
			    </form>
			</div>
	</div>
	
	
</div>

@endsection