<!DOCTYPE html>
<html>
	<head>
		
		<title>Gestor de Archivos Multiplataforma</title>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/plantilla.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/main.css">
		<script src="<?php echo base_url(); ?>js/vendor/jquery-1.11.2.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>js/indexjs.js"></script>
	</head>
	<body>
		<header class="tituloheader">
			<div class="barracolores"></div>
			<img class="titulobarra" src="<?php echo base_url(); ?>fonts/img/titulos4.png">
			<div class="barracolores"></div>
		</header>
		<div class="cuerpo">	
			<form class="formulario" method="post" action="<?php echo site_url('') ?>">
			<fieldset>
			<legend align="center">Inicia sesi&oacute;n</legend>		
					<input class="label" type="text" name="username" placeholder="Ingrese su nombre de usuario" required>
					<input class="label" type="password" name="password" placeholder="Ingrese su contrase&ntilde;a" required>
				<input type="submit" class="button" value="Iniciar Sesi&oacute;n">
				<a href="#" class="forgotpassword"> &iquest;Has olvidado tu contrase&ntilde;a?</a>
				<a href="cuenta.html" class="registrar">Registrarse</a>
				<a href="#" class="registrar">Cambiar contrase&ntilde;a</a>
			</fieldset>
			</form>
		</div>

		<footer class="footerIndex">	
			<body onload="javascript:cambiarTab(tabs,tab1);">

				<div id="contenidotabs">
					 <div id="ctab1">
					  	<h5 class="copyright">Copyright &copy; 2015 Universidad del Quind&iacute;o.
						<h5 class="derechos">Todos los derechos reservados</h5>
					 </div>
					  
					 <div id="ctab2">
					    <h5>El gestor de archivos multiplataforma te permite centralizar todos tus archivos que estan en la nube en un mismo sitio.</h5>
					    <nav class="logos">
					    	<a href="https://www.dropbox.com" target="_blank"> 
					    		<img src="<?php echo base_url(); ?>fonts/img/dropbox-logo.png">
					    	</a>
					    	<a href="http://www.google.com/intl/es_co/drive/" target="_blank">
					    		<img src="<?php echo base_url(); ?>fonts/img/google-drive-logo.png">
					    	</a>

					    	<a href="https://mega.co.nz/" target="_blank">
					    		<img src="<?php echo base_url(); ?>fonts/img/mega-logo.png">
					    	</a>
					    </nav>
					 </div>
					  
					 <div id="ctab3">
					  	<h5 class="autor1">Yurani Alejandra Salamanca Lotero</h5>
					  	<h5 class="autor2">Julian David Serna Echeverry</h5>
					 </div>
				</div>
			<div class="footerbarra">
				<div id="tabs">
					<ul>
						<li id="tab1"><a href='javascript:cambiarTab(tabs,tab1);'>Derechos</a></li>
						<li id="tab2"><a href='javascript:cambiarTab(tabs,tab2);'>Acerca de</a></li>
						<li id="tab3"><a href='javascript:cambiarTab(tabs,tab3);'>Autores</a></li>
					</ul>
				</div>
			</div>
		</footer>
	</body>
</html>