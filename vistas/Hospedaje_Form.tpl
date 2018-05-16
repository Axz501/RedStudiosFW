<html>
<div class="modal fade" id="modal" role="dialog" >
  <div class="modal-dialog modal-lg" >

    <!-- Modal content-->
    <div class="modal-content" style="background-color:white;width:100%;margin-left:auto;margin-right:auto;">
      <div class="modal-header">
        <button id="cerrarmodal1" type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="font-weight:bold;color:black;font-size:30px">Nuevo Hospedaje</h4>
      </div>
      <div class="modal-body" style="background-color:white;">
        <div class="container">
          <div class="col-md-5">
            
            <div class="form-group" >
              <label for="username">Nombre:</label>
              <input name="username" type="text" class="form-control campoinput" id="username" style="width: 70%" required>
              <p id="avisonombre" class="redmessage">Nombre Inválido</p>
            </div>
            <div class="form-group" >
              <label for="direccion">Dirección:</label>
              <input name="direccion" type="text" class="form-control campoinput" id="direccion" style="width: 70%" required >
              <p id="avisodireccion" class="redmessage">Dirección Inválida</p>
            </div>
            <div class="form-group" >
              <label for="telefono">Teléfono:</label>
              <input name="telefono" type="text" class="form-control campoinput" id="telefono" style="width: 70%" >
              <p id="avisotelefono" class="redmessage">Teléfono Inválido</p>
            </div>
            <div class="form-group" >
              <label for="descripcion">Descripción:</label>
              <input name="descripcion" type="text" class="form-control campoinput" id="descripcion" style="width: 70%" >
              <p id="avisodescripcion" class="redmessage">Descripción Inválida</p>
            </div>
            <div class="form-group" >
              <label for="precio">Precio:</label>
              <input  name="precio" min="00000" max="99999" type="number" class="form-control campoinput" id="precio" style="width: 144px" required>
              <p id="avisoprecio" class="redmessage">Precio Inválido</p>
            </div>
            <div class="form-group" >
              <label for="localidad">Localidad:</label>
              <input name="localidad" type="text" class="form-control campoinput" id="localidad" style="width: 70%" >
              <p id="avisolocalidad" class="redmessage">Localidad Inválida</p>
            </div>
            
          </div>
          <div class="col-md-3">
            <label for="imagen">Imagen de Hospedaje:</label>
            <img src="{$url_base}img/iconoUsuario.jpg" class="img-responsive img-circle" id="imagenregistrar" ><br>
            <form target="iframe" action="{$url_base}mediador.php" id="formcrear" enctype="multipart/form-data" method="post"> 
              <input type="file" name="elegirimagen" id="elegirimagen" value="Img" accept=".jpg*,.png*"/>
            </form>
            <iframe style="display:none" id="iframe" name="iframe"></iframe>
          </div>
        </div>
        <div class="modal-footer">
          <button id="aceptarusuario" type="button" class="btn btn-default">Aceptar</button>
        </div>  
      </div>
      </div>
    </div>
  </div>
  </html>