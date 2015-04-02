<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Distributor Management System</title>

	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">

	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="container">
				<div class="navbar-header" >
					<a class="navbar-brand" href="/">
						<img src="/img/header/logo.png" />
					</a>
				</div>
				
				<ul class="nav navbar-nav navbar-right">
					@if (Auth::guest())
							<li><a href="{{ url('/auth/login') }}"><?php echo Lang::get('header.right.menu.login');?></a></li>
							<li><a href="{{ url('/auth/register') }}"><?php echo Lang::get('header.right.menu.register');?></a></li>	
					@endif
				</ul>
			</div>
		</div>	
	</nav>

	@yield('content')

	<footer class="footer">
		<div class="container">
			@2015 Distributor Management System
		</div>
	</footer>
	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>
