<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">

  <title>Log-in - Online DSR</title>

  <!--<link rel='stylesheet' href='http://codepen.io/assets/libs/fullpage/jquery-ui.css'>-->

    <link rel="stylesheet" href="css/style2.css" media="screen" type="text/css" />
	
</head>

<body>
<div class="header">
			<div>Online QA</div>
				<p><div><span>Daily Status Report</span></div></p>
		</div>
		<br>
		{{Form::open(['route'=> 'sessions.store'])}}
		
  <div class="login-card">
    <h1>Log-in</h1><br>
  <form>
	<p>
<div>

{{Form::label('username', 'Username ')}}
{{Form::input('text','username')}}
<div class = "error">
{{$errors->first ('username')}}
</div>
</div>
</p>
	

<p>
<div>

{{Form::label('password', 'Password ')}}
{{Form::password('password')}}
<div class = "error">
{{$errors->first ('password')}}
</div>
</div>
</p>	
	
	<div id="hold"></div>
	

<p>
<div class = "login" ><a>{{Form::Submit('Login')}}</a></div>

{{Form::close()}}
</p>	
	
	
	
  </form>

  <div class="login-help">
 <p>Dont have account ? <a href='/users/create'>Create a new one</a></p>

<p><a href='/status'>View Dashboard</a></p>
  </div>

<!-- <div id="error"><img src="https://dl.dropboxusercontent.com/u/23299152/Delete-icon.png" /> Your caps-lock is on.</div> -->



</body>

</html>



