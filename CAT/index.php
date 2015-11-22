<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<link rel="stylesheet" href="../css/style.css" type="text/css" media="screen"/>
<link rel="stylesheet" href="../css/orbit-1.2.3.css" type="text/css" media="screen"/>
<script type="text/javascript" src="../js/jquery-1.9.0.min.js"></script>
<script type="text/javascript" src="../js/jquery.orbit-1.2.3.min.js"></script>	
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<script type="text/javascript">
				$(window).load(function() {$('#featured').orbit();});
				$(window).load(function() {$('#featured').orbit({bullets: true, animationSpeed: 10});});
</script>

<title><?php include_once("../name.php"); ?> - Inici</title>
</head>
<body>
<div id="web">
 <?php
 
		include_once("../top-cancer-mama.php");
 include_once("header.php");
 ?> 
 <div class="container">
  <div id="featured"> 
	<a href=""><img src="img/Banner1.jpg"/></a>
	<a href=""><img src="img/Banner2.jpg"/></a>
	<a href=""><img src="img/Banner3.jpg"/></a>
	<a href=""><img src="img/Banner4.jpg"/></a>
	<a href=""><img src="img/Banner5.jpg"/></a>
	</div>
 </div>
 
 <div id="bottom_menu">
  <a href="aboutus.php"><img class="button" src="img/buttons/QuiSom.png" style="margin-top:71px;margin-right:98px;margin-left:-319px;"></a>
  <a href="product.php"><img class="button" src="img/buttons/Producte.png"style="margin-right:98px;"></a>
  <a href="brands.php"><img class="button" src="img/buttons/Marques.png" style="margin-right:98px;"></a>
  <a href="whereweare.php"><img class="button" src="img/buttons/OnSom.png" style="margin-right:-319px;"></a>
 </div>
 <?php
 include_once("footer.php");
 ?> 
</div>
</body>
</html>
