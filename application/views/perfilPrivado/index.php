<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Verkami</title>

	<!--Bootstrap css and JQuery-->
	<link rel="stylesheet" media="screen" type="text/css" href="<?= base_url()?>/bootstrap/css/bootstrap.css">
	<script type="text/javascript" src="/verkami/bootstrap/js/jquery.js"></script>
  <script type="text/javascript" src="/verkami/bootstrap/js/bootstrap.min.js"></script>

<style type="text/css">
  ul {background-color: #008bb9;}
	#menu-top {background-color: #008bb9; color: #FFFFFF; font-size: 21px;}
	#menu-down {background-color: #008bb9; color: #FFFFFF; font-size: 15px;}
	#footer-somos {font-size: 14px;}
	#menu-selected {background-color: #f8f8f8; color: #008bb9; font-size: 21px;}
	#menu-categorias {color: #008bb9; font-size: 20px;}
  #bordesolido{border: 1px solid #008bb9;}
  #bordeleft{border-right: 1px solid #008bb9;}
	h4 {color: #B3B3B3;}
	h3 {color: #008bb9;}
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
		<li><a id="menu-top" href="/verkami/index.php/busqueda"> Proyectos </a></li>
		<li><a id="menu-top" href="#"> Qué es Verkami </a></li>
		<li><a id="menu-top" href="#"> FAQ </a></li>
		<li><a id="menu-top"> | </a></li>
		<li><a id="menu-top" href="#"> Empieza tu proyecto </a></li>
		<li id="iniciarseseion"><a id="menu-top"  class="btn" data-toggle="modal" data-target="#iniciarSesion"> Iniciar Sesión</a></li>
    <li id="miperfil" ><a href="/verkami/index.php/perfilPrivado" id="menu-top" class="btn"> Mi Perfil</a></li>
    <li id="cerrarsesion" ><a id="menu-top" class="btn"> Cerrar Sesión</a></li>
	</ul>
</nav>

<main class="container">
<div class="container" id="bordesolido" style='height: 302px; width: 100%; float: left; background-color: #FFFFFF;'>
  <div  align="left" id="bordeleft" style='height: 300px; width: 33%; float: left; background-color: #FFFFFF;'>
    <h3>Tus Aportaciones</h3><br>
    <p>Estos son los proyectos que has apoyado en verkami.</p>
    <p>Recuerda que si alguno de los proyectos que aún está en curso no llega a su objetivo de financiación tras 40 
      días, no se realizará ningún cargo a tu tarjeta.</p>
  </div> 

   <div align="center" style='height: 290px; width: 33%; float: left;background-color: #FFFFFF;'>
    <br>
    <a href="/verkami/index.php/proyectoPublico/"><img src="/verkami/assets/images/carrusel_home/imagen1.png" alt=""></a>
    <h3>Titulo</h3>
    <p>Descripción Descripción Descripción Descripción Descripción Descripción Descripción Descripción
       Descripción Descripción Descripción Descripción Descripción Descripción Descripción Descripción</p>
  </div> 

  <div align="center" style='height: 290px; width: 33%; float: left;background-color: #FFFFFF;'>
    <br>
    <a href="/verkami/index.php/proyectoPublico/"><img src="/verkami/assets/images/carrusel_home/imagen1.png" alt=""></a>
    <h3>Titulo</h3>
    <p>Descripción Descripción Descripción Descripción Descripción Descripción Descripción Descripción
       Descripción Descripción Descripción Descripción Descripción Descripción Descripción Descripción</p>
  </div> 
</div>

<div class="container" style='height: 50px; width: 100%; float: right; background-color: #FFFFFF;'></div>  

<div class="container" id="bordesolido" style='height: 302px; width: 100%; float: left; background-color: #FFFFFF;'>
  <div  align="left" id="bordeleft" style='height: 300px; width: 33%; float: left; background-color: #FFFFFF;'>
    <h3>Tus Proyectos</h3><br>
    <p>Estos son los proyectos a los que has contribuido. Cada vez que el autor del proyecto publique una nueva 
      entrada en el blog, te llegará una notificación por correo electrónico.</p>
    <p>Si en cualquier momento quieres dejar de recibir estas notificaciones para un proyecto determinado, 
      solo tienes que desmarcar la casilla correspondiente.</p>
  </div> 

   <div align="center" style='height: 290px; width: 33%; float: left;background-color: #FFFFFF;'>
    <br>
    <a href="/verkami/index.php/proyectoPublico/"><img src="/verkami/assets/images/carrusel_home/imagen1.png" alt=""></a>
    <h3>Titulo</h3>
    <p>Descripción Descripción Descripción Descripción Descripción Descripción Descripción Descripción
       Descripción Descripción Descripción Descripción Descripción Descripción Descripción Descripción</p>
  </div> 

  <div align="center" style='height: 290px; width: 33%; float: left;background-color: #FFFFFF;'>
    <br>
    <a href="/verkami/index.php/proyectoPublico/"><img src="/verkami/assets/images/carrusel_home/imagen1.png" alt=""></a>
    <h3>Titulo</h3>
    <p>Descripción Descripción Descripción Descripción Descripción Descripción Descripción Descripción
       Descripción Descripción Descripción Descripción Descripción Descripción Descripción Descripción</p>
  </div>  
</div>

<div class="container" style='height: 50px; width: 100%; float: right; background-color: #FFFFFF;'></div>  

<div class="container" id="bordesolido" style='height: 302px; width: 100%; float: left; background-color: #FFFFFF;'>
  <div  align="left" id="bordeleft" style='height: 300px; width: 33%; float: left; background-color: #FFFFFF;'>
    <h3>Tus Perfil Público</h3><br>
    <p>Esta es la información que aparecerá en verkami sobre ti.</p>
    <ol>
      <li>Explícanos quién eres en pocas palabras.</li>
      <li>El formato recomendado para tu avatar es de 248 x 189.</li>
    </ol>
  </div> 

   <div align="center" style='height: 290px; width: 33%; float: left;background-color: #FFFFFF;'>
    <br>
    <h3>Nombre</h3>
    <p>Descripción Descripción Descripción Descripción Descripción Descripción Descripción Descripción
       Descripción Descripción Descripción Descripción Descripción Descripción Descripción Descripción</p>
    <p>Descripción Descripción Descripción Descripción Descripción Descripción Descripción Descripción
       Descripción Descripción Descripción Descripción Descripción Descripción Descripción Descripción</p>   
  </div> 

  <div align="center" style='height: 290px; width: 33%; float: left;background-color: #FFFFFF;'>
    <br>
    <a href=""><img src="/verkami/assets/images/carrusel_home/imagen1.png" alt=""></a>
    <form method="post" action="accion.php" enctype="multipart/form-data">
      <input name="imagen" type="file"/>
    </form>
  </div>  
</div>

</main>
<br>

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



