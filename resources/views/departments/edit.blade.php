@extends('layouts.master')

@section('content')

	<div class="row">
			<div class="col s12">
				<div class="container">
	
	<h3>Update Department</h3>
		<form action="/departments/{{ $departments->id }}" method="POST">
			@method("PUT")
			@include('layouts.errors')
			@csrf

			<div class="row">
			   <div class="input-field col s6">      
			<input placeholder="Name" id="name" type="string" name="name" value='{{ $departments->name }}'>
			<label for="name"></label>
		</div>
			 <div class="input-field col s6">    
			<input placeholder="Parent Department ID" id="parent_department_id" type="number" name="parent_department_id" value='{{ $departments->parent_department_id }}'>
			<label for="parent_department_id"></label>
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