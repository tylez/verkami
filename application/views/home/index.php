<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Verkami</title>

	<!--Bootstrap css-->
	<link rel="stylesheet" media="screen" type="text/css" href="<?= base_url()?>/bootstrap/css/bootstrap.css">
	<script src="bootstrap/js/jquery.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>

<style type="text/css">
	ul {background-color: #008bb9;}
	#menu-top {background-color: #008bb9; color: #FFFFFF; font-size: 21px;}
	#menu-down {background-color: #008bb9; color: #FFFFFF; font-size: 15px;}
	#footer-somos {font-size: 14px;}
	#menu-selected{background-color: #f8f8f8; color: #008bb9; font-size: 21px;}
	h4 {color: #B3B3B3;}
</style>
	
<script>
    $(document).ready(function(){
        $('.myCarousel').carousel({
            interval: 3000
        });
    });
</script>

</head>

<header class="container">
	<h1></h1>
</header>

<body>
	<nav class="container navbar navbar-default nabar-static-top">
	<ul class="nav nav-pills">
		<li><a class="navbar-brand" href="index.php"><img height="32" width="90" src="assets/images/logo.png"></a></li>
		<li><a id="menu-top"> | </a></li>
		<li><a id="menu-top" href="index.php"> Proyectos</a></li>
		<li><a id="menu-top" href="#"> Qué es Verkami</a></li>
		<li><a id="menu-top" href="#"> FAQ</a></li>
		<li><a id="menu-top"> | </a></li>
		<li><a id="menu-top" href="#"> Empieza tu proyecto</a></li>
		<li><a id="menu-top" href="#"> Mi Perfil</a></li>
		<li><a id="menu-top" href="#"> Iniciar Sesión/Cerrar</a></li>
	</ul>
</nav>

<main class="container">

<div id="myCarousel" class="carousel slide">
	<ol class="carousel-indicators">
	  <li data-target="#myCarousel" data-slide-to="0" class=""></li>
	  <li data-target="#myCarousel" data-slide-to="1" class=""></li>
	  <li data-target="#myCarousel" data-slide-to="2" class=""></li>
	</ol>
	
	<div class="carousel-inner">
	  <div class="item active left">
	    <img src="assets/images/carrusel_home/imagen1.png" alt="">
	    <div class="carousel-caption">
	      <h4>First Thumbnail label</h4>
	  	</div>
	  </div>
	  
		<div class="item next left">
	    <img src="assets/images/carrusel_home/imagen1.png" alt="">
	    <div class="carousel-caption">
	      <h4>First Thumbnail label</h4>
	  	</div>
	  </div>

	  <div class="item next left">
	    <img src="assets/images/carrusel_home/imagen2.jpg" alt="">
	    <div class="carousel-caption">
	      <h4>First Thumbnail label</h4>
	  	</div>
	  </div>

	  <div class="item next left">
	    <img src="assets/images/carrusel_home/imagen3.jpg" alt="">
	    <div class="carousel-caption">
	      <h4>First Thumbnail label</h4>
	  	</div>
	  </div>
	</div>
	
	<a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
	<a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
</div>
<br>


</main>


<footer class="container navbar-default">
	<div class="col-sm-2" align="center" >
		<a href="index.php"><img height="62" width="170" src="assets/images/logo.png"></a>
		<p>2016 VERKAMI & CO.</p>
	</div>
	<div class="col-sm-8">
		<h4>Qué es verkami</h4>
			<p id="footer-somos">Verkami es un punto de encuentro entre gente con ideas, proyectos interesantes y 
				 usuarios con ganas de ayudar a llevarlos a cabo.</p>
	</div>
	<div class="col-sm-2">
		<nav class="navbar-right" >
			<ul>
				<a id="menu-down" href="index.php"> Verkami</a><br>
				<a id="menu-down" href="#"> Proyectos</a><br>
				<a id="menu-down" href="#"> FAQ</a><br>
				<a id="menu-down" href="#"> Nuevo Proyecto    </a><br>
			</ul>
		</nav>
	</div>
</footer>

</body>
</html>



