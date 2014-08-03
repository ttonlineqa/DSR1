@extends ('layout.default')


@section ('content')


<title>Sign up to edit DSR</title>
<h1>Create a New Login</h1>

{{Form::open(['route'=> 'users.store'])}}

<div>

{{Form::label('name', 'Name : ')}}
{{Form::input('text','name')}}
{{$errors->first ('name')}}

</div>
<p></p>
<div>

{{Form::label('email', 'TalkTalk Email ID : ')}}
{{Form::email('email')}}
{{$errors->first ('email')}}
</div>

<p></p>
<div>

{{Form::label('username', 'Username : ')}}
{{Form::input('text','username')}}
{{$errors->first ('username')}}
</div>

<p></p>
<div>

{{Form::label('password', 'Password : ')}}
{{Form::password('password')}}
{{$errors->first ('password')}}
</div>

<p></p>
<div>

{{Form::Submit('Create')}}

</div>
{{Form::close()}}

@stop