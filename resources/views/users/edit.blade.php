@extends('layouts.master')

@section('content')

	<div class="row">
			<div class="col s12">
				<div class="container">
	
	<h3>Update User</h3>
		<form action="/users/{{ $users->id }}" method="POST">
			@method("PUT")
			@include('layouts.errors')
			@csrf

			<div class="row">
			    <div class="input-field col s6">      
			<input placeholder="First Name" id="first_name" type="string" name="first_name" value='{{ $users->first_name }}'>
			<label for="first_name"></label>
		</div>
			 <div class="input-field col s6">   
			<input placeholder="Last Name" id="last_name" type="string" name="last_name" value='{{ $users->last_name }}'>
			<label for="last_name"></label>
		</div>
	</div>
			<div class="row">
			    <div class="input-field col s6">              
			<input placeholder="Phone" id="phone" type="string" name="phone" value='{{ $users->phone }}'>
			<label for="phone"></label>
		</div>
			<div class="input-field col s6">  
			<input placeholder="Email" id="email" type="email" name="email" value='{{ $users->email }}'>
			<label for="email"></label>
		</div>
	</div>
			<div class="row">
			    <div class="input-field col s6">  
			<input placeholder="Password" id="password" type="password" name="password" value='{{ $users->password }}'>
			<label for="password"></label>
		</div>
 			<div class="input-field col s6"> 
			<input placeholder="DepartmentID" id="department_id" type="number" name="department_id" value='{{ $users->department_id }}'>
			<label for="department_id"></label>
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