<!DOCTYPE html>
<html>
	<head>
		<title>Gestor de Archivos Multiplataforma</title>
		<link rel="stylesheet" type="text/css" href="../css/plantilla.css">
		<link rel="stylesheet" type="text/css" href="../css/main.css">
		<script src="../js/vendor/jquery-1.11.2.min.js"></script>
		<script type="text/javascript" src="../js/cambiarPestanna.js"></script>
	</head>
	<body>
		<header class="tituloheader">
			<div class="barracolores"></div>
			<img class="titulobarra" src="../img/titulos4.png">
			<div class="barracolores"></div>			
		</header>
		<div class="barraCuenta">
			<nav class="bienvenidobarra">
				<a href="">Bienvenido: 
					<?php SESSION_START(); 
					if($_SESSION==null){
						echo '';
					}else{
						echo $_SESSION['nombre'] . " " . $_SESSION['apellido'];
					}
				?></a>
			</nav>
			<ul class="listabarraprincipal">
				<li><a href="../php/logout.php">Cerrar Sesi&oacute;n</a></li>
			</ul>	
		</div>
		<div class="imagen">
				<img src="../img/logo2.png">
			</div>
		<div class="contenido">	
			<div id="pestanas">
	            <ul id="lista">
	                <li id="pestana1"><a href='javascript:cambiarPestanna(pestanas,pestana1);'>Dropbox</a></li>
	                <li id="pestana2"><a href='javascript:cambiarPestanna(pestanas,pestana2);'>Google Drive</a></li>
	                <li id="pestana3"><a href='javascript:cambiarPestanna(pestanas,pestana3);'>Mega</a></li>
	            </ul>
	        </div>
	        
        	<body onload="javascript:cambiarPestanna(pestanas,pestana1);">
 
	        <div id="contenidopestanas">
	            <div id="cpestana1">
	                Dropbox
	            </div>
	            <div id="cpestana2">
	                Google Drive
	        	</div>
	        	<div id="cpestana3">
	        		Mega
	        	</div>
	        </div>
			<aside class = "aside">
			</aside>
			</div>
		<footer>
			
		</footer>

	</body>
</html>