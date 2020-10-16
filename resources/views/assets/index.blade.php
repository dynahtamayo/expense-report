@extends('layouts.master')

@section('content')

<div class="container">
	<h1>Assets</h1>
	<a href="/assets/create" class="btn waves-effect waves-light green">Create Asset<i class="material-icons right">create</i></a> <br> <br>

		<table class="striped">

				<tr>
					<th>ID</th>
					<th>Description</th>
				</tr>

				<tr>
					<td>
						@foreach($assets as $asset)
							<a href="/assets/{{$asset->id}}">{{$asset->id}}</a><br>
						@endforeach
					</td>
					<td>
						@foreach($assets as $asset)							
							{{$asset->description}} <br>					
						@endforeach
					</td>
				</tr>

		</table> 

			</div>

@endsection