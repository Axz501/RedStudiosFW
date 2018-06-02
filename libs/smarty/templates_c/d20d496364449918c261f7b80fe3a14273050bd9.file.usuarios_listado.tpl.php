<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-05-30 05:39:41
         compiled from "vistas\usuarios_listado.tpl" */ ?>
<?php /*%%SmartyHeaderCode:257045aee57510ec398-09507142%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd20d496364449918c261f7b80fe3a14273050bd9' => 
    array (
      0 => 'vistas\\usuarios_listado.tpl',
      1 => 1527658780,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '257045aee57510ec398-09507142',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5aee57515d61b1_49810936',
  'variables' => 
  array (
    'mensaje' => 0,
    'titulo' => 0,
    'usuario_nuevo' => 0,
    'usuarios' => 0,
    'persona' => 0,
    'url_base' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aee57515d61b1_49810936')) {function content_5aee57515d61b1_49810936($_smarty_tpl) {?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php echo $_smarty_tpl->getSubTemplate ("headerinfo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    
  </head>

  <body>
    <?php echo $_smarty_tpl->getSubTemplate ("cabecera.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php echo $_smarty_tpl->getSubTemplate ("barralateral.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    
    <div class="container-fluid" id="contenidoprincipal">
      <div class="row">
        <?php if ($_smarty_tpl->tpl_vars['mensaje']->value!='') {?>
            <div class="alert alert-success" role="alert" style="font-size: 22px"><?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>
</div>
          <?php }?>

        <div class="col-md-12 main">
          <h1 class="page-header w3-border-bottom w3-border-black">Usuarios</h1>
          <h2 class="sub-header "><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
 
            <!-- <button id="agregar" name="agregar" class="btn btn-success pull-right" onClick="window.location='<?php echo $_smarty_tpl->tpl_vars['usuario_nuevo']->value;?>
'">Agregar</button> -->
          </h2>
          
          <div class="table-responsive tabla-usuarios">
            <table class="table " style="background-color: white">
              <thead class="w3-red">
                <tr>
                  <th>Nombre</th>
                  <th>Apellido</th>
                  <th>Edad</th>
                  <th>Nick</th>
                  <th>Email</th>
                  <th>Imagen</th>
                  <!-- <th>Acciones</th> -->
                </tr>
              </thead>
              <tbody >
                <?php  $_smarty_tpl->tpl_vars['persona'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['persona']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['usuarios']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['persona']->key => $_smarty_tpl->tpl_vars['persona']->value) {
$_smarty_tpl->tpl_vars['persona']->_loop = true;
?>
                  <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['persona']->value->getNombre();?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['persona']->value->getApellido();?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['persona']->value->getEdad();?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['persona']->value->getNick();?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['persona']->value->getEmail();?>
</td>
                    <?php if ($_smarty_tpl->tpl_vars['persona']->value->getImagen()=='') {?>
                      <td><img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
img/RS-Logo.png" style="width:200px;height:200px;"></td>
                    <?php } elseif ($_smarty_tpl->tpl_vars['persona']->value->getImagen()!='') {?>
                      <td><img src="<?php echo $_smarty_tpl->tpl_vars['persona']->value->getImagen();?>
" style="width:200px;height:200px;"></td>
                    <?php }?>

                    <!-- <td>
                      <input type="button" value="Borrar" class="btn btn-danger" onClick="window.location='<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
usuario/listado/borrar/<?php echo $_smarty_tpl->tpl_vars['persona']->value->getId();?>
/'"/>
                      <input type="button" value="Mail" class="btn btn-info" onClick="window.location='<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
usuario/listado/mail/<?php echo $_smarty_tpl->tpl_vars['persona']->value->getId();?>
/'"/> 
                      <input type="button" value="Favoritos" class="btn btn-submit" onClick="cargarFavoritos();"/>
                    </td> -->
                  </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <!-- <?php echo $_smarty_tpl->getSubTemplate ("favoritos.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 -->

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
