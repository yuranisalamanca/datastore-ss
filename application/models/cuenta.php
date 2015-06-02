<div class="cuerpo">
	<div class="barraCuenta">	
		<ul class="listabarraprincipal">
			<li><a class="inicarsesion" href="">Iniciar Sesi&oacute;n</a></li>
		</ul>
	</div>

	<div class="cuerpoCuenta">
		<form method="post" class="cuentaForm" id="form-crear-usuario">
			<fieldset>
				<legend>Crea tu cuenta</legend>
				<div id="msg-errores" role="alert">
				</div>
				
				<div class="generalCuenta">
					<div class="leftCuenta">
						<label class="etiquetasFormCuenta"> Nombre 
							<input class="labelCuenta" name="nombreU" type="text" placeholder="Escriba su nombre" required>
						</label>

						<label class="etiquetasFormCuenta"> Correo Electr&oacute;nico 
							<input class="labelCuenta" name="correoU" type="email" placeholder="Escriba su correo electr&oacute;nico" required>
						</label>

						<label class="etiquetasFormCuenta"> Contrase&ntilde;a 
							<input type="password" class="labelCuenta" name="contraseniaU" placeholder="Escriba su contrase&ntilde;a" required>
						</label>
					</div>

					<div class="rightCuenta">
						<label class="etiquetasFormCuenta"> Apellido
							<input class="labelCuenta" name="apellidoU" type="text" placeholder="Escriba sus apellidos" required>
						</label>
						<label class="etiquetasFormCuenta"> Usuario
							<input class="labelCuenta" name="usuarioU" type="text" placeholder="Escriba el nombre de usuario" required>
						</label>
						
						<label class="etiquetasFormCuenta"> Confirma tu contrase&ntilde;a 
							<input type="password" class="labelCuenta" name="contraseniaConfirmU" placeholder="Escriba su contrase&ntilde;a" required>
					</label>
					</div>
				</div>
				<input type="submit" id="btn-crear-cuenta" class="buttonCrearCuenta" value="Crear cuenta">
			</fieldset>
		</form>
			
		<form method="post" class="cuentaForm">
			<fieldset>
				<div class="infoDrive">
					<div class="logos">
						<h3 class="tituloEmpresa">Drive</h3>
						<img src="<?php echo base_url(); ?>fonts/img/google-drive-logo.png">
					</div>
				</div>
			</fieldset>
			<input type="submit" class="buttonCrearCuenta" value="Aceptar Terminos y Condiciones en Drive">
		</form>

		<form method="post" class="cuentaForm">
			<fieldset>
				<div class="infoDropBox">
					<div class="logos">
						<h3 class="tituloEmpresa">Drive</h3>
						<img src="<?php echo base_url(); ?>fonts/img/dropbox-logo.png">
					</div>
				</div>
			</fieldset>
			<input type="submit" class="buttonCrearCuenta" value="Aceptar Terminos y Condiciones en Dropbox">
		</form>

		<form method="post" class="cuentaForm">
			<fieldset>
				<div class="infoMega">
					<div class="logos">
						<h3 class="tituloEmpresa">Mega</h3>
						<img src="<?php echo base_url(); ?>fonts/img/mega-logo.png">
					</div>
					<div class="leftInfoCuentas">
						<label class="etiquetasFormCuenta"> Correo Electr&oacute;nico 
							<input class="labelCuenta" name="correoMega" type="text" placeholder="Escriba su correo electr&oacute;nico">
						</label>
					</div>

					<div class="centerInforCuentas">
						<label class="etiquetasFormCuenta"> Contrase&ntilde;a 
							<input class="labelCuenta" name="contraseniaMega" type="text" placeholder="Escriba su contrase&ntilde;a">
						</label>
					</div>

					<div class="rightInforCuentas">
						<label class="etiquetasFormCuenta"> Confirma tu contrase&ntilde;a 
							<input class="labelCuenta" name="contraseniaConfirmMega" type="text" placeholder="Escriba su contrase&ntilde;a">
						</label>
					</div>
				</div>
				<input type="submit" class="buttonCrearCuenta" value="Aceptar Terminos y Condiciones en Mega">
			</fieldset>
		</form>
	</div>

</div>