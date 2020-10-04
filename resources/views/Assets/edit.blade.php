<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1><a href="/">HOME</a></h1>
	<h1><a href="/assets">ASSET</a></h1>

	<h5>Update Assets</h5>
				<form action="/assets/{{$asset->id}}" method="POST">
					  @method("PUT")
					  @include ('layouts.errors')
					  @csrf


			          <input placeholder="Description" id="description" type="text" name="description" value='{{$asset->description}}'>
			          <input placeholder="Description" id="description" type="text" name="description" value='{{$asset->description}}' required>
			          <label for="description"></label>

			          <button  type="submit" name="action">Submit
			          	<i>send</i>
			          </button>

			    </form>
</body>
</html> 