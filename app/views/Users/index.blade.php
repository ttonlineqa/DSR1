@extends('layout.default')

@section('content')

@foreach ($users as $user)


<p><a href='https://signup.wordpress.com/signup/?ref=oauth2&oauth2_redirect=7fa03bfea309f8fc44e5be6d6989e710%40https%3A%2F%2Fpublic-api.wordpress.com%2Foauth2%2Fauthorize%2F%3Fclient_id%3D1854%26response_type%3Dcode%26blog_id%3D0%26state%3D3edb689eabde8d13d75b055f73a01215349abb1748c195b32ea53cdd51747542%26redirect_uri%3Dhttps%253A%252F%252Fen.gravatar.com%252Fconnect%252F%253Faction%253Drequest_access_token%26jetpack-code%26jetpack-user-id%3D0%26action%3Doauth2-login&wpcom_connect=1'>{{$user->image}}</a></p>

<p><uli>{{link_to ("/users/{$user->username}",$user->name)}}</uli></p>
<p></p>
@endforeach

@stop