@extends('layouts.master')

@section('content')

<div class="container">

	<div class="row">
			<div class="col s12">
				<h5>Create Budget Items</h5>
				<form action="/budget-items" method="POST">
					@include('layouts.errors')
					@csrf

					<div class="row">
		        		<div class="input-field col s6">
				          <input placeholder="Description" id="id" type="text" name="id">
				          <label for="id"></label>
			      		</div>

			      		<div class="input-field col s6">
				          <input placeholder="Year" id="date" type="date" name="year">
				          <label for="year"></label>
				      	</div>
				  	</div>

				  	<div class="row">
		        		<div class="input-field col s6">
				          <input placeholder="Amount" id="amount" type="number" step="0.01" name="amount">
				          <label for="amount"></label>
			      		</div>
			      		<div class="input-field col s6">
				          <input placeholder="Total Expenses" id="total_expenses" type="number" step="0.01" name="total_expenses">
				          <label for="total_expenses"></label>
					     </div>
					 </div>

					<div class="row">
						<div class="input-field col s6">
				          <input placeholder="Department ID" id="department_id" type="number" name="department_id">
				          <label for="department_id"></label>
				      </div>
				      <div class="input-field col s6">
				          <input placeholder="Category ID" id="category_id" type="number" name="expenses_id">
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