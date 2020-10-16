@extends('layouts.master')

@section('content')

<div class="container">
	<div class="row">
			<div class="col s12">
				<h5>Create Asset</h5>
				<form action="/assets" method="POST">
					  @include ('layouts.errors')
					  @csrf
					  <div class="row">
			        		<div class="input-field col s6">
			          <input placeholder="Description" id="description" type="text" name="description">
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