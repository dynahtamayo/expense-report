<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1><a href="/">HOME</a></h1>

	<h5>Update Assets</h5>
				<form action="/assets/{{$asset->id}}" method="POST">
					  @method("PUT")
					  @csrf

			          <input placeholder="Description" id="description" type="text" name="description" value='{{$asset->description}}'>
			          <label for="description"></label>

			          <button  type="submit" name="action">Submit
			          	<i>send</i>
			          </button>

			    </form>
</body>
</html> 