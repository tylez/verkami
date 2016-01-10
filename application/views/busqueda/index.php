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
	#menu-top {background-color: #008bb9; color: #FFFFFF; font-size: 20px;}
	#menu-down {background-color: #008bb9; color: #FFFFFF; font-size: 15px;}
	#footer-somos {font-size: 14px;}
  #menu-top-marcado {background-color: #FFFFFF; color: #008bb9; font-size: 20px;}
	#menu-categorias {color: #008bb9; font-size: 20px;}
  #imput {color: #000000; font-size: 18px;}
  #bordesolido{border: 1px solid #008bb9;}
	h4 {color: #B3B3B3; font-size: 20px}
	h3 {color: #008bb9; font-size: 30px}
  h5 {color: #008bb9; font-size: 16px}
</style>

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
    });
  </script>

</head>

<header class="container">
	<h1></h1>
</header>

<body>
<nav class="container navbar navbar-default nabar-static-top">
	<ul class="nav nav-pills">
		<li><a class="navbar-brand" href="/verkami/index.php"><img height="32" width="90" src="/verkami/assets/images/logo.png"></a></li>
		<li><a id="menu-top"> | </a></li>
		<li><a id="menu-top-marcado"  href="/verkami/index.php/busqueda"> Proyectos </a></li>
		<li><a id="menu-top" href="#"> Qué es Verkami </a></li>
		<li><a id="menu-top" href="#"> FAQ </a></li>
		<li><a id="menu-top"> | </a></li>
		<li><a id="menu-top" href="#"> Empieza tu proyecto </a></li>
		<li id="iniciarseseion"><a id="menu-top"  class="btn" data-toggle="modal" data-target="#iniciarSesion"> Iniciar Sesión</a></li>
    <li id="miperfil" ><a href="/verkami/index.php/perfilPrivado" id="menu-top" class="btn"> Mi Perfil</a></li>
    <li id="cerrarsesion" ><a id="menu-top" class="btn"> Cerrar Sesión</a></li>
    <li id="buscar" ><input style="height: 45px; width: 90px;" class="form-control" placeholder="Buscar" type="search"></input></li>
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



