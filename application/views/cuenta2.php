<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/plantilla.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/main.css">
		<script src="<?php echo base_url(); ?>js/vendor/jquery-1.11.2.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>js/indexjs.js"></script>
		<title>Gestor de Archivos Multiplataforma</title>

	</head>
	<body>
		<div class="barraCuenta">	
			<ul class="listabarraprincipal">
				<li><a href="index.html">Iniciar Sesi&oacute;n</a></li>
			</ul>
		</div>

		<div class="cuerpoCuenta">
			<form method="post" action="" class="cuentaForm">
				<fieldset>
					<legend>Crea tu cuenta</legend>
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

					<div class="infoDropBox">
						<div class="logos">
							<h3 class="tituloEmpresa">Dropbox</h3>
							<img src="../img/dropbox-logo.png">
						</div>
						<div class="leftInfoCuentas">
							<label class="etiquetasFormCuenta"> Correo Electr&oacute;nico 
								<input class="labelCuenta" name="correoDropbox" type="text" placeholder="Escriba su correo electr&oacute;nico">
							</label>
						</div>

						<div class="centerInforCuentas">
							<label class="etiquetasFormCuenta"> Contrase&ntilde;a 
								<input class="labelCuenta" name="contraseniaDropbox" type="text" placeholder="Escriba su contrase&ntilde;a">
							</label>
						</div>

						<div class="rightInforCuentas">
							<label class="etiquetasFormCuenta"> Confirma tu contrase&ntilde;a 
								<input class="labelCuenta" name="contraseniaConfirmDropbox" type="text" placeholder="Escriba su contrase&ntilde;a">
							</label>
						</div>
					</div>


					<div class="infoDrive">
						<div class="logos">
							<h3 class="tituloEmpresa">Drive</h3>
							<img src="../img/google-drive-logo.png">
						</div>
						<div class="leftInfoCuentas">
							<label class="etiquetasFormCuenta"> Correo Electr&oacute;nico 
								<input class="labelCuenta" name="correoDrive" type="text" placeholder="Escriba su correo electr&oacute;nico">
							</label>
						</div>

						<div class="centerInforCuentas">
							<label class="etiquetasFormCuenta"> Contrase&ntilde;a 
								<input class="labelCuenta" name="contraseniaDrive" type="text" placeholder="Escriba su contrase&ntilde;a">
							</label>
						</div>

						<div class="rightInforCuentas">
							<label class="etiquetasFormCuenta"> Confirma tu contrase&ntilde;a 
								<input class="labelCuenta" name="contraseniaConfirmDrive" type="text" placeholder="Escriba su contrase&ntilde;a">
							</label>
						</div>
					</div>


					<div class="infoMega">
						<div class="logos">
							<h3 class="tituloEmpresa">Drive</h3>
							<img src="../img/mega-logo.png">
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
					<input type="submit" class="buttonCrearCuenta" value="Crear cuenta">

				</fieldset>
			</form>
		</div>
	
	</body>
</html>