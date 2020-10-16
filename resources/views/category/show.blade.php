@extends('layouts.master')

@section('content')

<div class="container">
	<a href="/category/{{ $Categories->id }}/edit" class="btn waves-effect waves-light green">Edit Category<i class="material-icons right">edit</i></a><br><br>

	<form action="/category/{{ $Categories->id }}" method="POST">

		@csrf
		@method('DELETE')
		<button  class="btn waves-effect waves-light red"type="submit" name="action">DELETE
				<i class="material-icons right">delete</i>
			</button>

	</form>
	
	<h4>ID =  {{ $Categories->id }}</h2>
	<h4>Name =  {{ $Categories->name }}</h2>
	<h4>Money =  {{ $Categories->money }}</h2>
	
	

</div>
@endsection