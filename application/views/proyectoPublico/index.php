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
  #menu-selected{background-color: #f8f8f8; color: #008bb9; font-size: 21px;}
  #titulo_proyecto{font:bold; font-size: 96px;}
  h4 {color: #B3B3B3;}
</style>

<!--script type="text/javascript">
  //Lanzar una llamada a crear una nueva relacion usuario-aportacion con la cantidad del boton clicado para aportar
    //function
</script-->
  
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
  
<!--div class="modal fade"  id="iniciarSesion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
</div-->

<main class="container">

  <div class="col-sm-9">
        <!-- Título e imagen del proyecto-->
    <div class="media">
      <div class="media-left media-middle">
        <a href="/verkami/index.php/proyectoPublico/">
          <img id="imagen_proyecto" class="media-object" height="100" width="150" src="/verkami/assets/images/logo.png" alt="...">
        </a>
      </div>
      <div class="media-body">
        <h1 id="titulo_proyecto" class="media-heading">Título</h1>
      </div>
    </div>

    <div>
      <!-- Texto de descripción del proyecto -->
      <p id="descripcion_proyecto"> bla bla bla bla </p>
    </div>

    <div>
      <!-- Todas las preguntas -->
      <div  id="panel_preguntas" class="panel panel-default"> 
        <div class="panel-heading"> 
          <h1 class="panel title" class="panel-title"> Preguntas </h1> 
        </div> 
        <!-- Por cada pregunta -->
        <div id="cuerpo_preguntas" class="panel-body"> 
          <div class="panel panel-primary"> 
            <div class="panel-heading"> 
              <h2 id="titulo pregunta" class="panel-title">Pregunta</h2>
            </div> 
            <div class="panel-body"> 
              <p id="descripcion_aportacion"> Texto pregunta </p>
              <div class="panel panel-info">
                <div class="panel-heading">
                  <h3 id="titulo pregunta" class="panel-title">Respuesta</h3>
                </div>
                <div class="panel-body">
                  <!-- Si hay respuesta se muestra -->
                  <p id="respuesta"> Texto respuesta </p>
                  <!-- Solo si esres creador del proyecto -->
                  <div align="right"> <button class="btn btn-primary"> Responder </button> </div>
                </div>
              </div>
            </div> 
          </div>
        </div> 
      </div>
    </div>
  </div>

  <div class="col-sm-3">
    <div class="progress">
      <div id="progreso_proyecto" class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
        <p id="progreso_porcentaje">X%</p>
      </div>
    </div>
    <p id="texto_aportado_de">X aportado de Y</p>
    <!-- Lista de aportaciones -->
    <!-- Por cada aportación crear este div -->
    <div id="panel_aportaciones" class="panel panel-info"> 
      <div class="panel-heading"> 
        <h3 class="panel-title"> Aportaciones </h3> 
      </div> 
      <div class="panel-body"> 
        <div class="panel panel-primary"> 
          <div class="panel-heading"> 
            <p id="texto_aportar">Aportar X€</p>
          </div> 
          <div class="panel-body"> 
            <p id="descripcion_aportacion"> Descripcion aportacion </p>
            <div align="right"> <button class="btn btn-primary" id="boton_cantidad">Aportar X€</button> </div> 
          </div> 
        </div>
      </div> 
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
        <a id="menu-down" href="/verkami/index.php"> Verkami </a><br>
        <a id="menu-down" href="#"> Proyectos </a><br>
        <a id="menu-down" href="#"> FAQ </a><br>
        <a id="menu-down" href="#"> Nuevo Proyecto    </a><br>
      </ul>
    </nav>
  </div>
</footer>

</body>
</html>