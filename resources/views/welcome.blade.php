@extends('layouts.login')

@section('content')
    <div class="content">
                    
         <h1 class="center">Expense Report</h1>
          <div class="center">
              <h3>
                  <a href="{{ url('/login') }}">Login</a>
              </h3>
              <h3>
                  <a href="{{ url('/register') }}">Register</a>
              </h3>
          </div>

    </div>

@endsection