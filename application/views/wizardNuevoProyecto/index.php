<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Verkami</title>

  <!--Bootstrap css and JQuery and  Fuelux-->
    <link rel="stylesheet" media="screen" type="text/css" href="<?= base_url()?>/bootstrap/css/bootstrap.css">
  <script type="text/javascript" src="/verkami/bootstrap/js/jquery.js"></script>
  <script type="text/javascript" src="/verkami/bootstrap/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="/verkami/bootstrap/js/fuelux.min.js"></script>
  <!--link rel="stylesheet" type="text/css" href="<?= base_url()?>/bootstrap/css/fuelux.min.css"-->
  <link rel="stylesheet" href="https://fuelcdn.com/fuelux/2.3/css/fuelux.min.css">
  <!--link rel="stylesheet" href="css/main.css"-->

<script type="text/javascript">
    $(document).ready(function(){
      $("#nuevaAportacion").click(function(evento){
        $("#errorAportacion").hide();
        valor= $("#valor").val();
        descripcion = $("#descripcionAportacion").val()

        if(valor != "" && descripcion != "")
        {
          //Al clicar se crea una nueva aportacion en la BDD.

          //Al crearla la mostramos en la lista de Aportaciones.
          document.getElementById("listaAportaciones").insertAdjacentHTML('beforeEnd', '<li id="aportaciones">Valor: '+valor+', Descripcion: '+descripcion +"  "+
            '<a href="javascript:deleteAlquileres()">Eliminar</a> ' +
            '<a href="javascript:verDetallesAlquileres()">Detalles</a> ' +  
            '</li>');
          //document.getElementById("listaAportaciones").innerHTML = '<li>"Nueva aportacion"</li>';

          //borar campos
          $("#valor").val("");
          $("#descripcion").val("");
        }
        else
          $("#errorAportacion").show();
      });
      $("#cancelaProyecto").click(function(evento){
        document.location.href = "/verkami/index.php/nuevoProyecto"

        $("nombreProyecto").val("");
        $("descripcion").val("");
        $("resumen").val("");
        
        $("#valor").val("");
        $("#descripcion").val("");
        $("#listaAportaciones").clear();

        //$("#imagenProyecto").src("");

        //$("#imagenProyectoFinal").src("");
        $("#nombreProyectoFinal").val("");
        $("#DescripcionFinal").val("");
        $("#resumenFinal").val("");
        $("#listaAportacionesFinal").clear();

      });
    });
</script>

<style type="text/css">
  #menu-top {background-color: #008bb9; color: #FFFFFF; font-size: 20px;}
  #menu-down {background-color: #008bb9; color: #FFFFFF; font-size: 15px;}
  #footer-somos {font-size: 14px;}
  #menu-top-marcado {background-color: #FFFFFF; color: #008bb9; font-size: 20px;}
  h4 {color: #B3B3B3;}
  #aportaciones {}
</style>
  
</head>

<header class="container">
  <h1></h1>
</header>

<body>

<main class="container">
  <div class="wizard fuelux" data-initialize="wizard" id="wizardIllustration">
  <button id="cancelaProyecto" class="btn btn-danger"><span class="glyphicon glyphicon-arrow-left"></span> Cancelar</button>
    <div class="wizard">
      <ul class="steps">
        <li data-step="1" data-name="campaign" class="active">
          <span class="badge">1</span>Datos de la propuesta
          <span class="chevron"></span>
        </li>
        <li data-step="2">
          <span class="badge">2</span>Aportaciones
          <span class="chevron"></span>
        </li>
        <li data-step="3" data-name="template">
          <span class="badge">3</span>Añade una foto o un vídeo
          <span class="chevron"></span>
        </li>
        <li data-step="4" data-name="template">
          <span class="badge">4</span>Envíanos tu propuesta
          <span class="chevron"></span>
        </li>
      </ul>

      <div class="actions">
        <button type="button" class="btn btn-default btn-prev">
          <span class="glyphicon glyphicon-arrow-left"></span> Anterior </button>
        <button type="button" class="btn btn-primary btn-next" data-last="Enviar " style="background: #008bb9;"> Siguiente 
          <span class="glyphicon glyphicon-arrow-right"></span>
        </button>
      </div>
    </div>  

    <div class="step-content">
      <div class="step-pane active sample-pane alert" data-step="1">
        <p>Introduce todos los datos de la propuesta</p>
        <form role="form" id="formPaso2">
          <div class="form-group">
            <label for="nombreProyecto">Nombre (*) </label>
            <input type="text" class="form-control" id="nombreProyecto" placeholder="Nombre del proyecto" required>
          </div>

          <div class="form-group">
            <label for="descripcion">Descripción (*) </label>
            <textarea id="descripcion" name="descripcion" style="width:100%; " rows="10" cols="50" placeholder="Escribe aqui la descripción de tu proyecto" required></textarea>
          </div>

          <div class="form-group">
            
            <textarea id="resumen" name="resumen" style="width:100%; " rows="5" cols="50" placeholder="Escribe aqui un resumen de tu proyecto" required></textarea>
          </div>

          <div class="alert alert-danger" hidden="false" name="erroPaso1" id="erroPaso1"> Faltan datos.</div>
       </form>
      </div>

      <div class="step-pane active sample-pane alert" data-step="2">
        <p>Pon recompensa para cada aportación a tu proyecto</p>
        <form role="form" id="formlogin">
          <div class="form-group">
            <label for="valor">Valor: </label>
            <input type="valor" class="form-control" id="valor" placeholder="Valor de la aportacion en €">
          </div>

          <div class="form-group">
            <label for="descripcionAportacion">Descripción: </label>
            <textarea id="descripcionAportacion" name="descripcionAportacion" style="width:100%; " rows="5" cols="50" placeholder="Escribe aqui una descripcion y las recompensas de esta aportación"></textarea>
          </div>

          <div class="form-group" align="right">
            <input type="button" class="btn btn-success" class="close" id="nuevaAportacion" name="nuevaAportacion" value="Crear aportación">
          </div>

          <div class="alert alert-danger" hidden="false" name="errorAportacion" id="errorAportacion"> Rellena los datos para crear la nueva aportación.</div>
        </form>

        <ul id="listaAportaciones"> <!--esto va a compañado de un JS que crearemos luego para listar los datos obtenidos de la BDD-->
        </ul>
      </div>

      <div class="step-pane active sample-pane alert" data-step="3">
        <p>Pon una imagen o vídeo de presentación para tu proyecto</p>
        <img id="imagenProyecto" src="/verkami/assets/images/carrusel_home/imagen1.png" alt="">
        <form method="post" action="accion.php" enctype="multipart/form-data">
          <input name="imagen" type="file"/>
        </form>
      </div>

      <div class="step-pane active sample-pane alert" data-step="4">
        <p>Revisa tu proyecto y envíanoslo</p>
        <img id="imagenProyectoFinal" src="/verkami/assets/images/carrusel_home/imagen1.png" alt="">
        <label for="nombreProyectoFinal">Nombre</label>
        <label for="DescripcionFinal">Descripción</label>
        <label for="resumenFinal">Resumen</label>

        <ul id="listaAportacionesFinal"> 
          <!--Las cargaremos con JS -->
        </ul>
        <!--Hay que borrar todos los campos y la lista-->
      </div>
      <div class="alert alert-info" >(*) Campo Obligatorio</div>
    </div>

  </div>
</main>


<footer class="container navbar-default">
 
</footer>

</body>
</html>



