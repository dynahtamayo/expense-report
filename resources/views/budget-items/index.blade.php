@extends('layouts.master')

@section('content')

<div class="container">
	<h1>Budget Items</h1>

	<a href="/budget-items/create" class="btn waves-effect waves-light green">Create Budget Item<i class="material-icons right">create</i></a> <br> <br>

		<table class="striped">

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

</div>

@endsection