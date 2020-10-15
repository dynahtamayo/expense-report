@extends('layouts.master')

@section('content')

<div class="container">
	
	<a href="/expense-items/{{ $expense_item->id }}/edit" class="btn waves-effect waves-light green">Edit User<i class="material-icons right">edit</i></a><br><br>

	<form action="/users/{{ $users->id }}" method="POST">

		@csrf
		@method('DELETE')
		<button  class="btn waves-effect waves-light red"type="submit" name="action">DELETE
				<i class="material-icons right">delete</i>
			</button>

	</form>
	
	<h4>ID =  {{ $users->id }}</h4>
	<h4>First Name =  {{ $users->first_name }} </h4>
	<h4>Last Name =  {{ $users->last_name }}</h4>
	<h4>Phone = {{ $users->phone }}</h4>
	<h4>Email =  {{ $users->email }}</h4>
	<h4>Department ID =  {{ $users->department_id }}</h4>
	
	

</div>
@endsection