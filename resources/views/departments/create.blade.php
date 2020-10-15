@extends('layouts.master')

@section('content')

<div class="container">

	<div class="row">
			<div class="col s12">
	
	<h3>Create Department</h3>
	
	<form action="/departments" method="POST">
		@include('layouts.errors')
		@csrf
		<div class="row">
			<div class="input-field col s6">
		<input placeholder="Name" id="name" type="string" name="name">
		<label for="name"></label>
		</div>
			<div class="input-field col s6">
		<input placeholder="ParentDepartmentID" id="parent_department_id" type="number" name="parent_department_id">
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