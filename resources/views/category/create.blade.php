<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1><a href="/category">CATEGORY</a></h1>
	
			<h5>Create Category</h5>
				<form action="/category" method="POST">
					@include('layouts.errors')
					@csrf

			          <input placeholder="Name" id="name" type="name" name="name">
			          <label for="name"></label>

			          <input placeholder="Money" id="money" type="number" step="0.01" name="money">
			          <label for="money"></label>
			      
			          <button  type="submit" name="action">Submit
			          	<i>send</i>
			          </button>
			         
			    </form>
</body>
</html>