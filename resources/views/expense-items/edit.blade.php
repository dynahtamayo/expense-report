@extends('layouts.master')

@section('content')

	<div class="row">
			<div class="col s12">
				<div class="container">

			<h5>Update Expense Item</h5>
					<form action="/expense-items/{{ $expense_item->id }}" method="POST">
						@method("PUT")
						@include('layouts.errors')
						@csrf

						<div class="row">
			        		<div class="input-field col s6">	
								<input placeholder="Description" id="description" type="text" name="description" value='{{ $expense_item->description }}' required>
								<label for="description"></label>
							</div>

							<div class="input-field col s6">	
								<input placeholder="Date" id="date" type="Date" name="date" value='{{ $expense_item->date }}' required>
								<label for="date"></label>
							</div>
						</div>

						<div class="row">
			        		<div class="input-field col s6">
								<input placeholder="Amount" id="amount" type="number" step="0.01" name="amount" value='{{ $expense_item->amount }}' required>
								<label for="amount"></label>
							</div>

							<div class="input-field col s6">	
								<input placeholder="Approved Amount" id="approved_amount" type="number" step="0.01" name="approved_amount" value='{{ $expense_item->approved_amount }}' required>
								<label for="approved_amount"></label>
							</div>
						</div>

						<div class="row">
			        		<div class="input-field col s6">
								<input placeholder="Submit User ID" id="submit_user_id" type="number" name="submit_user_id" value='{{ $expense_item->submit_user_id }}' required>
								<label for="submit_user_id"></label>
							</div>

							<div class="input-field col s6">	
								<input placeholder="Expenses ID" id="expenses_id" type="number" name="expenses_id" value='{{ $expense_item->expenses_id }}' required>
								<label for="expenses_id"></label>
							</div>
						</div>

						<div class="row">
			        		<div class="input-field col s6">
								<input placeholder="Expenses Category ID" id="expenses_category_id" type="number" name="expenses_category_id" value='{{ $expense_item->expenses_category_id }}' required>
								<label for="expenses_category_id"></label>
							</div>

							<div class="input-field col s6">	
								<input placeholder="Asset ID" id="asset_id" type="number" name="asset_id" value='{{ $expense_item->asset_id }}' required>
								<label for="asset_id"></label>
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