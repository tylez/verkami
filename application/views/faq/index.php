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
	h4 {color: #B3B3B3;}
  h5 {color: #000000;font-size: 16px;}
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
    <li><a id="menu-top-marcado" href="/verkami/index.php/faq"> FAQ </a></li>
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
	 <h1 align="center" >Preguntas Frecuentes</h1><br>

   <div class="container" align="left" style='height: 1100px; width: 100%; float: left; background-color: #DADADA;'>
    <div class="container" align="left">
    <h3>Qué es y cómo funciona verkami</h3>
      <div  align="left" style='height: 270px; width: 95%; float: left; background-color: #FFFFFF;'>
        <br>
        <div align="left"  style='height: 270px; width: 5%; float: left;'></div>
        <h4>¿Qué es verkami?</h4>
        <h5>Verkami es una plataforma de crowdfunding o micromecenazgo:</h5>
        <h5>- Para los creadores ofrece una alternativa para financiar sus proyectos con la suma de aportaciones individuales.</h5>
        <h5>- Para los mecenas (aquellos usuarios que hacen las aportaciones) es la oportunidad de conseguir a 
          cambio productos y experiencias únicas relacionadas con los proyectos.</h5>
        <h5>- Así pues, en verkami, creadores independientes, emprendedores, promotores culturales y asociaciones 
          encontrarán una manera de financiar total o parcialmente sus proyectos con la ayuda y complicidad de su público y comunidad.</h5>
        <h5>- Cualquier proyecto creativo tiene cabida en nuestra plataforma. Desde los más humildes de creadores 
          amateur, hasta los más ambiciosos e innovadores de artistas consagrados. Nuestro objetivo es promover 
          toda acción creativa, venga de donde venga, sin distinciones.</h5>
      </div> 
    </div>

    <div class="container" align="left" style='height: 30px; width: 100%; float: left; background-color: #DADADA;'></div>

    <div class="container" align="left">  
      <div  align="left" style='height: 170px; width: 95%; float: left; background-color: #FFFFFF;'>
        <br>
        <div align="left"  style='height: 170px; width: 5%; float: left;'></div>
        <h4>¿Cómo entendemos el crowdfunding o micromecenazgo en verkami?</h4>
        <h5>Para verkami el micromecenazgo es una manera de financiar proyectos a través de aportaciones de 
          muchas personas que, a cambio, reciben compensaciones o recompensas exclusivas en forma de productos, servicios o experiencias.</h5>
        <h5>No es una inversión para obtener beneficios económicos. Los creadores conservan el 100% de todos 
          los derechos y beneficios de sus obras.</h5>
      </div>       
    </div>

    <div class="container" align="left" style='height: 30px; width: 100%; float: left; background-color: #DADADA;'></div>

    <div class="container" align="left">  
      <div  align="left" style='height: 190px; width: 95%; float: left; background-color: #FFFFFF;'>
        <br>
        <div align="left"  style='height: 190px; width: 5%; float: left;'></div>
        <h4>¿Quién puede buscar financiación para su proyecto a través de verkami?</h4>
        <h5>Queremos que verkami sea un punto de encuentro para creadores y emprendedores del mundo del arte, 
          la cultura y la sociedad civil, acogiendo campos tan diversos como cine, música, teatro, cómic, proyectos 
          comunitarios, diseño, software, fotografía, tecnología, obras sociales, inventos, periodismo, vídeo, literatura...</h5>
        <h5>También es una buena herramienta para promotores, curadores o asociaciones que quieran organizar 
          conciertos, exposiciones, ferias o cualquier otro tipo de evento.</h5>
      </div>       
    </div>

    <div class="container" align="left" style='height: 30px; width: 100%; float: left; background-color: #DADADA;'></div>

    <div class="container" align="left">  
      <div  align="left" style='height: 270px; width: 95%; float: left; background-color: #FFFFFF;'>
        <br>
        <div align="left"  style='height: 270px; width: 5%; float: left;'></div>
        <h4>¿Cómo funciona la financiación de todo o nada?</h4>
        <h5>Cada proyecto tiene un objetivo de financiación, establecido por el creador, y 40 días para conseguirlo. 
          Finalizado el plazo existen dos escenarios:</h5>
        <h5>1- Que no se haya recaudado el 100% del objetivo de financiación. En este caso no hay ningún tipo de 
          transacción monetaria y los compromisos de aportación de los mecenas quedan anulados.</h5>
        <h5>2- Que se haya llegado al 100% del objetivo de financiación o se haya superado. En este caso se realizan 
          los cargos de los compromisos de aportación en las tarjetas o cuenta PayPal de los mecenas y el creador recibe el dinero recaudado.</h5>
        <h5>Publicar tu proyecto en verkami es una buena herramienta para medir el éxito de tu idea. 
          Tus mecenas son un indicador de cuánta gente está dispuesta a apoyarte para convertir tu sueño en realidad. 
          Si obtienes el apoyo necesario, puedes sacar adelante tu proyecto con garantías. Si no lo consigues, no has adquirido ningún compromiso y puedes replantear la manera de enfocarlo.</h5>
      </div>       
    </div>

  </div>
</div>
</main>

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
				<a id="menu-down" href="/verkami/index.php/faq"> FAQ</a><br>
				<a id="menu-down" href="/verkami/index.php/nuevoProyecto"> Nuevo Proyecto    </a><br>
			</ul>
		</nav>
	</div>
</footer>

</body>
</html>



