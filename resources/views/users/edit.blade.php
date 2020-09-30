<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1><a href="/">HOME</a></h1>
	
	<h3>Update User</h3>
		<form action="/users/{{ $users->id }}" method="POST">
			@method("PUT")
			@csrf
			      
			<input placeholder="First Name" id="first_name" type="string" name="first_name" value='{{ $users->first_name }}'>
			<label for="first_name"></label>
			 
			<input placeholder="Last Name" id="last_name" type="string" name="last_name" value='{{ $users->last_name }}'>
			<label for="last_name"></label>
			             
			<input placeholder="Phone" id="phone" type="string" name="phone" value='{{ $users->phone }}'>
			<label for="phone"></label>

			<input placeholder="Email" id="email" type="string" name="email" value='{{ $users->email }}'>
			<label for="email"></label>
			
			<input placeholder="Password" id="email" type="password" name="password" value='{{ $users->password }}'>
			<label for="password"></label>

			<input placeholder="DepartmentID" id="department_id" type="number" name="department_id" value='{{ $users->department_id }}'>
			<label for="department_id"></label>

			<button  type="submit" name="action">Submit <i>send</i>
			</button>
			         
		</form>			
</body>
</html>