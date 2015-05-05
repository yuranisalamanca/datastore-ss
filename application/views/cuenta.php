
		<div class="barraCuenta">	
			<ul class="listabarraprincipal">
				<li class="link_cuenta"><a id="info" href="#">Informaci&oacute;n General</a></li>
				<li class="link_cuenta"><a id="infoDrive" href="#">Informaci&oacute;n Drive</a></li>
				<li class="link_cuenta"><a id="infoDropbox" href="#">Informaci&oacute;n Dropbox</a></li>
				<li class="link_cuenta"><a id="infoMega" href="#">Informaci&oacute;n Mega</a></li>

				<li><a class="inicarsesion" href="">Iniciar Sesi&oacute;n</a></li>
			</ul>
		</div>

		<div class="cuerpoCuenta">
			<form method="post" action="<?php echo site_url('usuario/createUser') ?>" class="cuentaForm">
				<fieldset>
					<legend>Crea tu cuenta</legend>
					<?php if (isset($_POST['exitoAgregar'])){ ?>
				
					<div class="alert alert-danger" role="alert">
						<?php echo $_POST['exitoAgregar']; ?>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		  					<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<?php } ?>
					
					<div class="generalCuenta">
						<div class="leftCuenta">
							<label class="etiquetasFormCuenta"> Nombre 
								<input class="labelCuenta" name="nombreU" type="text" placeholder="Escriba su nombre">
							</label>

							<label class="etiquetasFormCuenta"> Correo Electr&oacute;nico 
								<input class="labelCuenta" name="correoU" type="text" placeholder="Escriba su correo electr&oacute;nico">
							</label>

							<label class="etiquetasFormCuenta"> Contrase&ntilde;a 
								<input class="labelCuenta" name="contraseniaU" type="text" placeholder="Escriba su contrase&ntilde;a">
							</label>
						</div>

						<div class="rightCuenta">
							<label class="etiquetasFormCuenta"> Apellido
								<input class="labelCuenta" name="apellidoU" type="text" placeholder="Escriba sus apellidos">
							</label>
							<label class="etiquetasFormCuenta"> Usuario
								<input class="labelCuenta" name="usuarioU" type="text" placeholder="Escriba el nombre de usuario">
							</label>
							
							<label class="etiquetasFormCuenta"> Confirma tu contrase&ntilde;a 
								<input class="labelCuenta" name="contraseniaConfirmU" type="text" placeholder="Escriba su contrase&ntilde;a">
						</label>
						</div>
					</div>
					<input type="submit" class="buttonCrearCuenta" value="Crear cuenta">
				</fieldset>
			</form>
		</div>