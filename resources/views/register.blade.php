@extends('layouts.login')

@section('content')

		<div class="container" style="width: 25%">

	  <h1 class="center">Register </h1>		
	    <form action="/register" method="POST">
		@include('layouts.errors')
		@csrf
		<div class="row">
			<div class="input-field col s12">	      
				<input placeholder="First Name" id="first_name" type="text" name="first_name" >
				<label for="first_name"></label>
			</div>
		</div>
			 
		<div class="row">
			<div class="input-field col s12">	 
				<input placeholder="Last Name" id="last_name" type="text" name="last_name" >
				<label for="last_name"></label>
			</div>
		</div>
		
		<div class="row">
			<div class="input-field col s12">
				<input placeholder="Phone" id="phone" type="text" name="phone" >
				<label for="phone"></label>
			</div>
		</div>
		

		<div class="row">
			<div class="input-field col s12">
				<input placeholder="Email" id="email" type="email" name="email" >
				<label for="email"></label>
			</div>
		</div>
		
		<div class="row">
			<div class="input-field col s12">
				<input placeholder="Password" id="password" type="password" name="password" >
				<label for="password"></label>
			</div>
		</div>
		
		<div class="row">
			<div class="input-field col s12">
				<input placeholder="DepartmentID" id="department_id" type="number" name="department_id" >
				<label for="department_id"></label>
			</div>
		</div>

		<div class="center">
			<button  class="btn waves-effect waves-light green"type="submit" name="action">Submit
			<i class="material-icons right">send</i>
			</button>
			<br>
			<br>
		</div>
	</form>			

</div>
@endsection
