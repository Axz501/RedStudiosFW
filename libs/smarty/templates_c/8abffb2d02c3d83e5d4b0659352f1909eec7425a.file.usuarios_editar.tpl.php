<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-05-30 05:01:31
         compiled from "vistas\usuarios_editar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:59895afa294420a755-26319698%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8abffb2d02c3d83e5d4b0659352f1909eec7425a' => 
    array (
      0 => 'vistas\\usuarios_editar.tpl',
      1 => 1527656489,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '59895afa294420a755-26319698',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5afa29443f2c47_86801051',
  'variables' => 
  array (
    'url_base' => 0,
    'proyecto' => 0,
    'titulo' => 0,
    'mensaje' => 0,
    'usuario_perfil_nombre' => 0,
    'usuario_perfil_apellido' => 0,
    'usuario_perfil_correo' => 0,
    'usuario_perfil_edad' => 0,
    'imagen' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5afa29443f2c47_86801051')) {function content_5afa29443f2c47_86801051($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
  <head>

    <?php echo $_smarty_tpl->getSubTemplate ("headerinfo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <!-- <link rel="icon" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
/img/RS-Logo.png"">
    <base href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
">
    <meta charset="utf-8">    
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
            
            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-2 control-label" for="nombre">Nombre</label>  
              <div class="col-md-8">
              <input id="nombre" name="nombre" value="<?php echo $_smarty_tpl->tpl_vars['usuario_perfil_nombre']->value;?>
" type="text" placeholder="Nombre" class="form-control input-md" >
                
              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-2 control-label" for="apellido">Apellido</label>  
              <div class="col-md-8">
              <input id="apellido" name="apellido" value="<?php echo $_smarty_tpl->tpl_vars['usuario_perfil_apellido']->value;?>
" type="text" placeholder="Apellido" class="form-control input-md" >
                
              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-2 control-label" for="apellido">Email</label>  
              <div class="col-md-8">
              <input id="email" name="email" type="email" value="<?php echo $_smarty_tpl->tpl_vars['usuario_perfil_correo']->value;?>
" placeholder="mail@gmail.com" class="form-control input-md" >
                
              </div>
            </div>

             <!-- Text input-->
            <div class="form-group">
              <label class="col-md-2 control-label" for="apellido">Contraseña</label>  
              <div class="col-md-8">
              <input id="pass" name="pass" type="password"  minlength="6" title="6 letras mín." class="form-control input-md" >
                
              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-2 control-label" for="edad">Edad</label>  
              <div class="col-md-8">
              <input id="edad" name="edad" type="number" min="18" max="99" value="<?php echo $_smarty_tpl->tpl_vars['usuario_perfil_edad']->value;?>
" placeholder="0" class="form-control input-md">
                
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-2 control-label" for="edad">Quitar Imagen</label>  
              <div class="col-md-2 checkbox">
                <label><input type="checkbox" name="quitarimagen" id="quitarimagen"></label>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-2 control-label" for="apellido">Contraseña Actual</label>  
              <div class="col-md-8">
              <input id="pass2" name="pass2" placeholder="CAMPO REQUERIDO" type="password"  minlength="6" title="6 caracteres mín." class="form-control input-md" required="" >
                
              </div>
            </div>

            <!-- Button -->
            <div class="form-group">
              <label class="col-md-8 control-label" for="guardar"></label>
              <div class="col-md-2">
                <button id="guardar" name="guardar" class="btn btn-success">Enviar Datos</button>
              </div>
            </div>

            
            </div>
            <div class="col-md-4">
              <label for="imagen">Imagen de Perfil:</label>
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
                <input type="file" name="elegirimagen" id="elegirimagen" value="Img" accept=".jpg*,.png*"/>
              <!-- </form> -->
              <iframe style="display:none" id="iframe" name="iframe"></iframe><br>
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
