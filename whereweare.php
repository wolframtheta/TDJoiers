<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen"/>
<link rel="stylesheet" href="css/orbit-1.2.3.css" type="text/css" media="screen"/>
<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
<script type="text/javascript" src="js/jquery.orbit-1.2.3.min.js"></script>	
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<script type="text/javascript">
				$(window).load(function() {$('#featured').orbit();});
				$(window).load(function() {$('#featured').orbit({bullets: true});});
</script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript">
			function initialize() {
				var latlng = new google.maps.LatLng(41.391942101685224,2.1567535400390625);
				var settings = {
					zoom: 15,
					center: latlng,
					mapTypeControl: false,
					navigationControl: true,
					navigationControlOptions: {style: google.maps.NavigationControlStyle.BIG},
					mapTypeId: google.maps.MapTypeId.ROADMAP};
				var map = new google.maps.Map(document.getElementById("map_canvas"), settings);
				
				var companyImage = new google.maps.MarkerImage('img/localitzadorMapa.png',
					new google.maps.Size(48,79),
					new google.maps.Point(0,0),
					new google.maps.Point(25,75)
				);

				var companyPos = new google.maps.LatLng(41.3923123461874, 2.164451479911804);

				var companyMarker = new google.maps.Marker({
					position: companyPos,
					map: map,
					icon: companyImage,
					zIndex: 3});
				
			}
		</script>
		
		
<script src="javascripts/jquery.js" type="text/javascript"></script>

<title><?php include_once("name.php"); ?> - On som</title>
</head>
<body onload="initialize()">
	<div id="web">
		<?php
			include_once("top-cancer-mama.php");
			include_once("header.php");
		?> 
		<div id="map_canvas" style="width:1024px; height:586px"></div>
		<div id="onsom">
			<img src="img/localitzador.png" style="margin-top:59px;margin-left:184px;"alt=""></img>
			<div id="textOnsom">
				<div class="titol">ENS TROBARÀS A</div>
				<p style="line-height:20px; font-family:lato; font-weight:400; margin-top:20px;">Temps i Disseny<br>
				<a href="http://www.bulevardrosa.com/#" style="color:#FF69B4;">BULEVARD ROSA</a>. Passeig de Gràcia 55<br>
				Núm, Botiga 59<br>
				08007 BARCELONA<br>
				93 215 82 03<br>
				info@tdjoiers.com<br></p>
				<a href="http://www.bulevardrosa.com/#"><img src="img/logoBule.png" alt=""style="margin-top:9px;"></img></a>
			</div>
		</div>
		<?php
			include_once("footer.php");
		?> 
	</div>
</body>
</html>
