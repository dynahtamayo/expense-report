@extends('layouts.master')

@section('content')

	<div class="row">
			<div class="col s12">
				<div class="container">
	
	<h5>Update Expenses</h5>
				<form action="/expenses/{{$expense->id}}" method="POST">
					  @method("PUT")
					  @csrf
					  @include ('errors')

			      <div class="row">
			        		<div class="input-field col s6">
			          <input placeholder="Description" id="description" type="text" name="description" value='{{$expense->description}}'>
			          <label for="description"></label>
			      </div>
			       <div class="input-field col s6">
			          <input placeholder="Date Submitted" id="date_submitted" type="Date" name="date_submitted" value='{{$expense->date_submitted}}'>
			          <label for="date_submitted"></label>
			      </div>
			  </div>

			  		<div class="row">
			        		<div class="input-field col s6">
			          <input placeholder="Date Status" id="date_status" type="Date" name="date_status" value='{{$expense->date_status}}'>
			          <label for="date_status"></label>
			      </div>
			      	<div class="input-field col s6">
			          <input placeholder="Status" id="status" type="text" name="status" value='{{ $expense->status}}'>
			          <label for="status"></label>
			      </div>
			  </div>

			  		<div class="row">
			        		<div class="input-field col s6">
			          <input placeholder="Submit User ID" id="submit_user_id" type="number" name="submit_user_id" value='{{$expense->submit_user_id}}'>
			          <label for="submit_user_id"></label>
			      </div>
			      	<div class="input-field col s6">
			          <input placeholder="Approval User ID" id="approval_user_id" type="text" name="approval_user_id" value='{{$expense->approval_user_id}}'>
			          <label for="approval_user_id"></label>
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