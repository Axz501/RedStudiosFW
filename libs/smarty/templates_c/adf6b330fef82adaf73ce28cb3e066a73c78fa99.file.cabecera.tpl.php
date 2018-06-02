<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-05-30 00:43:22
         compiled from "vistas\cabecera.tpl" */ ?>
<?php /*%%SmartyHeaderCode:54415aefba219ec5d7-41400719%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'adf6b330fef82adaf73ce28cb3e066a73c78fa99' => 
    array (
      0 => 'vistas\\cabecera.tpl',
      1 => 1527641000,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '54415aefba219ec5d7-41400719',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5aefba21a0b9e7_33947430',
  'variables' => 
  array (
    'url_base' => 0,
    'nombre' => 0,
    'url_buscar' => 0,
    'buscar' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aefba21a0b9e7_33947430')) {function content_5aefba21a0b9e7_33947430($_smarty_tpl) {?><div class="w3-top">
      <div class="w3-bar w3-theme w3-left-align w3-large" style="background-color: #000000d4 !important;">
        <a class="w3-bar-item w3-button w3-left w3-hover-white w3-text-white boton-perfil" href="javascript:void(0)" onclick="w3_open()" ><i class="fa fa-bars"></i></a>
        
        <!-- <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
" class="w3-bar-item w3-button w3-hide-small w3-hover-red" ><i class="fa fa-home w3-margin-right"></i><b id="nombreprincipal">RedStudios</b></a>

        <?php if ($_smarty_tpl->tpl_vars['nombre']->value=="Invitado") {?>
        <a  data-toggle="modal" data-target="#modal2" class="w3-bar-item w3-button w3-hide-small w3-hover-white"><span class="glyphicon glyphicon-log-in"></span> Ingresar</a>
        <a  data-toggle="modal" data-target="#modal" class="w3-bar-item w3-button w3-hide-small w3-hover-white"><span class="glyphicon glyphicon-user"></span> Registrarse</a>
        <?php }?> -->
        <div class="w3-dropdown-hover ">
            <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
" class=" w3-button  w3-hover-red"><i class="glyphicon glyphicon-book botonhome w3-margin-right"></i><b id="nombreprincipal">RedStudios</b></a>     
            <!-- <button class="w3- w3-bar-item" id="nombreprincipal">Dropdown</button> -->
            <div class="w3-dropdown-content  w3-bar-block">
                <?php if ($_smarty_tpl->tpl_vars['nombre']->value=="Invitado") {?>
                <a  data-toggle="modal" data-target="#modal2" class="w3-bar-item w3-button w3-hover-black"><span class="glyphicon glyphicon-log-in"></span> Ingresar</a>
                <a data-toggle="modal" data-target="#modal" class="w3-bar-item w3-button w3-hover-black">
                    <span class="glyphicon glyphicon-user"></span> Registrarse</a>
                <?php }?>
            </div>
        </div>
        <form id="formbuscar" method="post" action="<?php echo $_smarty_tpl->tpl_vars['url_buscar']->value;?>
">
            <a id="botonbuscar" class="w3-bar-item w3-button w3-right w3-hover-white w3-text-white"><i class="fa fa-search"></i></a>
            <input type="text" id="buscar" class="form-control" name="buscar" placeholder="Buscar..." value='<?php echo $_smarty_tpl->tpl_vars['buscar']->value;?>
'>
        </form>
        

           
    </div>
    </div>
    <div class="mySlides w3-display-container w3-center" style="display: block; border-bottom-style: outset;">
        <img class="imagencabecera" src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
/img/la2.jpg" style="width:100%">
        <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 " style="width:100%">
          <h2 class="titulo-imagen" >Documentos y Pruebas</h2>
          <p class="subtitulos-imagen" ><b>Consulta el material compartido por nuestra comunidad para tomar pruebas y estudiar lo que necesites</b></p>   
      </div>
    </div>
    <div class="mySlides w3-display-container w3-center" style="display: block; border-bottom-style:outset;">
        <img class="imagencabecera" src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
/img/la3.jpg" style="width:100%">
        <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 subtitulos-imagen" style="width:100%">
          <h2 class="titulo-imagen">Integrate</h2>
          <p class="subtitulos-imagen"><b>Socializa con estudiantes de otras partes del mundo!</b></p>   
      </div>
    </div>
    <div class="mySlides w3-display-container w3-center" style="display: block; border-bottom-style: outset;">
        <img class="imagencabecera" src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
/img/la1.jpg" style="width:100%">
        <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 subtitulos-imagen" style="width:100%">
          <h2 class="titulo-imagen"s>Crea Grupos de Estudio</h2>
          <p class="subtitulos-imagen"><b>Se parte de nuestra comunidad consultando y ayudando a otros estudiantes</b></p>   
      </div>
    </div>
        <?php }} ?>
