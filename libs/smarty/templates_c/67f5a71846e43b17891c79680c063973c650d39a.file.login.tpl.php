<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-05-08 23:17:00
         compiled from "vistas\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:55045af22fec8b8883-63156197%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '67f5a71846e43b17891c79680c063973c650d39a' => 
    array (
      0 => 'vistas\\login.tpl',
      1 => 1525821240,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '55045af22fec8b8883-63156197',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5af22fec8bc5b1_27226872',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5af22fec8bc5b1_27226872')) {function content_5af22fec8bc5b1_27226872($_smarty_tpl) {?><html>
<div class="modal fade" id="modal2" role="dialog" >
		<div class="modal-dialog modal-lg" >

			<!-- Modal content-->
			<div class="modal-content" style="background-color:white;width:100%;margin-left:auto;margin-right:auto;">
				<div class="modal-header">
					<button id="cerrarmodal2" type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title" style="font-weight:bold;color:black;font-size:30px">Login</h4>
				</div>
				<div class="modal-body" style="background-color:white;">
					<form id="loginform">
					<div class="form-group" >
                        <label for="loginci">E-Mail/Nick:</label>
                        <input name="loginci" type="text" class="form-control" id="loginci" style="width: 50%" required>
						<p class="redmessage" id="loginaviso">Credenciales Inválidas</p>
					</div>
					<div class="form-group" >
                        <label for="loginpass">Contraseña:</label>
                        <input name="loginpass" type="password" class="form-control" id="loginpass" style="width: 50%" required>
					</div>
					<div class="modal-footer">
						<button id="loginok" type="submit" class="btn btn-default">Ingresar</button>
					</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</html><?php }} ?>
