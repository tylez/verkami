<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Verkami</title>

	<!--Bootstrap css-->
	<link rel="stylesheet" type="text/css" href="<?= base_url()?>/bootstrap/css/bootstrap.css">

<style type="text/css">
	ul {background-color: #008bb9;}
	#menu-top {background-color: #008bb9; color: #FFFFFF; font-size: 21px;}
	#menu-down {background-color: #008bb9; color: #FFFFFF; font-size: 15px;}
	#footer-somos {font-size: 14px;}
	#menu-selected{background-color: #f8f8f8; color: #008bb9; font-size: 21px;}
	h4 {color: #B3B3B3;}
</style>
	
</head>

<header class="container">
	<h1></h1>
</header>

<body>
	<nav class="container navbar navbar-default nabar-static-top">
	<ul class="nav nav-pills">
		<li><a class="navbar-brand" href="/verkami/index.php"><img height="32" width="90" src="assets/images/logo.png"></a></li>
		<li><a id="menu-top"> | </a></li>
		<li><a id="menu-top" href="#"> Proyectos</a></li>
		<li><a id="menu-top" href="#"> Qué es Verkami</a></li>
		<li><a id="menu-top" href="#"> FAQ</a></li>
		<li><a id="menu-top"> | </a></li>
		<li><a id="menu-top" href="#"> Empieza tu proyecto</a></li>
		<li><a id="menu-top" href="#"> Mi Perfil</a></li>
		<li><a id="menu-top" href="#"> Iniciar Sesión/Cerrar</a></li>
	</ul>
</nav>

<main class="container">
	<h1 align="center" >Haciendo Verkami</h1><br>
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



