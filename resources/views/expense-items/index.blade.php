@extends('layouts.master')

@section('content')

<div class="container">

	<h1>Expense Items</h1>

	<a href="/expense-items/create" class="btn waves-effect waves-light green">Create Expense Item<i class="material-icons right">create</i></a> <br> <br>

		<table class="striped">
				<thead>				
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
				</thead>
				<tbody>
					@foreach($expense_items as $expense_item)
						<tr>
							<td><a href="/expense-items/{{ $expense_item -> id }}">{{ $expense_item->id }}</a></td>
							<td>{{ $expense_item->description }}</td>
							<td>{{ $expense_item->date }}</td>
							<td>{{ $expense_item->amount }}</td>
							<td>{{ $expense_item->approved_amount }}</td>
							<td>{{ $expense_item->submit_user_id }}</td>
							<td>{{ $expense_item->expenses_id }}</td>
							<td>{{ $expense_item->expenses_category_id }}</td>
							<td>{{ $expense_item->asset_id }}</td>
						</tr>
					@endforeach
				</tbody>
		</table>
		<br>
	</div>

@endsection