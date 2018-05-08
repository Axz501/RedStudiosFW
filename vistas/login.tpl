<html>
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
</html>