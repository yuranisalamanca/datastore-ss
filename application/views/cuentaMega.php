<form method="post" action="" class="cuentaForm">

	<div class="infoMega">
		<div class="logos">
			<h3 class="tituloEmpresa">Drive</h3>
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
	<input type="submit" class="buttonCrearCuenta" value="Guardar Información Mega">
</form>