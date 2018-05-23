<!DOCTYPE html>
<html lang="en">
  <head>

    <link rel="icon" href="{$url_base}/img/RS-Logo.png"">
    <base href="{$url_base}">
    <meta charset="utf-8">    
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
            
            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-2 control-label" for="nombre">Nombre</label>  
              <div class="col-md-8">
              <input id="nombre" name="nombre" type="text" placeholder="Nombre" class="form-control input-md" >
                
              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-2 control-label" for="apellido">Apellido</label>  
              <div class="col-md-8">
              <input id="apellido" name="apellido" type="text" placeholder="Apellido" class="form-control input-md" >
                
              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-2 control-label" for="apellido">Email</label>  
              <div class="col-md-8">
              <input id="email" name="email" type="email" placeholder="mail@gmail.com" class="form-control input-md" >
                
              </div>
            </div>

             <!-- Text input-->
            <div class="form-group">
              <label class="col-md-2 control-label" for="apellido">Contraseña</label>  
              <div class="col-md-8">
              <input id="pass" name="pass" type="password"  minlength="6" title="6 letras mín." class="form-control input-md" >
                
              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-2 control-label" for="edad">Edad</label>  
              <div class="col-md-8">
              <input id="edad" name="edad" type="number" min="18" max="99" placeholder="0" class="form-control input-md">
                
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-2 control-label" for="edad">Quitar Imagen</label>  
              <div class="col-md-2 checkbox">
                <label><input type="checkbox" name="quitarimagen" id="quitarimagen"></label>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-2 control-label" for="apellido">Contraseña Actual</label>  
              <div class="col-md-8">
              <input id="pass2" name="pass2" placeholder="CAMPO REQUERIDO" type="password"  minlength="6" title="6 caracteres mín." class="form-control input-md" required="" >
                
              </div>
            </div>

            <!-- Button -->
            <div class="form-group">
              <label class="col-md-8 control-label" for="guardar"></label>
              <div class="col-md-2">
                <button id="guardar" name="guardar" class="btn btn-success">Enviar Datos</button>
              </div>
            </div>

            
            </div>
            <div class="col-md-4">
              <label for="imagen">Imagen de Perfil:</label>
              {if $imagen==""}
              <img src="{$url_base}img/iconoUsuario.jpg" class="img-responsive img-circle" id="imageneditar" ><br>
              {/if}
              {if $imagen!=""}
              <img src="{$imagen}" class="img-responsive img-circle" id="imageneditar" ><br>
              {/if}
              <!-- <form target="iframe" action="{$url_base}mediador.php" id="formcrear" enctype="multipart/form-data" method="post">  -->
                <input type="file" name="elegirimagen" id="elegirimagen" value="Img" accept=".jpg*,.png*"/>
              <!-- </form> -->
              <iframe style="display:none" id="iframe" name="iframe"></iframe><br>
            </div>
            </fieldset>
          </form>
        
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script language="JavaScript" type="text/javascript" src="{$url_base}js/jquery.min.js"></script>
    <script language="JavaScript" type="text/javascript" src="{$url_base}js/bootstrap.min.js"></script>
    <script language="JavaScript" type="text/javascript" src="{$url_base}js/functions.js"></script>
    <script language="JavaScript" type="text/javascript" src="{$url_base}js/barralateral.js"></script>
    <script language="JavaScript" type="text/javascript" src="{$url_base}js/headerimage.js"></script>
    
  </body>
</html>

