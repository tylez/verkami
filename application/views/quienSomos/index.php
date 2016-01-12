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
        })
    });
</script>

<style type="text/css">
	ul {background-color: #008bb9;}
	#menu-top {background-color: #008bb9; color: #FFFFFF; font-size: 20px;}
	#menu-down {background-color: #008bb9; color: #FFFFFF; font-size: 15px;}
	#footer-somos {font-size: 14px;}
  #menu-top-marcado {background-color: #FFFFFF; color: #008bb9; font-size: 20px;}
  #bordesolido{border: 1px solid #008bb9; background-color: #9A9A9A;}
	h4 {color: #7A7A7A;}
  h3 {color: #008bb9;font-size: 28px;}
  h5 {color: #008bb9;font-size: 20px;}
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
    <li><a id="menu-top" href="/verkami/index.php/quienSomos"> Qué es Verkami </a></li>
    <li><a id="menu-top" href="#"> FAQ </a></li>
    <li><a id="menu-top"> | </a></li>
    <li><a id="menu-top" href="/verkami/index.php/nuevoProyecto"> Empieza tu proyecto </a></li>
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

<main class="container" align="center">

  <div class="container" align="center">
    <img style='width: 100%;' src="/verkami/assets/images/info.png">
    <div  align="left" style='height: 250px; width: 47%; float: left; background-color: #FFFFFF;'>
      <br>
      <h3>Qué es verkami</h3>
      <h4>Somos una alternativa a los modelos tradicionales de financiación para artistas,
      creadores, diseñadores, colectivos... Un modelo basado en la complicidad con el
      público, una nueva experiencia de consumo cultural y un componente militante y de mecenazgo.</h4>
    </div> 

    <div align="left"  style='height: 250px; width: 6%; float: left;'></div>

    <div align="left" style='height: 250px; width: 47%; float: left;background-color: #FFFFFF;'>
      <br>
      <h3>Nuestra fórmula</h3>
      <h4>Una herramienta muy potente y multi-idioma en continua evolución, asesoramiento 
      personalizado para todos y cada uno de los proyectos por expertos de las industrias
      culturales y la mayor comunidad europea de amantes de la cultura. Una combinación
      que marca la diferencia y hace que los proyecto en verkami tengan una tasa de éxito
      superior al 70%, única entre las grandes plataformas de crowdfunding.</h4>
    </div> 
</div>


<div class="container" align="left" style='height: 475px; width: 100%; float: left; background-color: #DADADA;'>
  <div class="container" align="left">
    <h3>¿Eres Creador?</h3>
    <div  align="left" style='height: 150px; width: 20%; float: left; background-color: #FFFFFF;'>
      <br>
      <div align="left"  style='height: 150px; width: 10%; float: left;'></div>
      <h5>1</h5>
      <h4>Tienes una idea</h4>
    </div> 

    <div align="left"  style='height: 150px; width: 5%; float: left;'></div>

    <div align="left" style='height: 150px; width: 20%; float: left;background-color: #FFFFFF;'>
      <br>
      <div align="left"  style='height: 150px; width: 10%; float: left;'></div>
      <h5>2</h5>
      <h4>Publicas tu proyecto en verkami y consigues una página <a href="/verkami/index.php/proyectoPublico/"> como esta</a></h4>
    </div> 

    <div align="left"  style='height: 150px; width: 5%; float: left;'></div>

    <div align="left" style='height: 150px; width: 20%; float: left;background-color: #FFFFFF;'>
      <br>
      <div align="left"  style='height: 150px; width: 10%; float: left;'></div>
      <h5>3</h5>
      <h4>Dispones de 40 dias para recaudar la financiación necesaria</h4>
    </div> 

    <div align="left"  style='height: 150px; width: 5%; float: left;'></div>

    <div align="ñeft" style='height: 150px; width: 20%; float: left;background-color: #FFFFFF;'>
      <br>
      <div align="left"  style='height: 150px; width: 10%; float: left;'></div>
      <h5>4</h5>
      <h4>El proyecto se lleva a cabo y los mecenas reciben sus recompensas</h4>
    </div>
  </div>
  <br>
  <div class="container" align="left">
    <h3>¿Eres Mecenas?</h3>
    <div  align="left" style='height: 150px; width: 20%; float: left; background-color: #FFFFFF;'>
      <br>
      <div align="left"  style='height: 150px; width: 10%; float: left;'></div>
      <h5>1</h5>
      <h4>¿Te gusta un proyecto? Sigue su evolución en su página</h4>
    </div> 

    <div align="left"  style='height: 150px; width: 5%; float: left;'></div>

    <div align="left" style='height: 150px; width: 20%; float: left;background-color: #FFFFFF;'>
      <br>
      <div align="left"  style='height: 150px; width: 10%; float: left;'></div>
      <h5>2</h5>
      <h4>Elige tu recompensa y realiza tu aportación al proyecto</h4>
    </div> 

    <div align="left"  style='height: 150px; width: 5%; float: left;'></div>

    <div align="left" style='height: 150px; width: 20%; float: left;background-color: #FFFFFF;'>
      <br>
      <div align="left"  style='height: 150px; width: 10%; float: left;'></div>
      <h5>3</h5>
      <h4>Sólo si el proyecto consigue financiación, te haremos el cargo a tu tarjeta.</h4>
    </div> 

    <div align="left"  style='height: 150px; width: 5%; float: left;'></div>

    <div align="ñeft" style='height: 150px; width: 20%; float: left;background-color: #FFFFFF;'>
      <br>
      <div align="left"  style='height: 150px; width: 10%; float: left;'></div>
      <h5>4</h5>
      <h4>El creador lleva el proyecto a cabo y tu recibes tu recompensa</h4>
    </div>
  </div>

</div>

</main>
<br>
<br>


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
				<a id="menu-down" href="/verkami/index.php/busqueda"> Proyectos</a><br>
				<a id="menu-down" href="#"> FAQ</a><br>
				<a id="menu-down" href="/verkami/index.php/nuevoProyecto"> Nuevo Proyecto    </a><br>
			</ul>
		</nav>
	</div>
</footer>

</body>
</html>



