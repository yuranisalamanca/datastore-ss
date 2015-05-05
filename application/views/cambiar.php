<div class="cuerpo">
<div class="barraCuenta">	
	<ul class="listabarraprincipal">
		<li><a class="inicarsesion" href="">Iniciar Sesi&oacute;n</a></li>
	</ul>
</div>
<form class="formulario" method="post" action="<?php echo site_url('usuario/cambiar') ?>">	
<fieldset>

<legend align="center">Cambiar Contrase&ntilde;a</legend>

	<input class="labelIndex" type="text" name="email" placeholder="Ingrese su correo electr&oacute;nico" required>
	<input class="labelIndex" type="text" name="email" placeholder="Ingrese su contrase&ntilde;a actual" required>
	<input class="labelIndex" type="text" name="email" placeholder="Ingrese su nueva contrase&ntilde;a" required>
	<input class="labelIndex" type="text" name="email" placeholder="Verificar nueva contrase&ntilde;a" required>

	<input type="submit" class="button" value="Cambiar Contrase&ntilde;a">
	
	<?php if (isset($_POST['cambiar'])){ ?>
	
	<div class="alert alert-danger" role="alert">
		<?php echo $_POST['cambiar']; ?>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
		</button>
	</div>
	<?php } ?>
</fieldset>
</form>
</div>