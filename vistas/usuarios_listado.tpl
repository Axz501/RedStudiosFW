
<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="{$url_base}">
    <meta charset="utf-8">
    
    <title>{$proyecto}</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{$url_base}css/style.css">
    <link href="{$url_base}css/bootstrap.min.css" rel="stylesheet">
    <link href="{$url_base}css/dashboard.css" rel="stylesheet">
    
    
  </head>

  <body>
    {include file="cabecera.tpl"}
    {include file="barralateral.tpl"}
    {if $mensaje!=""}
      <div class="alert alert-success" role="alert"><b>{$mensaje}</b></div>
    {/if}
    <div class="container-fluid" id="contenidoprincipal">
      <div class="row">

        <div class="col-md-12 main">
          <h1 class="page-header">Usuarios</h1>
          <h2 class="sub-header">{$titulo} <button id="agregar" name="agregar" class="btn btn-success pull-right" onClick="window.location='{$usuario_nuevo}'">Agregar</button></h2>
          {if $mensaje!=""}
            <div class="alert alert-success" role="alert">{$mensaje}</div>
          {/if}
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Nombre</th>
                  <th>Apellido</th>
                  <th>Edad</th>
                  <th>Ci</th>
                  <th>Email</th>
                  <th>Acciones</th>
                </tr>
              </thead>
              <tbody>
                {foreach from=$usuarios item=persona}
                  <tr>
                    <td>{$persona->getNombre()|upper}</td>
                    <td>{$persona->getApellido()}</td>
                    <td>{$persona->getEdad()}</td>
                    <td>{$persona->getNick()}</td>
                    <td>{$persona->getEmail()}</td>
                    <td>
                      <input type="button" value="Borrar" class="btn btn-danger" onClick="window.location='{$url_base}usuario/listado/borrar/{$persona->getId()}/'"/>
                      <input type="button" value="Mail" class="btn btn-info" onClick="window.location='{$url_base}usuario/listado/mail/{$persona->getId()}/'"/> 
                      <input type="button" value="Favoritos" class="btn btn-submit" onClick="cargarFavoritos();"/>
                    </td>
                  </tr>
                {/foreach}
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    {include file="favoritos.tpl"}

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script language="JavaScript" type="text/javascript" src="{$url_base}js/jquery.min.js"></script>
    <script language="JavaScript" type="text/javascript" src="{$url_base}js/bootstrap.min.js"></script>
    <script language="JavaScript" type="text/javascript" src="{$url_base}js/functions.js"></script>
    <script language="JavaScript" type="text/javascript" src="{$url_base}js/barralateral.js"></script>

  </body>
</html>

