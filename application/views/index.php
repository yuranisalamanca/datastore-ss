<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/bootstrap.min.css">
		<title>Gestor de Archivos Multiplataforma</title>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/plantilla.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/main.css">
		<script type="text/javascript" src="<?php echo base_url(); ?>js/vendor/jquery-1.11.2.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>js/indexjs.js"></script>
	</head>
	<body>
		<div class="cuerpo">
		<form class="formulario" method="post" action="<?php echo site_url('usuario/login') ?>">	
			<fieldset>

			<legend align="center">Inicia sesi&oacute;n</legend>
			
				<input class="labelIndex" type="text" name="username" placeholder="Ingrese su nombre de usuario" required>
				<input class="labelIndex" type="password" name="password" placeholder="Ingrese su contrase&ntilde;a" required>
				<input type="submit" class="button" value="Iniciar Sesi&oacute;n">
				<a href="#" class="forgotpassword"> &iquest;Has olvidado tu contrase&ntilde;a?</a>
				<a href="cuenta.html" id="registrar" class="registrar">Registrarse</a>
				<a href="#" class="registrar">Cambiar contrase&ntilde;a</a>
				
				<?php if (isset($_POST['mensajeerror'])){ ?>
				
				<div class="alert alert-danger" role="alert">
					<?php echo $_POST['mensajeerror']; ?>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
	  					<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<?php } ?>
			</fieldset>
			</form>
		</div>
	</body>
	
</html>