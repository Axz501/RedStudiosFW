<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-05-29 00:47:26
         compiled from "vistas\barralateral.tpl" */ ?>
<?php /*%%SmartyHeaderCode:175745aefbaba3b95d1-08922596%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e6c5e0010aec2a6d3ffdfd3e9558548754ce4e85' => 
    array (
      0 => 'vistas\\barralateral.tpl',
      1 => 1527554844,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '175745aefbaba3b95d1-08922596',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5aefbaba3d4b62_56010015',
  'variables' => 
  array (
    'imagen' => 0,
    'url_base' => 0,
    'nombre' => 0,
    'url_logout' => 0,
    'usuario_editar' => 0,
    'usuario_perfil' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aefbaba3d4b62_56010015')) {function content_5aefbaba3d4b62_56010015($_smarty_tpl) {?><nav class="w3-sidebar w3-bar-block w3-collapse w3-large w3-theme-l5 w3-animate-left" id="mySidebar" style="display: none;">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-right w3-xlarge w3-padding-large w3-hover-black w3-hide-large" title="Close Menu">
    <i class="fa fa-remove"></i>
</a>
<h4 style="font-size: 22px; " class="w3-bar-item"><b>Perfil</b></h4>
<div class="w3-display-container">
    <?php if ($_smarty_tpl->tpl_vars['imagen']->value=='') {?>
        <img class="img-rounded" src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
/img/RS-Logo.png" style="width:100%" alt="Avatar">
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['imagen']->value!='') {?>
        <img class="img-rounded" src="<?php echo $_smarty_tpl->tpl_vars['imagen']->value;?>
" style="width:100%" alt="Avatar">
    <?php }?>
    <div class="w3-display-bottomleft w3-container w3-text-black">
        <h2 class="nombreusuario"><?php echo $_smarty_tpl->tpl_vars['nombre']->value;?>
</h2>
    </div>
</div>
    <?php if ($_smarty_tpl->tpl_vars['nombre']->value!="Invitado") {?>
    <a class="w3-bar-item w3-button w3-hover-black" href="<?php echo $_smarty_tpl->tpl_vars['url_logout']->value;?>
">Cerrar Sesión</a>
    <a class="w3-bar-item w3-button w3-hover-black" href="<?php echo $_smarty_tpl->tpl_vars['usuario_editar']->value;?>
">Editar Perfil</a>
    <a class="w3-bar-item w3-button w3-hover-black" href="<?php echo $_smarty_tpl->tpl_vars['usuario_perfil']->value;?>
">Ver Perfil</a>
    <?php }?>
</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div><?php }} ?>
