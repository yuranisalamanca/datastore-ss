<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/main.css">
		<script src="<?php echo base_url(); ?>js/vendor/jquery-1.11.2.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>js/indexjs.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>js/spacuenta.js"></script>
		<link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap.css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap-responsive.css" />
        <script type="text/javascript" src="<?php echo base_url(); ?>js/bootstrap.js"></script>
   		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/plantilla.css">

		<title>Gestor de Archivos Multiplataforma</title>

	</head>
	<body>
		<div class="barraCuenta">	
			<ul class="listabarraprincipal">
				<li><a href="index.html">Iniciar Sesi&oacute;n</a></li>
			</ul>
		</div>

<div class="navbar navbar-inverse navbar-fixed-top">
                <div class="navbar-inner">
                    <div class="container">
                        <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="brand" href="index.php">TUTORIALES</a>
                        <div class="nav-collapse collapse">
                            <ul class="nav">        
<li class="link_tutorial">
                    <a href="" id="link_drive">Informacion Drive</a>                                   
                </li>                                
                <li class="link_tutorial">                               
                    <a href="#" id="link_dropbox">Informacion Dropbox</a>
                </li>
                <li class="link_tutorial">                               
                    <a href="#" id="link_mega">Informacion Mega</a>
                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>


		<div class="nav-collapse collapse">
            <ul class="nav">        

                <li class="link_tutorial">
                    <a href="" id="link_drive">Informacion Drive</a>                                   
                </li>                                
                <li class="link_tutorial">                               
                    <a href="#" id="link_dropbox">Informacion Dropbox</a>
                </li>
                <li class="link_tutorial">                               
                    <a href="#" id="link_mega">Informacion Mega</a>
                </li>

            </ul>
        </div>

        <div class="span8 hero-unit">

		<div class="cuerpoCuenta">
			<form method="post" action="" class="">
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
					<input type="submit" class="buttonCrearCuenta" value="Crear cuenta">

				</fieldset>
			</form>
		</div>
	</div>
	</body>
</html>