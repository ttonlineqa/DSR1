@extends ('layout.default')


@section ('content')


<P>Name: {{$user->name}}</P>
<P>Email: {{$user->email}}</P>
<ul>Username: {{$user->username}}</ul>
<P>User ID: {{$user->id}}</P>
<P>Created on date: {{$user->created_at}}</P>
<P>Last Updated on date: {{$user->updated_at}}</P>
<P>{{$url}}</P>

@foreach($activities as $activitie)


<li>{{$activitie->name}} did a {{$activitie->type}} at {{$activitie->created_at}} </li>

@endforeach

@stop
