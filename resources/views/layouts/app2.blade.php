<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>Adopte-ma-tomate</title>
	<link href="https://fonts.googleapis.com/css?family=PT+Sans+Narrow" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">
	<link rel="icon" href="res/tomate/favicon.ico" />
	<link rel="stylesheet" href="fontawesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel='stylesheet' href='css/fullcalendar.min.css' />
	<link rel="stylesheet" type="text/css" href="css/form.css">
	<link rel="stylesheet" type="text/css" href="css/acceuil.css">
</head>
<body>

	<nav id="navbar-example2" class="navbar navbar-light">
		<a class="navbar-brand" href="/">
			<img  class="logo" src="res/tomate/tomate.png" width="75" height="75" alt="logo"/>
		</a>
		<ul class="nav nav-pills">
			<li class="nav-item">
				<h2>ADOPTE-MA-TOMATE</h2>
			</li>
		</ul>
	</nav>

	@yield('content')

	<footer class="footer-basic-centered">
		<a href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
		<a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
		<a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
	</footer>

	<script type="text/javascript" src="js/jquery/dist/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script src='js/moment.min.js'></script>
	<script src='js/fullcalendar.min.js'></script>
	<script src='js/index.js'></script>
</body>
</html>