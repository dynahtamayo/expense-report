<!DOCTYPE html>
<html>
<head>
	<title></title>

	<style>
</style>

</head>
<body>
	<h1>HOME</h1>

	<a href="/budget-items/create">Create Budget Items</a> <br> <br>

		<table border="1">

				<tr>
					<th>ID</th>
					<th>Year</th>
					<th>Amount</th>
					<th>Total Expenses</th>
					<th>Department ID</th>
					<th>Categroy ID</th>
				</tr>


				<tr>
					<td>
						@foreach($budget_items as $budget_item)
							<a href="/budget_items/{{ $budget_item -> id }}">{{ $budget_item->id }}</a><br>		@endforeach
					</td>
					<td>
						@foreach($budget_items as $budget_item)							
							{{ $budget_item->year }} <br>					
						@endforeach
					</td>
					<td>
						@foreach($budget_items as $budget_item)							
							{{ $budget_item->amount }} <br>					
						@endforeach
					</td>
					<td>
						@foreach($budget_items as $budget_item)							
							{{ $budget_item->total_expenses }} <br>					
						@endforeach
					</td>
					<td>
						@foreach($budget_items as $budget_item)							
							{{ $budget_item->department_id }} <br>					
						@endforeach
					</td>
					<td>
						@foreach($budget_items as $budget_item)							
							{{ $budget_item->category_id }} <br>					
						@endforeach
					</td>
				</tr>

		</table>

</body>
</html> 