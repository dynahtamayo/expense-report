<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1><a href="/departments">DEPARTMENTS</a></h1>
	
	<h3>Create Department</h3>
	
	<form action="/departments" method="POST">
		@include('layouts.errors')
		@csrf
			      
		<input placeholder="Name" id="name" type="string" name="name">
		<label for="name"></label>
			 
		<input placeholder="ParentDepartmentID" id="parent_department_id" type="number" name="parent_department_id">
		<label for="parent_department_id"></label>

		<button  type="submit" name="action">Submit
		<i>send</i>
		</button>
			         
		</form>			

</body>
</html>