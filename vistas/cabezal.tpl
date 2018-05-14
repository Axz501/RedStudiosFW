<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">{$proyecto}</a>
          
          <a  data-toggle="modal" data-target="#modal" class="w3-bar-item w3-button w3-hide-small w3-hover-white"> Hospedaje</a>
            <div class="w3-dropdown-hover w3-hide-large w3-hide-medium">   
            <div class="w3-dropdown-content w3-card-4 w3-bar-block">
                <a data-toggle="modal" data-target="#modal" class="w3-bar-item w3-button w3-hover-black">
                    Hospedaje</a>
            </div>
          </div>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="{$url_logout}">Cerrar Sesión</a></li>
          </ul>
          <form class="navbar-form navbar-right" method="post" action="{$url_base}usuario/buscar/">
            <input type="text" id="buscar" name="buscar" class="form-control" placeholder="Buscar..." value='{$buscar}'>
            <input type="submit" value="Buscar" class="form-control btn btn-primary">
          </form>
        </div>
      </div>
    </nav>