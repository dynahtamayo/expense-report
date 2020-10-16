@extends('layouts.master')

@section('content')

	<div class="row">
			<div class="col s12">
				<div class="container">

			<h5>Update Category</h5>
				<form action="/category/{{ $Categories->id }}" method="POST">
					@method("PUT")
					@include('layouts.errors')
					@csrf

					<div class="row">
			        		<div class="input-field col s6">
			       
			          <input placeholder="Name" id="name" type="Name" name="name" value='{{ $Categories->name }}'>
			          <label for="name"></label>
			      </div>
			      <div class="input-field col s6">
			          <input placeholder="Money" id="money" type="number" step="0.01" name="money" value='{{ $Categories->money }}'>
			          <label for="money"></label>
			      </div>
			  </div>
			        			      
			          <div class="center">
							<button  class="btn waves-effect waves-light green"type="submit" name="action">Submit
							<i class="material-icons right">send</i>
							</button>
						</div>	
			         
			    </form>
				</div>
		</div>

	
	</div>

@endsection