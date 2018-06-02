
<!DOCTYPE html>
<html lang="en">
  <head>
    {include file="headerinfo.tpl"}
    
  </head>

  <body>
    {include file="cabecera.tpl"}
    {include file="barralateral.tpl"}
    
    <div class="container-fluid" id="contenidoprincipal">
      <div class="row">
        {if $mensaje!=""}
            <div class="alert alert-success" role="alert" style="font-size: 22px">{$mensaje}</div>
          {/if}

        <div class="col-md-12 main">
          <h1 class="page-header w3-border-bottom w3-border-black">Usuarios</h1>
          <h2 class="sub-header ">{$titulo} 
            <!-- <button id="agregar" name="agregar" class="btn btn-success pull-right" onClick="window.location='{$usuario_nuevo}'">Agregar</button> -->
          </h2>
          
          <div class="table-responsive tabla-usuarios">
            <table class="table " style="background-color: white">
              <thead class="w3-red">
                <tr>
                  <th>Nombre</th>
                  <th>Apellido</th>
                  <th>Edad</th>
                  <th>Nick</th>
                  <th>Email</th>
                  <th>Imagen</th>
                  <!-- <th>Acciones</th> -->
                </tr>
              </thead>
              <tbody >
                {foreach from=$usuarios item=persona}
                  <tr>
                    <td>{$persona->getNombre()}</td>
                    <td>{$persona->getApellido()}</td>
                    <td>{$persona->getEdad()}</td>
                    <td>{$persona->getNick()}</td>
                    <td>{$persona->getEmail()}</td>
                    {if $persona->getImagen()==""}
                      <td><img src="{$url_base}img/RS-Logo.png" style="width:200px;height:200px;"></td>
                    {else if $persona->getImagen()!=""}
                      <td><img src="{$persona->getImagen()}" style="width:200px;height:200px;"></td>
                    {/if}

                    <!-- <td>
                      <input type="button" value="Borrar" class="btn btn-danger" onClick="window.location='{$url_base}usuario/listado/borrar/{$persona->getId()}/'"/>
                      <input type="button" value="Mail" class="btn btn-info" onClick="window.location='{$url_base}usuario/listado/mail/{$persona->getId()}/'"/> 
                      <input type="button" value="Favoritos" class="btn btn-submit" onClick="cargarFavoritos();"/>
                    </td> -->
                  </tr>
                {/foreach}
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <!-- {include file="favoritos.tpl"} -->

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

