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
				$(window).load(function() {$('#featured').orbit({bullets: true});});
</script>
<script src="javascripts/jquery.js" type="text/javascript"></script>

<title>Ambròs Joiers - Producte</title>
</head>
<body>
<div id="web">
 <?php
	include_once("top-cancer-mama.php");
 include_once("header.php");
 ?> 
 
 
<div id="products">
			<div id="button_product">
				<a href="product/wedding.php"><img class="button2" src="../img/buttons/product-alliance.jpg"/>
				<div class="button_product" style="top:86px; left:287px;">
					<span class="title_left">ALIANZAS</span><br />
					<span class="subtitle_left">De oro, plata...</span>
				</div>
			</div>
			<div id="button_product">
				<a href="product/rings.php"><img class="button2" src="../img/buttons/product-rings.jpg"/>
				<div class="button_product" style="top:86px; left:570px; text-align:left;">
					<span class="title_right">ANILLOS</span><br />
					<span class="subtitle_right">Solitario, <i>rosetones...</i><br />De oro, plata, acero...</span>
				</div>
			</div>
			<div id="button_product">
				<a href="product/necklaces.php"><img class="button2" src="../img/buttons/product-necklaces.jpg"/>
				<div class="button_product" style="top:86px; left:247px;">
					<span class="title_left">COLGANTES</span><br />
					<span class="subtitle_left">Colgantes de oro, plata<br />con perlas...</span>
				</div>
			</div>
			<div id="button_product">
				<a href="product/bracelets.php"><img class="button2" src="../img/buttons/product-bracelets.jpg"/>
				<div class="button_product" style="top:86px; left:570px; text-align:left;">
					<span class="title_right" >PULSERAS</span><br />
					<span class="subtitle_right">Pulseras, brazaletes ...<br />De oro, plata, macramé...</span>
				</div>
			</div>
			<div id="button_product">
				<a href="product/earrings.php"><img class="button2" src="../img/buttons/product-earrings.jpg"/>
				<div class="button_product" style="top:86px; left:247px;">
					<span class="title_left">PENDIENTES</span><br />
					<span class="subtitle_left">De perlas, clásicos<br />modernas, criollas...</span>
				</div>
			</div>
			<div id="button_product">
				<a href="product/baby.php"><img class="button2" src="../img/buttons/product-baby.jpg"/>
				<div class="button_product" style="top:86px; left:570px; text-align:left;">
					<span class="title_right">BEBÉ</span><br />
					<span class="subtitle_right">Pendientes, braceletes...</span>
				</div>
			</div>
		</div>
 <?php
 include_once("footer.php");
 ?> 
</div>
</body>
</html>
