<!DOCTYPE html>
<html>
<head>
	<title>Bluedit</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="icon" href="logo.png">
	  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link rel="stylesheet" type="text/css" href="/css/styles.css">
</head>
<body>
	<header>
		<div class="row">
				<div class="col s12">
					<div class="container mid">

				<h5>Update</h5>
						<form action="/expense-items/{{ $expense_item->id }}" method="POST">
							@method("PUT")
							@include('layouts.errors')
							@csrf

							<div class="row">
				        		<div class="input-field col s6">	
									<input placeholder="Description" id="description" type="text" name="description" value='{{ $expense_item->description }}' required>
									<label for="description">Description</label>
								</div>
							</div>

							<div class="">
								<button  class="btn waves-effect waves-light green"type="submit" name="action">Submit
								<i class="material-icons right">send</i>
								</button>
							</div>			      
														         
					    </form>

					</div>
			</div>

		</div>

	</header>

	<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="/js/materialize.js"></script>
  <script src="/js/init.js"></script>
</body>
</html>