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
		<div class="logo">
				<img src="logo.png">
			</div>
		<div class="title">
			<h1>Bluedit</h1>
		</div>
		<div class="desc">
			<p>Bluedit is a simple social news aggregation website.</p>
			<p>Anyone can share their thoughts here and anyone can see it from time to time.</p>
			<p>Be creative, be imaginative, share your thoughts about life, do it now.</p>
		</div>

		<div class="button">
			<a href="/expense-items/create" class="btn waves-effect waves-light cyan">Create Post<i class="material-icons right">create</i></a> <br> <br>
		</div>

		<table class="tabled">
				<thead>				
					<tr>
						<th>ID</th>
						<th>Description</th>
					</tr>
				</thead>
				<tbody>
					@foreach($expense_items as $expense_item)
						<tr>
							<td><a href="/expense-items/{{ $expense_item -> id }}">{{ $expense_item->id }}</a></td>
							<td>{{ $expense_item->description }}</td>
						</tr>
					@endforeach
				</tbody>
		</table>
		<br>

	</header>

	<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="/js/materialize.js"></script>
  <script src="/js/init.js"></script>
</body>
</html>