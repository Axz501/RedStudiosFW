<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-05-08 23:31:02
         compiled from "vistas\cabecera.tpl" */ ?>
<?php /*%%SmartyHeaderCode:39845af2333682f9d0-25042772%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3cae74b19ea06023c48187a1555a6b1bc298ae42' => 
    array (
      0 => 'vistas\\cabecera.tpl',
      1 => 1525822220,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '39845af2333682f9d0-25042772',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url_base' => 0,
    'buscar' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5af23336844909_07473069',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5af23336844909_07473069')) {function content_5af23336844909_07473069($_smarty_tpl) {?><div class="w3-top">
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
        <form id="formbuscar" method="post" action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
usuario/buscar/">
            <a id="botonbuscar" href="#" class="w3-bar-item w3-button w3-right w3-hover-white w3-text-white"><i class="fa fa-search"></i></a>
            <input type="text" id="buscar" class="form-control" name="buscar" placeholder="Buscar..." value='<?php echo $_smarty_tpl->tpl_vars['buscar']->value;?>
'>
        </form>   
    </div>
    </div><?php }} ?>
