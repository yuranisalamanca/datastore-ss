<!DOCTYPE html>
<html>
	<head>
		<title>Gestor de Archivos Multiplataforma</title>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/plantilla.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/main.css">
		<script src="<?php echo base_url(); ?>js/vendor/jquery-1.11.2.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>js/cambiarPestanna.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>js/indexjs.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>js/acordiondrive.js"></script>
	</head>
	<body>
	<div class="cuerpo">
		<div class="barraCuenta">
			<ul class="listabarraprincipal">
			<li class="bienvenidobarra">
				<a >Bienvenido: 
					<?php 
					if(!isset($_COOKIE["val"])){
						echo '';
					}else{
						echo $_COOKIE['val']['name']. " ". $_COOKIE['val']['apellido'] ;						
					}
				?></a>
			</li>
				<li><a class="cerrarSesion" href="<?php echo site_url('usuario/logout') ?>">Cerrar Sesi&oacute;n</a></li>
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
	        
        	<body onload="javascript:cambiarPestanna(pestanas,pestana1); javascript:cambiarTab(tabs,tab1);">
 	
	        <div id="contenidopestanas">
	            <div id="cpestana1">
	                <section class="acordion">
	            	<ul>
	            		<li><a class="titulo" href='#'><span>Mi Unidad</span></a>
	            			<ul class="block">
	            				<?php 
	            				if(!isset($_COOKIE["val"])){
									echo '';
								}else{
									SESSION_START();
									$dbxClient = $_SESSION['dbxClient'];
									//$dbxClient = $_COOKIE['val']['dbxClient'];						
								}
	            				$metaData = $dbxClient->getMetadataWithChildren("/");;
	            				foreach ($metaData['contents'] as $value) {?>
	            				<li><a href='<?php echo site_url('usuario/descargar') ?>'><span><?php print_r($value['path']); echo "<br>"; ?></span></a></li>
	            				<?php } ?>
	            				<!--<li>
	            					<img src="<?php echo base_url(); ?>fonts/img/descargar.png" />

	            					<a href='#'><span>Documento 2</span></a></li>-->
	            			</ul>
	            		</li>
            			<!--<li><a class="titulo" href='#'><span>Compartidos Conmigo</span></a>
            				<ul class="block">
            					<li><a href='#'><span>Documento 1</span></a></li>
            					<li><a href='#'><span>Documento 2</span></a></li>
            					<li><a href='#'><span>Documento 3</span></a></li>
            					<li><a href='#'><span>Documento 4</span></a></li>
            				</ul>
            			</li>-->
	            	</ul>
	            	</section>    
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
	            				<!--<li>
	            					<img src="<?php echo base_url(); ?>fonts/img/descargar.png" />

	            					<a href='#'><span>Documento 2</span></a></li>-->
	            				
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

	</div>

	<footer class="footerIndex">	

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