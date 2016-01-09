<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Verkami</title>

	<!--Bootstrap css and JQuery-->
	<link rel="stylesheet" media="screen" type="text/css" href="<?= base_url()?>/bootstrap/css/bootstrap.css">
	<script src="bootstrap/js/jquery.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>

<style type="text/css">
	ul {background-color: #008bb9;}
	#menu-top {background-color: #008bb9; color: #FFFFFF; font-size: 21px;}
	#menu-down {background-color: #008bb9; color: #FFFFFF; font-size: 15px;}
	#footer-somos {font-size: 14px;}
	#menu-selected {background-color: #f8f8f8; color: #008bb9; font-size: 21px;}
	#menu-categorias {color: #008bb9; font-size: 20px;}
  #imput {color: #000000; font-size: 18px;}
  #bordesolido{border: 1px solid #008bb9;}
	h4 {color: #B3B3B3; font-size: 20px}
	h3 {color: #008bb9; font-size: 30px}
  h5 {color: #008bb9; font-size: 16px}
  
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
		<li><a id="menu-top" href="#"> Qué es Verkami </a></li>
		<li><a id="menu-top" href="#"> FAQ </a></li>
		<li><a id="menu-top"> | </a></li>
		<li><a id="menu-top" href="#"> Empieza tu proyecto </a></li>
		<li><a id="menu-top" class="btn" data-toggle="modal" data-target="#iniciarSesion"> Iniciar Sesión</a></li>
	</ul>
</nav>

<main class="container">
  <div class="container" id="bordesolido" style='height: 300px; width: 100%; float: left; background-color: #FFFFFF;'>
  <h3 align="center" >Búsqueda Avanzada</h3>
  <h4 align="left" >Que deseas buscar...</h4>
  <div  align="center" style='height: 150px; width: 50%; float: left; background-color: #FFFFFF;'>
    <h3 align="left"> Nombre &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input id="imput" style='height: 35px; width: 250px;' type="text"  name="usuario" id="usuario" tabindex="1" ></h3>
    <h3 align="left"> Categoria &nbsp;&nbsp;&nbsp;<input id="imput" style='height: 35px; width: 250px;' type="text"  name="usuario" id="usuario" tabindex="2" ></h3>
  </div> 

  <div  align="center" style='height: 150px; width: 50%; float: left; background-color: #FFFFFF;'>
    <h3 align="left"> Estado&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input id="imput" style='height: 35px; width: 250px;' type="text"  name="usuario" id="usuario" tabindex="3" ></h3>
    <h3 align="left"> Fecha Fin&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input id="imput" style='height: 35px; width: 250px;' type="text"  name="usuario" id="usuario" tabindex="4" ></h3>
  </div><br>
  <div class="container" style='height: 50px; width: 19%; float: right; background-color: #FFFFFF;'>
    <button type="button" class="btn">Buscar</button>
  </div>
</div>
  
<div class="container" style='height: 50px; width: 100%; float: right; background-color: #FFFFFF;'></div>  


<div class="container" id="bordesolido" style='height: 375px; width: 100%; float: left; background-color: #FFFFFF;'>
  <h4 align="left" >Resultados</h4>
  <div  align="center" style='height: 325px; width: 33%; float: left; background-color: #FFFFFF;'>
    <br>
    <a href="/verkami/index.php/proyectoPublico/"><img src="/verkami/assets/images/carrusel_home/imagen1.png" alt=""></a>
    <h3>Titulo</h3>
    <p>Descripción Descripción Descripción Descripción Descripción Descripción Descripción Descripción
       Descripción Descripción Descripción Descripción Descripción Descripción Descripción Descripción</p>
  </div> 

  <div align="center" style='height: 325px; width: 33%; float: left;background-color: #FFFFFF;'>
    <br>
    <a href="/verkami/index.php/proyectoPublico/"><img src="/verkami/assets/images/carrusel_home/imagen1.png" alt=""></a>
    <h3>Titulo</h3>
    <p>Descripción Descripción Descripción Descripción Descripción Descripción Descripción Descripción
       Descripción Descripción Descripción Descripción Descripción Descripción Descripción Descripción</p>
  </div> 

  <div align="center" style='height: 325px; width: 33%; float: left;background-color: #FFFFFF;'>
    <br>
    <a href="/verkami/index.php/proyectoPublico/"><img src="/verkami/assets/images/carrusel_home/imagen1.png" alt=""></a>
    <h3>Titulo</h3>
    <p>Descripción Descripción Descripción Descripción Descripción Descripción Descripción Descripción
       Descripción Descripción Descripción Descripción Descripción Descripción Descripción Descripción</p>
  </div> 
</div>

</main>

<div class="container" style='height: 50px; width: 100%; float: right; background-color: #FFFFFF;'></div>  

<footer class="container navbar-default">
	<div class="col-sm-2" align="center" >
		<a href="/verkami/index.php"><img height="62" width="170" src="/verkami/assets/images/logo.png"></a>
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
				<a id="menu-down" href="/verkami/index.php/busqueda"> Proyectos</a><br>
				<a id="menu-down" href="#"> FAQ</a><br>
				<a id="menu-down" href="#"> Nuevo Proyecto    </a><br>
			</ul>
		</nav>
	</div>
</footer>

</body>
</html>


