<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">

  <title>Sign up to edit DSR</title>

    <style>
@import url(http://fonts.googleapis.com/css?family=Exo:100,200,400);
@import url(http://fonts.googleapis.com/css?family=Source+Sans+Pro:700,400,300);

body{
	margin: 0;
	padding: 0;
	background: #fff;

	color: #fff;
	font-family: Arial;
	font-size: 18px;
}

.body{
	position: absolute;
	top: -20px;
	left: -20px;
	right: -40px;
	bottom: -40px;
	width: auto;
	height: auto;
	background-image: url(http://www.hdwallpapersfullhd.net/wp-content/uploads/2014/04/Sparrows-Birds-HD-Wallpapers-Wallpaper-HD.jpg);
	background-size: cover;
	-webkit-filter: blur(5px);
	z-index: 0;
}

.grad{
	position: absolute;
	top: -20px;
	left: -20px;
	right: -40px;
	bottom: -40px;
	width: auto;
	height: auto;
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(0,0,0,0)), color-stop(100%,rgba(0,0,0,0.65))); /* Chrome,Safari4+ */
	z-index: 1;
	opacity: 0.7;
}

.header{
	position: absolute;
	top: calc(50% - 35px);
	left: calc(25% - 255px);
	z-index: 2;
}

.header div{
	float: left;
	color: #fff;
	font-family: 'Exo', sans-serif;
	font-size: 50px;
	font-weight: 500;
}

.header div span{
	color: #5379fa !important;
}

.login{

	
	position: absolute;
	top: calc(50% - 75px);
	left: calc(60% - 60px);
	height: 150px;
	width: 350px;
	padding: 10px;
	z-index: 2;
}

.login div{
	float: left;
	color: #fff;
	font-family: 'Exo', sans-serif;
	font-size: 20px;
	font-weight: 200;
}

.login input[type=text]{
	width: 250px;
	height: 30px;
	background: transparent;
	border: 1px solid rgba(255,255,255,0.6);
	border-radius: 2px;
	color: #fff;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 4px;
}

.login input[type=password]{
	width: 250px;
	height: 30px;
	background: transparent;
	border: 1px solid rgba(255,255,255,0.6);
	border-radius: 2px;
	color: #fff;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 4px;
	margin-top: 10px;
}

.loginbutton{
	width: 260px;
	height: 35px;
	background: #fff;
	border: 1px solid #fff;
	cursor: pointer;
	border-radius: 2px;
	color: #a18d6c;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 6px;
	margin-top: 10px;
}
.new
{
	position: absolute;
	top: calc(90% - 75px);
	left: calc(60% - 60px);
	height: 150px;
	width: 350px;
	padding: 10px;
	z-index: 2;
}

.new div{
	float: left;
	color: #fff;
	font-family: 'Calibri', sans-serif;
	font-size: 20px;
	font-weight: 200;	
}

.loginbutton:hover{
	opacity: 0.8;
}

.loginbutton:active{
	opacity: 0.6;
}

.login input[type=text]:focus{
	outline: none;
	border: 1px solid rgba(255,255,255,0.9);
}

.login input[type=password]:focus{
	outline: none;
	border: 1px solid rgba(255,255,255,0.9);
}

.loginbutton:focus{
	outline: none;
}

::-webkit-input-placeholder{
   color: rgba(255,255,255,0.6);
}

::-moz-input-placeholder{
   color: rgba(255,255,255,0.6);
}
</style>

    <script src="js/prefixfree.min.js"></script>

</head>

<body>

  <div class="body"></div>
		<div class="grad"></div>
		<div class="header">
			<div>Online QA</div>
				<p><div><span>Daily Status Report</span></div></p>
		</div>
		<br>
		{{Form::open(['route'=> 'sessions.store'])}}
		<div class="login">
				
<p>
<div>

{{Form::label('username', 'Username ')}}
{{Form::input('text','username')}}
{{$errors->first ('username')}}
</div>
</p>
<p></p>
<p>
<div>

{{Form::label('password', 'Password ')}}
{{Form::password('password')}}
{{$errors->first ('password')}}
</div>
</p>

<p>
<div><a>{{Form::Submit('Login')}}</a></div>

{{Form::close()}}
</p>

<p></p>
</div>
<div class= "new">
<p>Dont have account ? <a href='/users/create'>Create a new one</a></p>

<p><a href='/status'>View Dashboard</a></p>

</div>

  <script src='http://codepen.io/assets/libs/fullpage/jquery.js'></script>

</body>

</html>


