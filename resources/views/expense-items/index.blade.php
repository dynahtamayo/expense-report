<!DOCTYPE html>
<html>
<head>
	<title></title>

	<style>

</style>

</head>
<body>
	<h1>HOME</h1>

	<a href="/expense-items/create">Create Expense Item</a> <br> <br>

		<table border="1">
			
				<tr>
					<th>ID</th>
					<th>Description</th>
					<th>Date</th>
					<th>Amount</th>
					<th>Approved Amount</th>
					<th>Submit User ID</th>
					<th>Expenses ID</th>
					<th>Expenses Category ID</th>
					<th>Asset ID</th>
				</tr>
			
			
				<tr>
					<td>
						@foreach($expense_items as $expense_item)
							<a href="/expense-items/{{ $expense_item -> id }}">{{ $expense_item->id }}</a><br>		@endforeach
					</td>
					<td>
						@foreach($expense_items as $expense_item)							
							{{ $expense_item->description }} <br>					
						@endforeach
					</td>
					<td>
						@foreach($expense_items as $expense_item)							
							{{ $expense_item->date }} <br>					
						@endforeach
					</td>
					<td>
						@foreach($expense_items as $expense_item)							
							{{ $expense_item->amount }} <br>					
						@endforeach
					</td>
					<td>
						@foreach($expense_items as $expense_item)							
							{{ $expense_item->approved_amount }} <br>					
						@endforeach
					</td>
					<td>
						@foreach($expense_items as $expense_item)							
							{{ $expense_item->submit_user_id }} <br>					
						@endforeach
					</td>
					<td>
						@foreach($expense_items as $expense_item)							
							{{ $expense_item->expenses_id }} <br>					
						@endforeach
					</td>
					<td>
						@foreach($expense_items as $expense_item)							
							{{ $expense_item->expenses_category_id }} <br>					
						@endforeach
					</td>
					<td>
						@foreach($expense_items as $expense_item)							
							{{ $expense_item->asset_id }} <br>					
						@endforeach
					</td>

				</tr>
			
		</table>

</body>
</html>