<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-05-08 23:31:02
         compiled from "vistas\Reg_Form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:267995af23336a39fa8-47121747%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a8468a76a6af10e0f7999d3fb06908ebbe354395' => 
    array (
      0 => 'vistas\\Reg_Form.tpl',
      1 => 1525822220,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '267995af23336a39fa8-47121747',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url_base' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5af23336a6d208_22936684',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5af23336a6d208_22936684')) {function content_5af23336a6d208_22936684($_smarty_tpl) {?><html>
<div class="modal fade" id="modal" role="dialog" >
	<div class="modal-dialog modal-lg" >

		<!-- Modal content-->
		<div class="modal-content" style="background-color:white;width:100%;margin-left:auto;margin-right:auto;">
			<div class="modal-header">
				<button id="cerrarmodal1" type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title" style="font-weight:bold;color:black;font-size:30px">Nuevo Usuario</h4>
			</div>
			<div class="modal-body" style="background-color:white;">
				<div class="container">
					<div class="col-md-5">
						<div class="form-group" >
							<label for="cedula">Nick:</label>
							<input name="Nick" type="text" class="form-control campoinput" id="Nick" style="width: 70%" required >
							<p id="avisonick" class="redmessage">Nick Inválido</p>
						</div>
						<div class="form-group" >
							<label for="username">Nombre:</label>
							<input name="username" type="text" class="form-control campoinput" id="username" style="width: 70%" required>
							<p id="avisonombre" class="redmessage">Nombre Inválido</p>
						</div>
						<div class="form-group" >
							<label for="surname">Apellido:</label>
							<input name="surname" type="text" class="form-control campoinput" id="surname" style="width: 70%" required >
							<p id="avisoapellido" class="redmessage">Apellido Inválido</p>
						</div>
						<div class="form-group" >
							<label for="mail">Correo Electrónico:</label>
							<input name="mail" type="email" class="form-control campoinput" id="mail" style="width: 70%" >
							<p id="avisocorreo" class="redmessage">Correo Inválido</p>
						</div>
						<div class="form-group" >
							<label for="age">Edad:</label>
							<input  name="age" min="18" max="99" type="number" class="form-control campoinput" id="age" style="width: 144px" required>
							<p id="avisoedad" class="redmessage">Edad Inválida</p>
						</div>
						<div class="form-group" >
							<label for="password">Contraseña:</label>
							<input name="password" type="password" class="form-control campoinput" id="password" style="width: 70%" required>
							<p id="avisocontra" class="redmessage">Contraseña Inválida</p>
						</div>
						<div class="form-group" >
							<label for="password2">Confirmar Contraseña:</label>
							<input name="password2" type="password" class="form-control campoinput" id="password2" style="width: 70%" required >
							<p id="avisocontra2" class="redmessage">Las Contraseñas no coinciden</p>
						</div>
						
					</div>
					<div class="col-md-3">
						<label for="imagen">Imagen de Perfil:</label>
						<img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
img/iconoUsuario.jpg" class="img-responsive img-circle" id="imagenregistrar" ><br>
						<form target="iframe" action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
mediador.php" id="formcrear" enctype="multipart/form-data" method="post"> 
							<input type="file" name="elegirimagen" id="elegirimagen" value="Img" accept=".jpg*,.png*"/>
						</form>
						<iframe style="display:none" id="iframe" name="iframe"></iframe>
					</div>
				</div>
				<div class="modal-footer">
					<button id="aceptarusuario" type="button" class="btn btn-default">Aceptar</button>
				</div>	
			</div>
			</div>
		</div>
	</div>
	</html><?php }} ?>
