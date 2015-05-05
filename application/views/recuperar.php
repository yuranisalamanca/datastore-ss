<div class="cuerpo">
<div class="barraCuenta">	
	<ul class="listabarraprincipal">
		<li><a class="inicarsesion" href="">Iniciar Sesi&oacute;n</a></li>
	</ul>
</div>
<form class="formulario" method="post" action="<?php echo site_url('usuario/recuperar') ?>">	
<fieldset>

<legend align="center">Recuperar Contrase&ntilde;a</legend>

	<input class="labelIndex" type="email" name="email" placeholder="Ingrese su correo electr&oacute;nico" required>
	<input type="submit" class="button" value="Recuperar">
	
	<?php if (isset($_POST['recuperar'])){ ?>
	
	<div class="alert alert-danger" role="alert">
		<?php echo $_POST['recuperar']; ?>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
		</button>
	</div>
	<?php } ?>
</fieldset>
</form>
</div>