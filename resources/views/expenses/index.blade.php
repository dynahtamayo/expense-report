<!DOCTYPE html>
<html>
<head>
	<title></title>

	<style>
</style>

</head>
<body>
	<h1>EXPENSE HOME</h1>

	<a href="/expenses/create">Create Expense</a> <br> <br>
		<table border="1">
			
				<tr>
					<th>ID</th>
					<th>Description</th>
					<th>Date Submitted</th>
					<th>Date Status</th>
					<th>Status</th>
					<th>Submit User ID</th>
					<th>Approval User ID</th>
				</tr>
			
				<tr>
					<td>
						@foreach($expenses as $expense)
							<a href="/expenses/{{$expense->id}}">{{$expense->id}}</a><br>
						@endforeach
					</td>
					<td>
						@foreach($expenses as $expense)							
							{{$expense->description}} <br>					
						@endforeach
					</td>
					<td>
						@foreach($expenses as $expense)							
							{{$expense->date_submitted}} <br>					
						@endforeach
					</td>
					<td>
						@foreach($expenses as $expense)							
							{{$expense->date_status}} <br>					
						@endforeach
					</td>
					<td>
						@foreach($expenses as $expense)							
							{{$expense->status}} <br>					
						@endforeach
					</td>
					<td>
						@foreach($expenses as $expense)							
							{{$expense->submit_user_id}} <br>					
						@endforeach
					</td>
					<td>
						@foreach($expenses as $expense)							
							{{$expense->approval_user_id}} <br>					
						@endforeach
					</td>

				</tr>
			
		</table>