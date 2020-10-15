@extends('layouts.master')

@section('content')

<div class="container">

    <h1 class="center">Expense Report</h1>

    	<br>
    	<br>
		<h3 class="center">
			Welcome {{ auth()->user()->first_name }}
		</h3>

        
    </div>

@endsection

