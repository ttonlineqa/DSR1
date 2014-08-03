<html>
	<head>
		<meta charset = "utf-8">
		@yield ('header')

<link href='http://fonts.googleapis.com/css?family=Raleway:600' rel='stylesheet' type='text/css'>
<link href = "/css/bootstrap.css" rel="stylesheet">
<link href = "/css/styles.css" rel="stylesheet">
<link href = "/css/bootstrap.css" rel="stylesheet">
<link href = "/css/styles.css" rel="stylesheet">
<title>Test Page</title>
<style>
{
			margin:5px;
			font-family:'Lato', sans-serif;
			text-align:center;
			color: #999;
		}

</style>
</head>
	<body>
		<body>

			<div class="navbar navbar-inverse navbar-static-top">
<div class= "container">
	<div class= 'sonarmenu'>
	<ul class="sonarmenu">
	<a href = "/" class = "brand">OnlineQA DSR</a>
	</div>

<div class= 'sonarmenu'>
		<ul class = "nav navbar-nav right">
			<ul class="sonarmenu">
	<li><a href='/status'>Dashboard</a><li>	
	<li><a href='/manageprojects'><span>Projects</span></li></a>
	<li><a href='/manageusers'><span>Users</span></li></a>
	@if (Auth::check())

	<li><a href='/admin'><span>Administration</span></li></a>

	@endif

	<li><a href='/help'><span>Help</span></li></a>
		@if (Auth::check())
	<li><a href='/logout'><span>Logout</span></li></a>
	@endif
	</ul>
</ul>

</div>
</div>
</div>
</div>
		<div class='wireframemenu'>
		@yield ('content')
	</div>
	</body>

</html>