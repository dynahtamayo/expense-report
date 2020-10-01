<!DOCTYPE html>

<body>
	<form action="/login" method="POST">
		@include('layouts.errors')
		@csrf
		<input required placeholder="Email Address" id="email" type="email" name="email" >
		<label for="email"></label>

		<input required placeholder="Password" id="password" type="password" name="password" >
		<label for="password"></label>

		<button type="submit">Submit</button>
		
	</form>
</body>
</html>