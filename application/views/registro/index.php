<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Verkami</title>

		<!--Bootstrap css and JQuery-->
	<link rel="stylesheet" media="screen" type="text/css" href="<?= base_url()?>/bootstrap/css/bootstrap.css">
	<script src="/bootstrap/js/jquery.js"></script>
	<script src="/bootstrap/js/bootstrap.min.js"></script>

<style type="text/css">
	ul {background-color: #008bb9;}
	#menu-top {background-color: #008bb9; color: #FFFFFF; font-size: 21px;}
	#menu-down {background-color: #008bb9; color: #FFFFFF; font-size: 15px;}
	#footer-somos {font-size: 14px;}
	#menu-selected{background-color: #f8f8f8; color: #008bb9; font-size: 21px;}
	h4 {color: #B3B3B3;}
	#bordesolido{border: 1px solid #008bb9;}
</style>
	
</head>

<header class="container">
	<h1></h1>
</header>

<body>
	<nav class="container navbar navbar-default nabar-static-top">
	<ul class="nav nav-pills">
		<li><a class="navbar-brand" href="/verkami/index.php"><img height="32" width="90" src="/verkami/assets/images/logo.png"></a></li>
		<li><a id="menu-top"> | </a></li>
		<li><a id="menu-top" href="#"> Proyectos </a></li>
		<li><a id="menu-top" href="#"> Qué es Verkami</a></li>
		<li><a id="menu-top" href="#"> FAQ</a></li>
		<li><a id="menu-top"> | </a></li>
		<li><a id="menu-top" href="#"> Empieza tu proyecto</a></li>
	</ul>
</nav>

<main class="container">
	<h1 align="center"></h1><br>

	<div class="container" id="bordesolido" style"height: 250px; width: 290px; float: left; background-color: #333333;">
		<img align="right" src="/verkami/assets/images/carrusel_home/imagen1.png" alt="">
		<h2 align="center" >Registrate en Verkami</h2><br>
		<div  align="center">
			<h3 align="center">Nombre de Usuario (*) &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="usuario" id="usuario" tabindex="1" ></h3>
			<h3 align="center">E-Mail (*) &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="mail" id="mail" tabindex="2"></h3>
			<h3 align="center">Contraseña (*) &nbsp;&nbsp;<input type="text" name="contraseña" id"contraseña" tabindex="3"></h3>
			<button type="button" align="right" class="btn btn-primary" id="botonregistrarse" onClick="alert('Registrar en BD')">Registrarse</button>
		</div> <br>
	</div>
	<br>
</main>


<footer class="container navbar-default">
	<div class="col-sm-2" align="center" >
		<a href="index.php"><img height="62" width="170" src="/verkami/assets/images/logo.png"></a>
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
				<a id="menu-down" href="/verkami/index.php"> Verkami</a><br>
				<a id="menu-down" href="#"> Proyectos</a><br>
				<a id="menu-down" href="#"> FAQ</a><br>
				<a id="menu-down" href="#"> Nuevo Proyecto    </a><br>
			</ul>
		</nav>
	</div>
</footer>

</body>
</html>



