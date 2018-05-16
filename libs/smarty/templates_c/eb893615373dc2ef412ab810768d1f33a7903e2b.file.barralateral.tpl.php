<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-05-08 23:31:02
         compiled from "vistas\barralateral.tpl" */ ?>
<?php /*%%SmartyHeaderCode:124255af233368aad79-85236312%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb893615373dc2ef412ab810768d1f33a7903e2b' => 
    array (
      0 => 'vistas\\barralateral.tpl',
      1 => 1525822220,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '124255af233368aad79-85236312',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url_base' => 0,
    'nombre' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5af233368bf068_24287129',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5af233368bf068_24287129')) {function content_5af233368bf068_24287129($_smarty_tpl) {?><nav class="w3-sidebar w3-bar-block w3-collapse w3-large w3-theme-l5 w3-animate-left" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-right w3-xlarge w3-padding-large w3-hover-black w3-hide-large" title="Close Menu">
    <i class="fa fa-remove"></i>
</a>
<h4 class="w3-bar-item"><b>Perfil</b></h4>
<div class="w3-display-container">
    <img class="img-rounded" src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
/img/RS-Logo.png" style="width:100%" alt="Avatar">
    <div class="w3-display-bottomleft w3-container w3-text-black">
        <h2 class="nombreusuario"><?php echo $_smarty_tpl->tpl_vars['nombre']->value;?>
</h2>
    </div>
</div>
    <a class="w3-bar-item w3-button w3-hover-black" href="#">Link</a>
    <a class="w3-bar-item w3-button w3-hover-black" href="#">Link</a>
    <a class="w3-bar-item w3-button w3-hover-black" href="#">Link</a>
    <a class="w3-bar-item w3-button w3-hover-black" href="#">Link</a>
</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div><?php }} ?>
