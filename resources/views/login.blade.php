@extends('layouts.login')

@section('content')

	<div class="container" style="width: 25%">
		<h1 class="center">Login</h1>
		<form action="/login" method="POST">
			@include('layouts.errors')
			@csrf

			<div class="row">
				 <div class="input-field col s12">
					<input required placeholder="Email Address" id="email" type="email" name="email">
					<label for="email" ></label>
				</div>
			</div>

			<div class="row">
				 <div class="input-field col s12">
					<input required placeholder="Password" id="password" type="password" name="password" >
					<label for="password"></label>
				</div>
			</div>

			<div class="center">
				<button class="btn waves-effect waves-light green"type="submit" name="action">LOGIN</button>
				<br>
				<br>
			</div>			
		</form>

		<form action="/register" method="GET">
			<div class="center">
				<button class="btn waves-effect waves-light green"type="submit" name="action">REGISTER</button>
			</div>	
		</form>

	</div>

@endsection