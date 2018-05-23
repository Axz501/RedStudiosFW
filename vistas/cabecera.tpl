<div class="w3-top">
      <div class="w3-bar w3-theme  w3-left-align w3-large">
        <a class="w3-bar-item w3-button w3-left w3-hide-large w3-hover-white w3-large w3-theme-l1" href="javascript:void(0)" onclick="w3_open()"><i class="fa fa-bars"></i></a>
        
        <a href="{$url_base}" class="w3-bar-item w3-button w3-hide-small w3-hover-red" style="font-style: italic;font-size: 20px;"><i class="fa fa-home w3-margin-right"></i><b id="nombreprincipal">RedStudios</b></a>

        {if $nombre=="Invitado"}
        <a  data-toggle="modal" data-target="#modal2" class="w3-bar-item w3-button w3-hide-small w3-hover-white"><span class="glyphicon glyphicon-log-in"></span> Ingresar</a>
        <a  data-toggle="modal" data-target="#modal" class="w3-bar-item w3-button w3-hide-small w3-hover-white"><span class="glyphicon glyphicon-user"></span> Registrarse</a>
        {/if}
        <div class="w3-dropdown-hover w3-hide-large w3-hide-medium">
            <a href="{$url_base}" class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-hover-red" style="font-style: italic;font-size: 20px;"><i class="fa fa-home w3-margin-right"></i><b id="nombreprincipal">RedStudios</b></a>     
            <div class="w3-dropdown-content w3-card-4 w3-bar-block">
                {if $nombre=="Invitado"}
                <a  data-toggle="modal" data-target="#modal2" class="w3-bar-item w3-button w3-hover-black"><span class="glyphicon glyphicon-log-in"></span> Ingresar</a>
                <a data-toggle="modal" data-target="#modal" class="w3-bar-item w3-button w3-hover-black">
                    <span class="glyphicon glyphicon-user"></span> Registrarse</a>
                {/if}
            </div>
        </div>
        <form id="formbuscar" method="post" action="{$url_buscar}">
            <a id="botonbuscar" class="w3-bar-item w3-button w3-right w3-hover-white w3-text-white"><i class="fa fa-search"></i></a>
            <input type="text" id="buscar" class="form-control" name="buscar" placeholder="Buscar..." value='{$buscar}'>
        </form>
           
    </div>
    </div>
    <div class="mySlides w3-display-container w3-center" style="display: block; border-bottom-style: outset;">
        <img src="{$url_base}/img/la2.jpg" style="width:100%">
        <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small subtitulos-imagen">
          <h2>Documentos y Pruebas</h2>
          <p><b>Consulta el material compartido por nuestra comunidad para tomar pruebas y estudiar lo que necesites</b></p>   
      </div>
    </div>
    <div class="mySlides w3-display-container w3-center" style="display: block; border-bottom-style:outset;">
        <img src="{$url_base}/img/la3.jpg" style="width:100%">
        <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small subtitulos-imagen">
          <h2>Integrate</h2>
          <p><b>Socializa con estudiantes de otras partes del mundo!</b></p>   
      </div>
    </div>
    <div class="mySlides w3-display-container w3-center" style="display: block; border-bottom-style: outset;">
        <img src="{$url_base}/img/la1.jpg" style="width:100%">
        <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small subtitulos-imagen">
          <h2>Crea Grupos de Estudio</h2>
          <p><b>Se parte de nuestra comunidad consultando y ayudando a otros estudiantes</b></p>   
      </div>
    </div>
        