@extends('layouts.master')

@section('content')

	<div class="row">
			<div class="col s12">
				<div class="container">

	<h5>Update Assets</h5>
				<form action="/assets/{{ $assets->id }}" method="POST">
					  @method("PUT")
					  @include ('layouts.errors')
					  @csrf

					  <div class="row">
			        		<div class="input-field col s6">
			          <input placeholder="Description" id="description" type="text" name="description" value='{{$asset->description}}'>
			          <input placeholder="Description" id="description" type="text" name="description" value='{{$asset->description}}' required>
			          <label for="description"></label>
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