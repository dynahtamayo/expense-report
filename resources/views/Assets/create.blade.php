<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1><a href="/">HOME</a></h1>
	<h1><a href="/">ASSET</a></h1>

	<h5>Create Asset</h5>
				<form action="/assets" method="POST">
					  @include ('layouts.errors')
					  @csrf


			          <input placeholder="Description" id="description" type="text" name="description">
			          <label for="description"></label>

			          <button  type="submit" name="action">Submit
			          	<i>send</i>
			          </button>

			    </form>
</body>
</html> 