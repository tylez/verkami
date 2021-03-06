<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Verkami</title>

	<!--Bootstrap css and JQuery-->
	<link rel="stylesheet" media="screen" type="text/css" href="<?= base_url()?>/bootstrap/css/bootstrap.css">
	<script type="text/javascript" src="/verkami/bootstrap/js/jquery.js"></script>
  <script type="text/javascript" src="/verkami/bootstrap/js/bootstrap.min.js"></script>

  <script type="text/javascript">
    $(document).ready(function(){
    
      //La función para oculta los menus de la parte privada o publica según si estamos logueados o no.
      function cambioaPublicoPrivado(){
        if(localStorage.getItem("usuario") == null){
          document.getElementById('cerrarsesion').style.display='none';  
          document.getElementById('miperfil').style.display='none';
          document.getElementById('iniciarseseion').style.display='inline';
        }else{
          document.getElementById('iniciarseseion').style.display='none';
          document.getElementById('cerrarsesion').style.display='inline';  
          document.getElementById('miperfil').style.display='inline';
        }
      }
      cambioaPublicoPrivado();
      //Se lleva a esta función para ocultar los menus de la parte privada o publica según si estamos logueados o no

      $("#cerrarsesion").click(function(evento){
        localStorage.removeItem("usuario");
        cambioaPublicoPrivado();
      });

      $("#login").click(function(evento){
          $("#erroruser").hide();
          $("#errorpass").hide();
          email = $("#email").val();
          pass = $("#password").val();

          if(email == "" || pass == ""){
            if(email == ""){
              $("#erroruser").show();
            }
            if(pass == ""){
              $("#errorpass").show();                        
            }
          }else{
            //comprobar que existe el email en la BD y si es asi se guarda en localstorage
            localStorage.setItem("usuario", email);
            cambioaPublicoPrivado();
            $("#iniciarSesion").modal('hide');
            
          }
      });

      //cuando el formulario se cierre vaciar campos
      $("#iniciarSesion").on("hidden.bs.modal", function(){
      		$("#email").val("");
         	$("#password").val("");
      });

      $(document.getElementsByName("alimentacion")).click(function(evento){
          localStorage.setItem("categoria", "alimentacion");
          document.location.href="/verkami/index.php/busqueda";
      });

      $(document.getElementsByName("ciencia y tecnologia")).click(function(evento){
          localStorage.setItem("categoria", "ciencia y tecnología");
          document.location.href="/verkami/index.php/busqueda";
      });

      $(document.getElementsByName("diseño")).click(function(evento){
          localStorage.setItem("categoria", "diseño");
          document.location.href="/verkami/index.php/busqueda";
      });

      $(document.getElementsByName("juegos")).click(function(evento){
          localStorage.setItem("categoria", "juegos");
          document.location.href="/verkami/index.php/busqueda";
      });

      $(document.getElementsByName("arte")).click(function(evento){
          localStorage.setItem("categoria", "arte");
          document.location.href="/verkami/index.php/busqueda";
      });

      $(document.getElementsByName("comunitario")).click(function(evento){
          localStorage.setItem("categoria", "comunitario");
          document.location.href="/verkami/index.php/busqueda";
      });

      $(document.getElementsByName("film")).click(function(evento){
          localStorage.setItem("categoria", "film");
          document.location.href="/verkami/index.php/busqueda";
      });

      $(document.getElementsByName("musica")).click(function(evento){
          localStorage.setItem("categoria", "música");
          document.location.href="/verkami/index.php/busqueda";
      });

      $(document.getElementsByName("artes escenicas")).click(function(evento){
          localStorage.setItem("categoria", "artes escénicas");
          document.location.href="/verkami/index.php/busqueda";
      });

      $(document.getElementsByName("comic")).click(function(evento){
          localStorage.setItem("categoria", "cómic");
          document.location.href="/verkami/index.php/busqueda";
      });

      $(document.getElementsByName("fotografía")).click(function(evento){
          localStorage.setItem("categoria", "fotografía");
          document.location.href="/verkami/index.php/busqueda";
      });

      $(document.getElementsByName("publicaciones")).click(function(evento){
          localStorage.setItem("categoria", "publicaciones");
          document.location.href="/verkami/index.php/busqueda";
      });

    });
  </script>

<style type="text/css">
	ul {background-color: #008bb9;}
	#menu-top {background-color: #008bb9; color: #FFFFFF; font-size: 20px;}
	#menu-top-marcado {background-color: #FFFFFF; color: #008bb9; font-size: 20px;}
	#menu-down {background-color: #008bb9; color: #FFFFFF; font-size: 15px;}
	#footer-somos {font-size: 14px;}
	#menu-categorias {color: #008bb9; font-size: 20px;}
  #bordesolido{border: 1px solid #008bb9;}
	h4 {color: #B3B3B3;}
	h3 {color: #008bb9;}
</style>

</head>

<header class="container">
	<h1></h1>
</header>

<body >
<nav class="container navbar navbar-default nabar-static-top">
	<ul class="nav nav-pills">
		<li><a class="navbar-brand" href="/verkami/index.php"><img height="32" width="90" src="/verkami/assets/images/verkami-selected.jpg"></a></li>
		<li><a id="menu-top"> | </a></li>
		<li><a id="menu-top" href="/verkami/index.php/busqueda"> Proyectos </a></li>
		<li><a id="menu-top" href="/verkami/index.php/quienSomos"> Qué es Verkami </a></li>
		<li><a id="menu-top" href="/verkami/index.php/faq"> FAQ </a></li>
		<li><a id="menu-top"> | </a></li>
		<li><a id="menu-top" href="/verkami/index.php/nuevoProyecto"> Empieza tu proyecto </a></li>
		<li id="iniciarseseion"><a id="menu-top"  class="btn" data-toggle="modal" data-target="#iniciarSesion"> Iniciar Sesión</a></li>
    <li id="miperfil" ><a href="/verkami/index.php/perfilPrivado" id="menu-top" class="btn"> Mi Perfil</a></li>
    <li id="cerrarsesion" ><a id="menu-top" class="btn"> Cerrar Sesión</a></li>
    <li id="buscar" ><input style="height: 45px; width: 90px;" class="form-control" placeholder="Buscar" type="search"></input></li>
</div>
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
            <form role="form" id="formlogin">
              <div class="form-group">
                <label for="inciarsesion">E-Mail (*) </label>
                <input type="text" class="form-control" id="email" placeholder="mail@mail.com" required>
                <div class="alert alert-danger" hidden="false" name="error" id="erroruser"> Usuario incorrecto.</div>

              </div>
              <div class="form-group">
                <label for="password">Contraseña (*) </label>
                <input type="password" class="form-control" name="password" id="password" placeholder="**********"  required>
				<div class="alert alert-danger" hidden="false" name="error" id="errorpass"> Contraseña incorrecta.</div>
				
              </div>
              <div class="form-group" align="right">
                <a href="/verkami/index.php/registro/"><buton type="button" class="btn btn-primary">Registro</button></a>
                <input type="button" class="btn btn-success" class="close" id="login" name="login" value="Login" >
              </div>
              <div class="alert alert-info" >(*) Campo Obligatorio</div>
           </form>     
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
    <div class="item active" align="center">
      <img src="/verkami/assets/images/carrusel_home/imagen2.jpg" alt="...">
      <div class="carousel-caption">
      	<h3>Proyecto 1</h3>
      </div>
    </div>
    <div class="item" align="center">
      <img src="/verkami/assets/images/carrusel_home/imagen3.jpg" alt="...">
      <div class="carousel-caption">
      	<h3>Proyecto 2</h3>
      </div>
    </div>
    <div class="item" align="center">
      <img src="/verkami/assets/images/carrusel_home/imagen4.jpg" alt="...">
      <div class="carousel-caption">
      	<h3>Proyecto 3</h3>
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
		<a id="menu-categorias" name="alimentacion">verkami.com/alimentación</a><br><br>
		<a id="menu-categorias" name="ciencia y tecnologia">verkami.com/ciencia-y-tencología</a><br><br>
		<a id="menu-categorias" name="diseño">verkami.com/diseño</a><br><br>
		<a id="menu-categorias" name="juegos">verkami.com/juegos</a>
	</div> 

	<div align="center"  style='height: 250px; width: 33%; float: left;background-color: #333333;'>
		<br><br>
		<a id="menu-categorias" name="arte">verkami.com/arte</a><br><br>
		<a id="menu-categorias" name="comunitario">verkami.com/comunitario</a><br><br>
		<a id="menu-categorias" name="film">verkami.com/film</a><br><br>
		<a id="menu-categorias" name="musica">verkami.com/música</a>
	</div> 

	<div align="center"  style='height: 250px; width: 33%; float: left;background-color: #333333;'>
		<br><br>
		<a id="menu-categorias" name="artes escenicas">verkami.com/artes-escénicas</a><br><br>
		<a id="menu-categorias" name="comic">verkami.com/cómic</a><br><br>
		<a id="menu-categorias" name="fotografía">verkami.com/fotografía</a><br><br>
		<a id="menu-categorias" name="publicaciones">verkami.com/publicaciones</a>
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
				<a id="menu-down" href="/verkami/index.php/busqueda"> Proyectos</a><br>
				<a id="menu-down" href="/verkami/index.php/faq"> FAQ</a><br>
				<a id="menu-down" href="/verkami/index.php/nuevoProyecto"> Nuevo Proyecto    </a><br>
			</ul>
		</nav>
	</div>
</footer>

</body>
</html>



