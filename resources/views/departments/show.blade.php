@extends('layouts.master')

@section('content')

<div class="container">

	<a href="/departments/{{ $departments->id }}/edit" class="btn waves-effect waves-light green">Edit Department<i class="material-icons right">edit</i></a><br><br>

	<form action="/departments/{{ $departments->id }}" method="POST">

		@csrf
		@method('DELETE')
		<button  class="btn waves-effect waves-light red"type="submit" name="action">DELETE
				<i class="material-icons right">delete</i>
			</button>

	</form>

	
	<h4>ID =  {{ $departments->id }}</h4>
	<h4>Name =  {{ $departments->name }} </h4>
	<h4>Parent Department ID =  {{ $departments->parent_department_id }}</h4>
	
	
</div>
@endsection