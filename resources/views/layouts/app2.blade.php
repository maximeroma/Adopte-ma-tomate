<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>Adopte-ma-tomate</title>
	<link href="https://fonts.googleapis.com/css?family=Cabin" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel='stylesheet' href='css/fullcalendar.min.css' />
	<link rel="stylesheet" type="text/css" href="css/form.css">
	<link rel="stylesheet" type="text/css" href="css/acceuil.css">
</head>
	<body>

		<nav class="navbar navbar-light">
			<a class="navbar-brand" href="/">
				<img src="res/tomate/tomate-114-117469.png" width="75" height="75" class="img" alt="logo"/>
				ADOPTE-MA-TOMATE
			</a>
		</nav>

		@yield('content')

	<script type="text/javascript" src="js/jquery/dist/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script src='js/moment.min.js'></script>
	<script src='js/fullcalendar.min.js'></script>
	<script src='js/index.js'></script>


	</body>
</html>