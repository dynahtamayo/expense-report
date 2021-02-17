@extends('layouts.master')

@section('content')

<div class="container">
	<h1>Expenses</h1>

	<a href="/expenses/create" class="btn waves-effect waves-light green">Create Expense<i class="material-icons right">create</i></a> <br> <br>
		<table class="striped">
			
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

			</div>

@endsection