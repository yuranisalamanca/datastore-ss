<div class="cuerpo">
<div class="barraCuenta">	
	<ul class="listabarraprincipal">
		<li><a class="inicarsesion" href="">Iniciar Sesi&oacute;n</a></li>
	</ul>
</div>
<form class="formulario" method="post" id="form-cambiar-contrasenia">	
<fieldset>

<legend align="center">Cambiar Contrase&ntilde;a</legend>

	<input class="labelIndex" type="email" name="email" placeholder="Ingrese su correo electr&oacute;nico" required>
	<input class="labelIndex" type="password" name="password" placeholder="Ingrese su contrase&ntilde;a actual" required>
	<input class="labelIndex" type="password" name="passwordnew" id="passwordnew" placeholder="Ingrese su nueva contrase&ntilde;a" required>
	<input class="labelIndex" type="password" name="passwordcheck" id="passwordcheck" placeholder="Verificar nueva contrase&ntilde;a" required>
	<input type="button" class="button" id="btn-cambiar-contrasenia" value="Cambiar Contrase&ntilde;a">
	
	
	<div id="msg-errores" role="alert">
		<!--<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true" id="close-exception">&times;</span>
		</button>-->
	</div>
	
</fieldset>
</form>
</div>