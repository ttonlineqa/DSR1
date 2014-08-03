<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Online DSR</title>
	<link href="http://www.favicon.co.uk/ico/3495.png" rel="shortcut icon">
	<link href="http://fonts.googleapis.com/css?family=Raleway:600" rel="stylesheet" type="text/css">
<style>
body {
			margin:5px;
			font-family:'Lato', sans-serif;
			text-align:center;
			color: #999;
		}



ul.sonarmenu{ /* Inspired by http://tympanus.net/codrops/2013/08/06/creative-link-effects */
	list-style: inherit;
}

ul.sonarmenu li{
 display: inline;
}

ul.sonarmenu a{
	position: relative;
	display: inline-block;
	color: black; /* font color */
	text-decoration: none;
	margin: 0px 25px;
	text-transform: uppercase;
	font-family: 'Raleway', sans-serif; /* font style (uses Google fonts) */
	font-size: 18px; /* font size */
	letter-spacing: 1px; /* letter spacing */
	border-bottom: 2px solid transparent; /* Bottom border style */
}

ul.sonarmenu a:hover, ul.sonarmenu a:focus{
	outline: none;
	border-bottom: 1px solid #E68E97; /* Bottom border style on hover */
}

ul.sonarmenu a::before, ul.sonarmenu a:after{ /* shared style for two circles */
	position: absolute;
	top: 50%;
	left: 50%;
	width: 70px; /* width of outer circle */
	height: 70px; /* height of outer circle */
	border: 12px double rgba(2,2,2,0.1); /* style and color of circles */
	border-radius: 80%;
	content: '';
	opacity: 0;
	-webkit-transform: translateX(-50%) translateY(-50%) scale(0.2);
	-moz-transform: translateX(-50%) translateY(-50%) scale(0.2);
	transform: translateX(-50%) translateY(-50%) scale(0.2);
}

ul.sonarmenu a:after{ /* inner circle specific CSS */
	width: 60px; /* width of inner circle */
	height: 60px; /* width of inner circle */
	border-width: 6px;
	-webkit-transform: translateX(-50%) translateY(-50%) scale(0.8);
	-moz-transform: translateX(-50%) translateY(-50%) scale(0.8);
	transform: translateX(-50%) translateY(-50%) scale(0.8);
}

ul.sonarmenu a:hover:before, ul.sonarmenu a:hover:after{
	-webkit-animation: pulsate 1.2s infinite; /* animation name duration loop etc */
	-moz-animation: pulsate 1.2s infinite;
	-ms-animation: pulsate 1.2s infinite;
	animation: pulsate 1.2s infinite;
}

/* ### Keyframe animations ### */

@-webkit-keyframes pulsate{

  50%{
	opacity: 5;
	-webkit-transform: translateX(-50%) translateY(-50%) scale(1);
  }

	100%{
	opacity: 0.3;
	-webkit-transform: translateX(-50%) translateY(-50%) scale(0.5);
	}

}

@-moz-keyframes pulsate{

  30%{
	opacity: 1;
	-moz-transform: translateX(-50%) translateY(-50%) scale(1);
  }

	100%{
	opacity: 0.3;
	-moz-transform: translateX(-50%) translateY(-50%) scale(0.5);
	}

}

@-ms-keyframes pulsate{

  30%{
	opacity: 1;
	-ms-transform: translateX(-50%) translateY(-50%) scale(1);
  }

	100%{
	opacity: 1;
	-ms-transform: translateX(-50%) translateY(-50%) scale(0.5);
	}

}

@-keyframes pulsate{

  30%{
	opacity: 1;
	transform: translateX(-50%) translateY(-50%) scale(1);
  }

	100%{
	opacity: 0.3;
	transform: translateX(-50%) translateY(-50%) scale(0.5);
	}

}

</style>


</head>
<body>
	
	<h1>Online QA DSR</h1>
	<div class= 'sonarmenu'>
	<ul class="sonarmenu">
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







	
	</div>
	
	@if (Auth::guest())
	<li>Plesae login for more options</li>
	@endif
	

	<a href='file://C:/Users/jobin.john/AppData/Roaming/Lotus/Sametime/.metadata/.plugins/com.ibm.collaboration.realtime.palettes/palettes/Smileys/IMAGE$122F641D4E385016=" alt="Laravel PHP Framework'></a>
</body>
</html>
