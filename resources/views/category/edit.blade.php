<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1><a href="/">HOME</a></h1>
	
	<h5>Update Category</h5>
				<form action="/category/{{ $Categories->id }}" method="POST">
					@method("PUT")
					@csrf
			       
			          <input placeholder="Name" id="name" type="Name" name="name" value='{{ $Categories->name }}'>
			          <label for="name"></label>

			          <input placeholder="Money" id="money" type="number" step="0.01" name="money" value='{{ $Categories->money }}'>
			          <label for="money"></label>
			        			      
			          <button  type="submit" name="action">Submit
			          	<i>send</i>
			          </button>
			         
			    </form>
</body>
</html>