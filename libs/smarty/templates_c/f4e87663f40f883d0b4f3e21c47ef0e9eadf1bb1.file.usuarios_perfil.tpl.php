<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-05-30 02:19:18
         compiled from "vistas\usuarios_perfil.tpl" */ ?>
<?php /*%%SmartyHeaderCode:281915b037c13f23515-01013598%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f4e87663f40f883d0b4f3e21c47ef0e9eadf1bb1' => 
    array (
      0 => 'vistas\\usuarios_perfil.tpl',
      1 => 1527646753,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '281915b037c13f23515-01013598',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5b037c141254e4_66132308',
  'variables' => 
  array (
    'url_base' => 0,
    'proyecto' => 0,
    'titulo' => 0,
    'mensaje' => 0,
    'usuario_perfil_nick' => 0,
    'usuario_perfil_nombre' => 0,
    'usuario_perfil_apellido' => 0,
    'usuario_perfil_correo' => 0,
    'usuario_perfil_edad' => 0,
    'imagen' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b037c141254e4_66132308')) {function content_5b037c141254e4_66132308($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
  <head>
    <?php echo $_smarty_tpl->getSubTemplate ("headerinfo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <!-- <base href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
">
    <meta charset="utf-8">
    <link rel="icon" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
/img/RS-Logo.png"">
    <title><?php echo $_smarty_tpl->tpl_vars['proyecto']->value;?>
</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/dashboard.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
css/style.css"> -->

  </head>
  <body>
    <?php echo $_smarty_tpl->getSubTemplate ("cabecera.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php echo $_smarty_tpl->getSubTemplate ("barralateral.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <div class="container-fluid" id="contenidoprincipal">
      <div class="row">
       
        <div class="col-sm-12  col-md-12  main">
          <h1 class="page-header">Usuarios</h1>
          <h2 class="sub-header"><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h2>
          <?php if ($_smarty_tpl->tpl_vars['mensaje']->value!='') {?>
            <div class="alert alert-success" role="alert" id="mensaje" style="font-size: 22px"><?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>
</div>
          <?php }?>
          
          <form class="form-horizontal" method="post" enctype="multipart/form-data">
            <fieldset>
            <div class="col-md-8">
            <div class="form-group">
              <label class="col-md-2 control-label info-perfil" for="nombre">Nick: </label>  
              <div class="col-md-8">
              <h5 class="info-perfil" style="padding-top: 3px"><i><?php echo $_smarty_tpl->tpl_vars['usuario_perfil_nick']->value;?>
</i></h5>
              </div>
            </div>
            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-2 control-label info-perfil" for="nombre">Nombre: </label>  
              <div class="col-md-8">
              <h5 class="info-perfil" style="padding-top: 3px"><i><?php echo $_smarty_tpl->tpl_vars['usuario_perfil_nombre']->value;?>
</i></h5>
              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-2 control-label info-perfil" for="apellido">Apellido: </label>  
              <div class="col-md-8">
              <h5 class="info-perfil" style="padding-top: 3px"><i><?php echo $_smarty_tpl->tpl_vars['usuario_perfil_apellido']->value;?>
</i></h5>
                
              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-2 control-label info-perfil" for="apellido">Email: </label>  
              <div class="col-md-8">
              <h5 class="info-perfil" style="padding-top: 3px"><i><?php echo $_smarty_tpl->tpl_vars['usuario_perfil_correo']->value;?>
</i></h5>
                
              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-2 control-label info-perfil" for="edad">Edad: </label>  
              <div class="col-md-8">
              <h5 class="info-perfil" style="padding-top: 3px"><i><?php echo $_smarty_tpl->tpl_vars['usuario_perfil_edad']->value;?>
</i></h5>
                
              </div>
            </div>
         
            </div>
            <div class="col-md-4">
              <label for="imagen" class="info-perfil">Imagen de Perfil:</label>
              <?php if ($_smarty_tpl->tpl_vars['imagen']->value=='') {?>
              <img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
img/iconoUsuario.jpg" class="img-responsive img-circle" id="imageneditar" ><br>
              <?php }?>
              <?php if ($_smarty_tpl->tpl_vars['imagen']->value!='') {?>
              <img src="<?php echo $_smarty_tpl->tpl_vars['imagen']->value;?>
" class="img-responsive img-circle" id="imageneditar" ><br>
              <?php }?>
              <!-- <form target="iframe" action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
mediador.php" id="formcrear" enctype="multipart/form-data" method="post">  -->
              <!-- </form> -->
            </div>
            </fieldset>
          </form>
        
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <?php echo '<script'; ?>
 language="JavaScript" type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
js/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 language="JavaScript" type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 language="JavaScript" type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
js/functions.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 language="JavaScript" type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
js/barralateral.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 language="JavaScript" type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
js/headerimage.js"><?php echo '</script'; ?>
>
  </body>
</html>

<?php }} ?>
