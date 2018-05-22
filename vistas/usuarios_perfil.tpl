<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="{$url_base}">
    <meta charset="utf-8">
    <link rel="icon" href="{$url_base}/img/RS-Logo.png"">
    <title>{$proyecto}</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{$url_base}css/style.css">

  </head>
  <body>
    {include file="cabecera.tpl"}
    {include file="barralateral.tpl"}
    <div class="container-fluid" id="contenidoprincipal">
      <div class="row">
       
        <div class="col-sm-12  col-md-12  main">
          <h1 class="page-header">Usuarios</h1>
          <h2 class="sub-header">{$titulo}</h2>
          {if $mensaje!=""}
            <div class="alert alert-success" role="alert" id="mensaje" style="font-size: 22px">{$mensaje}</div>
          {/if}
          
          <form class="form-horizontal" method="post" enctype="multipart/form-data">
            <fieldset>
            <div class="col-md-8">
            <div class="form-group">
              <label class="col-md-2 control-label info-perfil" for="nombre">Nick: </label>  
              <div class="col-md-8">
              <h5 class="info-perfil" style="padding-top: 3px"><i>{$usuario_perfil_nick}</i></h5>
              </div>
            </div>
            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-2 control-label info-perfil" for="nombre">Nombre: </label>  
              <div class="col-md-8">
              <h5 class="info-perfil" style="padding-top: 3px"><i>{$usuario_perfil_nombre}</i></h5>
              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-2 control-label info-perfil" for="apellido">Apellido: </label>  
              <div class="col-md-8">
              <h5 class="info-perfil" style="padding-top: 3px"><i>{$usuario_perfil_apellido}</i></h5>
                
              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-2 control-label info-perfil" for="apellido">Email: </label>  
              <div class="col-md-8">
              <h5 class="info-perfil" style="padding-top: 3px"><i>{$usuario_perfil_correo}</i></h5>
                
              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-2 control-label info-perfil" for="edad">Edad: </label>  
              <div class="col-md-8">
              <h5 class="info-perfil" style="padding-top: 3px"><i>{$usuario_perfil_edad}</i></h5>
                
              </div>
            </div>
         
            </div>
            <div class="col-md-4">
              <label for="imagen" class="info-perfil">Imagen de Perfil:</label>
              {if $imagen==""}
              <img src="{$url_base}img/iconoUsuario.jpg" class="img-responsive img-circle" id="imageneditar" ><br>
              {/if}
              {if $imagen!=""}
              <img src="{$imagen}" class="img-responsive img-circle" id="imageneditar" ><br>
              {/if}
              <!-- <form target="iframe" action="{$url_base}mediador.php" id="formcrear" enctype="multipart/form-data" method="post">  -->
              <!-- </form> -->
            </div>
            </fieldset>
          </form>
        
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="{$url_base}js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script type="text/javascript" src="{$url_base}js/barralateral.js"></script>
  </body>
</html>

