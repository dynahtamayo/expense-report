@extends('layouts.master')

@section('content')

<div class="container">
	
	<a href="/expense-items/{{ $expense_item->id }}/edit" class="btn waves-effect waves-light green">Edit Asset<i class="material-icons right">edit</i></a><br><br>

	<form action="/assets/{{$asset->id}}" method="POST">
		@csrf
		@method('DELETE')
		<button  class="btn waves-effect waves-light red"type="submit" name="action">DELETE
				<i class="material-icons right">delete</i>
			</button>

	</form>


	<h4>ID={{$asset->id }}</h2>
	<h4>Description={{$asset->description}}</h2>
		
	
</body>
</html> 