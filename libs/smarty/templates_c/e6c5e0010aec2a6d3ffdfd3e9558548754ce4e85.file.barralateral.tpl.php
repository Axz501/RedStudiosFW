<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-05-07 02:32:26
         compiled from "vistas\barralateral.tpl" */ ?>
<?php /*%%SmartyHeaderCode:175745aefbaba3b95d1-08922596%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e6c5e0010aec2a6d3ffdfd3e9558548754ce4e85' => 
    array (
      0 => 'vistas\\barralateral.tpl',
      1 => 1525660321,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '175745aefbaba3b95d1-08922596',
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
  'unifunc' => 'content_5aefbaba3d4b62_56010015',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aefbaba3d4b62_56010015')) {function content_5aefbaba3d4b62_56010015($_smarty_tpl) {?><nav class="w3-sidebar w3-bar-block w3-collapse w3-large w3-theme-l5 w3-animate-left" id="mySidebar">
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
