<nav class="w3-sidebar w3-bar-block w3-collapse w3-large w3-theme-l5 w3-animate-left" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-right w3-xlarge w3-padding-large w3-hover-black w3-hide-large" title="Close Menu">
    <i class="fa fa-remove"></i>
</a>
<h4 style="font-size: 22px; " class="w3-bar-item"><b>Perfil</b></h4>
<div class="w3-display-container">
    {if $imagen==""}
        <img class="img-rounded" src="{$url_base}/img/RS-Logo.png" style="width:100%" alt="Avatar">
    {/if}
    {if $imagen!=""}
        <img class="img-rounded" src="{$imagen}" style="width:100%" alt="Avatar">
    {/if}
    <div class="w3-display-bottomleft w3-container w3-text-black">
        <h2 class="nombreusuario">{$nombre}</h2>
    </div>
</div>
    {if $nombre!="Invitado"}
    <a class="w3-bar-item w3-button w3-hover-black" href="{$url_logout}">Cerrar Sesión</a>
    <a class="w3-bar-item w3-button w3-hover-black" href="#">Editar Perfil</a>
    <a class="w3-bar-item w3-button w3-hover-black" href="#">Eliminar Cuenta</a>
    {/if}
</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>