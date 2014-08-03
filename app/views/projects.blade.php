@extends('layout.default')

@section('content')
	
		<h1>Manage Projects</h1>
		<li><a href='/projects'><span>View Projects</span></li></a>	
	
@if (Auth::check())
	<li><a href='/projects/create'><span>Add Projects</span></li></a>
@endif

@if (Auth::guest())

<li><a href='/login'><span>Login</span></a> for more options</li>

@endif		
	
@stop
