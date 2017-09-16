<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0 , maximum-scale=1 , user-scalable=no"/>
  <meta charset="utf-8"/>
  <meta name="csrf-token" content="{{ csrf_token() }}"/>
  <title>{{ config('app.name') }}</title>
  <meta name="Robots" content="all"/>
  <link rel="stylesheet" href="css/leaflet.css">
</head>
<body>

  
    <div id="mapid">
      
    </div>
    






    <script type="text/javascript" src="js/jquery/dist/jquery.min.js" ></script>
    <!-- <script type="text/javascript" src="js/jquery/dist/jquery.min.js" ></script> -->
    <script type="text/javascript" src="js/leaflet.js"></script>

      <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
  </body>
  </html>
