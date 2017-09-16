<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>Adopte-ma-tomate</title>
	<link href="https://fonts.googleapis.com/css?family=Cabin" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">
	<link rel='stylesheet' href='fullcalendar/fullcalendar.css' />
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/form.css">
	<link rel="stylesheet" type="text/css" href="css/acceuil.css">
</head>
<body>

	<nav id="navbar-example2" class="navbar navbar-light">
		<a class="navbar-brand" href="#">
			<img src="res/tomate/tomate-114-117469.png" width="75" height="75" alt="logo"/>
		</a>
		<ul class="nav nav-pills">
			<li class="nav-item">
				<h2>ADOPTE-MA-TOMATE</h2>
			</li>
		</ul>
	</nav>

	@yield('content')

	<footer class="footer-basic-centered">
		AGRICULTURE / ALIMENTATION &copy; 2017
	</footer>

	<script type="text/javascript" src="js/jquery/dist/jquery.js"></script>
</body>
</html>