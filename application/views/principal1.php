<!DOCTYPE html>
<html>
	<head>
		<title>Gestor de Archivos Multiplataforma</title>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/plantilla.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/main.css">
		<script src="<?php echo base_url(); ?>js/vendor/jquery-1.11.2.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>js/indexjs.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>js/cambiarPestanna.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>js/acordiondrive.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>js/indexjs.js"></script>
	</head>
	<body>
		<div class="barraCuenta">
			<nav class="bienvenidobarra">
				<a href="">Bienvenido: 
					<?php 
					if(!isset($_COOKIE["val"])){
						echo '';
					}else{
						echo $_COOKIE['val']['name']. " ". $_COOKIE['val']['apellido'] ;						
					}
				?></a>
			</nav>
			<ul class="listabarraprincipal">
				<li><a href="">Cerrar Sesi&oacute;n</a></li>
			</ul>	
		</div>
		<div class="imagen">
			<img src="<?php echo base_url(); ?>fonts/img/este.png">
		</div>
		
		<div class="contenido">	
			<div id="pestanas">
	            <ul id="lista">
	                <li id="pestana1"><a href='javascript:cambiarPestanna(pestanas,pestana1);'>Dropbox</a></li>
	                <li id="pestana2"><a href='javascript:cambiarPestanna(pestanas,pestana2);'>Google Drive</a></li>
	                <li id="pestana3"><a href='javascript:cambiarPestanna(pestanas,pestana3);'>Mega</a></li>
	            </ul>
	        </div>
	        
        	<body onload="javascript:cambiarPestanna(pestanas,pestana1);"/>
 
	        <div id="contenidopestanas">
	            <div id="cpestana1">
	                Dropbox
	            </div>

	            <div id="cpestana2">
	            	<section class="acordion">
	            	<ul>
	            		<li><a class="titulo" href='#'><span>Mi Unidad</span></a>
	            			<ul class="block">
	            				<?php $result = $_SESSION['result'];
	            				foreach ($result as $value) {?>
	            				<li><a href='#'><span><?php echo $value["title"]; ?></span></a></li>
	            				<?php } ?>
	            				<li><a href='#'><span>Documento 2</span></a></li>
	            				<li><a href='#'><span>Documento 3</span></a></li>
	            				<li><a href='#'><span>Documento 4</span></a></li>
	            			</ul>
	            		</li>
            			<li><a class="titulo" href='#'><span>Compartidos Conmigo</span></a>
            				<ul class="block">
            					<li><a href='#'><span>Documento 1</span></a></li>
            					<li><a href='#'><span>Documento 2</span></a></li>
            					<li><a href='#'><span>Documento 3</span></a></li>
            					<li><a href='#'><span>Documento 4</span></a></li>
            				</ul>
            			</li>
	            	</ul>
	            	</section>
	              
	        	</div>
	        	<div id="cpestana3">
	        		Mega
	        	</div>
	        </div>
		</div>


	</body>
</html>