<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1><a href="/users">USERS</a></h1>
	
	<h3>Create User</h3>
	
	<form action="/users" method="POST">
		@include('layouts.errors')
		@csrf
			      
		<input placeholder="First Name" id="first_name" type="string" name="first_name" >
		<label for="first_name"></label>
			 
		<input placeholder="Last Name" id="last_name" type="string" name="last_name" >
		<label for="last_name"></label>
		<br><br>
		<input placeholder="Phone" id="phone" type="string" name="phone" >
		<label for="phone"></label>
		<br><br>
		<input placeholder="Email" id="email" type="email" name="email" >
		<label for="email"></label>
		<br><br>
		<input placeholder="Password" id="password" type="password" name="password" >
		<label for="password"></label>
		<br><br>
		<input placeholder="DepartmentID" id="department_id" type="number" name="department_id" >
		<label for="department_id"></label>
		<br><br>
		<button  type="submit" name="action">Submit <i>send</i></button>
	</form>			

</body>
</html>