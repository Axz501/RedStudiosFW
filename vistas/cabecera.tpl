<div class="w3-top">
      <div class="w3-bar w3-theme  w3-left-align w3-large">
        <a class="w3-bar-item w3-button w3-left w3-hide-large w3-hover-white w3-large w3-theme-l1" href="javascript:void(0)" onclick="w3_open()"><i class="fa fa-bars"></i></a>
        
        <a href="#" class="w3-bar-item w3-button w3-hide-small w3-theme-l1 w3-hover-red"><i class="fa fa-home w3-margin-right"></i>RedStudios</a>
        <a  data-toggle="modal" data-target="#modal2" class="w3-bar-item w3-button w3-hide-small w3-hover-white"><span class="glyphicon glyphicon-log-in"></span> Ingresar</a>
        <a  data-toggle="modal" data-target="#modal" class="w3-bar-item w3-button w3-hide-small w3-hover-white"><span class="glyphicon glyphicon-user"></span> Registrarse</a>
        <div class="w3-dropdown-hover w3-hide-large w3-hide-medium">
            <button class="w3-button" title="Notifications">RedStudios <i class="fa fa-caret-down"></i></button>     
            <div class="w3-dropdown-content w3-card-4 w3-bar-block">
                <a  data-toggle="modal" data-target="#modal2" class="w3-bar-item w3-button w3-hover-black"><span class="glyphicon glyphicon-log-in"></span> Ingresar</a>
                <a data-toggle="modal" data-target="#modal" class="w3-bar-item w3-button w3-hover-black">
                    <span class="glyphicon glyphicon-user"></span> Registrarse</a>
            </div>
        </div>
        <form id="formbuscar" method="post" action="{$url_base}usuario/buscar/">
            <a id="botonbuscar" href="#" class="w3-bar-item w3-button w3-right w3-hover-white w3-text-white"><i class="fa fa-search"></i></a>
            <input type="text" id="buscar" class="form-control" name="buscar" placeholder="Buscar..." value='{$buscar}'>
        </form>   
    </div>
    </div>