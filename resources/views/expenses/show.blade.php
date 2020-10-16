@extends('layouts.master')

@section('content')

<div class="container">
	
	<a href="/expenses/{{$expense->id}}/edit" class="btn waves-effect waves-light green">Edit Expense<i class="material-icons right">edit</i></a><br><br>

	<form action="/expenses/{{$expense->id}}" method="POST">
		@csrf
		@method('DELETE')
		<button  class="btn waves-effect waves-light red"type="submit" name="action">DELETE
				<i class="material-icons right">delete</i>
			</button>

	</form>
	
	<h4>ID={{$expense->id }}</h2>
	<h4>Description={{$expense->description}}</h2>
	<h4>Date Submitted={{$expense->date_submitted}}</h2>
	<h4>Date Status={{$expense->amount}}</h2>
	<h4>Status={{$expense->status}}</h2>
	<h4>Submit User ID={{$expense->submit_user_id}}</h2>
	<h4>Approval User ID={{$expense->approval_user_id}}</h2>	
	

</div>
@endsection