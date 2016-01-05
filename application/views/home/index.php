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
		<li><a id="menu-top" href="#"> Proyectos </a></li>
		<li><a id="menu-top" href="#"> Qué es Verkami </a></li>
		<li><a id="menu-top" href="#"> FAQ </a></li>
		<li><a id="menu-top"> | </a></li>
		<li><a id="menu-top" href="#"> Empieza tu proyecto </a></li>
		<li><a id="menu-top" class="btn btn-default" data-toggle="modal" data-target="#iniciarSesion"> Iniciar Sesión</a></li>
	</ul>
</nav>

<div class="modal fade"  id="iniciarSesion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Cerrar</span></button>
        <h3 class="modal-title" id="myModalLabel" >Accede a tu cuenta en Verkami</h3>
      </div>
      <div id="nuevasesion" class="modal-body">
            <form role="form">
              <div class="form-group">
                <label for="inciarsesion">E-Mail</label>
                <input type="text" class="form-control" id="email" placeholder="" required>
              </div>
              <div class="form-group">
                <label for="tiempoJuego">Contraseña</label>
                <input type="text" class="form-control" id="password" placeholder="**********" required>                      
              </div>
           </form>      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Registro</button>
        <button type="button" class="btn btn-success" id="botonAventura" onClick="alert('Botón crear')">Login</button>        
      </div>
    </div>
  </div>
 </div>

<main class="container">
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="2000">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="/verkami/assets/images/carrusel_home/imagen1.png" alt="...">
      <div class="carousel-caption">
      	<h3>Caption Text</h3>
      </div>
    </div>
    <div class="item">
      <img src="/verkami/assets/images/carrusel_home/imagen2.jpg" alt="...">
      <div class="carousel-caption">
      	<h3>Caption Text</h3>
      </div>
    </div>
    <div class="item">
      <img src="/verkami/assets/images/carrusel_home/imagen3.png" alt="...">
      <div class="carousel-caption">
      	<h3>Caption Text</h3>
      </div>
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div> <!-- Carousel -->
<br>

<div class="container">
	<h3>Destacados</h3>
	<div  align="center" style='height: 350px; width: 33%; float: left; background-color: #FFFFFF;'>
		<br>
		<a href="/verkami/index.php/proyectoPublico/"><img src="/verkami/assets/images/carrusel_home/imagen1.png" alt=""></a>
		<h3>Titulo</h3>
		<p>Descripción Descripción Descripción Descripción Descripción Descripción Descripción Descripción
			 Descripción Descripción Descripción Descripción Descripción Descripción Descripción Descripción</p>
	</div> 

	<div align="center" style='height: 350px; width: 33%; float: left;background-color: #FFFFFF;'>
		<br>
		<a href="/verkami/index.php/proyectoPublico/"><img src="/verkami/assets/images/carrusel_home/imagen1.png" alt=""></a>
		<h3>Titulo</h3>
		<p>Descripción Descripción Descripción Descripción Descripción Descripción Descripción Descripción
		   Descripción Descripción Descripción Descripción Descripción Descripción Descripción Descripción</p>
	</div> 

	<div align="center" style='height: 350px; width: 33%; float: left;background-color: #FFFFFF;'>
		<br>
		<a href="/verkami/index.php/proyectoPublico/"><img src="/verkami/assets/images/carrusel_home/imagen1.png" alt=""></a>
		<h3>Titulo</h3>
		<p>Descripción Descripción Descripción Descripción Descripción Descripción Descripción Descripción
		   Descripción Descripción Descripción Descripción Descripción Descripción Descripción Descripción</p>
	</div> 
</div>


<div class="container">
	<h3>Categorias</h3>
	<div  align="center" style='height: 250px; width: 33%; float: left; background-color: #333333;'>
		<br><br>
		<a id="menu-categorias" href="#">verkami.com/alimentación</a><br><br>
		<a id="menu-categorias" href="#">verkami.com/ciencia-y-tencologia</a><br><br>
		<a id="menu-categorias" href="#">verkami.com/diseño</a><br><br>
		<a id="menu-categorias" href="#">verkami.com/juegos</a>
	</div> 

	<div align="center"  style='height: 250px; width: 33%; float: left;background-color: #333333;'>
		<br><br>
		<a id="menu-categorias" href="#">verkami.com/arte</a><br><br>
		<a id="menu-categorias" href="#">verkami.com/comunitario</a><br><br>
		<a id="menu-categorias" href="#">verkami.com/film</a><br><br>
		<a id="menu-categorias" href="#">verkami.com/música</a>
	</div> 

	<div align="center"  style='height: 250px; width: 33%; float: left;background-color: #333333;'>
		<br><br>
		<a id="menu-categorias" href="#">verkami.com/artes-escenicas</a><br><br>
		<a id="menu-categorias" href="#">verkami.com/comic</a><br><br>
		<a id="menu-categorias" href="#">verkami.com/fotografía</a><br><br>
		<a id="menu-categorias" href="#">verkami.com/publicaciones</a>
	</div> 
</div>
<br>

<div class="container">
	<h3>En Curso</h3>
	<div  align="center" style='height: 350px; width: 33%; float: left; background-color: #FFFFFF;'>
		<br>
		<a href="/verkami/index.php/proyectoPublico/"><img src="/verkami/assets/images/carrusel_home/imagen1.png" alt=""></a>
		<h3>Titulo</h3>
		<p>Descripción Descripción Descripción Descripción Descripción Descripción Descripción Descripción
			 Descripción Descripción Descripción Descripción Descripción Descripción Descripción Descripción</p>
	</div> 

	<div align="center" style='height: 350px; width: 33%; float: left;background-color: #FFFFFF;'>
		<br>
		<a href="/verkami/index.php/proyectoPublico/"><img src="/verkami/assets/images/carrusel_home/imagen1.png" alt=""></a>
		<h3>Titulo</h3>
		<p>Descripción Descripción Descripción Descripción Descripción Descripción Descripción Descripción
		   Descripción Descripción Descripción Descripción Descripción Descripción Descripción Descripción</p>
	</div> 

	<div align="center" style='height: 350px; width: 33%; float: left;background-color: #FFFFFF;'>
		<br>
		<a href="/verkami/index.php/proyectoPublico/"><img src="/verkami/assets/images/carrusel_home/imagen1.png" alt=""></a>
		<h3>Titulo</h3>
		<p>Descripción Descripción Descripción Descripción Descripción Descripción Descripción Descripción
		   Descripción Descripción Descripción Descripción Descripción Descripción Descripción Descripción</p>
	</div> 
</div>

</main>


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
				<a id="menu-down" href="#"> Proyectos</a><br>
				<a id="menu-down" href="#"> FAQ</a><br>
				<a id="menu-down" href="#"> Nuevo Proyecto    </a><br>
			</ul>
		</nav>
	</div>
</footer>

</body>
</html>



