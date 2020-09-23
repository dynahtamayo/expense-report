@extends('layouts.master')

@section('content')

<div class="container">

	<div class="row">
			<div class="col s12">
				<h5>Create Expense Item</h5>
				<form action="/expense-items" method="POST">
					@csrf
			      		
			      		<div class="row">
			        		<div class="input-field col s6">
								<input placeholder="Description" id="description" type="text" name="description">
								<label for="description"></label>
							</div>
							<div class="input-field col s6">
								<input placeholder="Date" id="date" type="Date" name="date">
								<label for="date"></label>
							</div>
						</div>

						<div class="row">
			        		<div class="input-field col s6">
								<input placeholder="Amount" id="amount" type="number" step="0.01" name="amount">
								<label for="amount"></label>
							</div>
							<div class="input-field col s6">
								<input placeholder="Approved Amount" id="approved_amount" type="number" step="0.01" name="approved_amount">
								<label for="approved_amount"></label>
							</div>
						</div>

						<div class="row">
			        		<div class="input-field col s6">
								<input placeholder="Submit User ID" id="submit_user_id" type="number" name="submit_user_id">
								<label for="submit_user_id"></label>
							</div>
							<div class="input-field col s6">
								<input placeholder="Expenses ID" id="expenses_id" type="number" name="expenses_id">
								<label for="expenses_id"></label>
							</div>
						</div>

						<div class="row">
			        		<div class="input-field col s6">
								<input placeholder="Expenses Category ID" id="expenses_category_id" type="number" name="expenses_category_id">
								<label for="expenses_category_id"></label>
							</div>
							<div class="input-field col s6">
								<input placeholder="Asset ID" id="asset_id" type="number" name="asset_id">
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