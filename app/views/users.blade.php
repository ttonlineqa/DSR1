@extends('layout.default')

@section('content')
	


		<p><uli><a href='/users/create'><span>Sign Up</span></uli></a></p>
		@if (Auth::check())
		<uli><a href='/users'><span>View all Users</span></uli></a>
		@endif
		@if (Auth::guest())

<li><a href='/login'><span>Login</span></a> for more options</li>

@endif	
		


@stop