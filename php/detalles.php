
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>COMPONENTESPC</title>

		<link rel="stylesheet" type="text/css" href="../css/estilo.css">

		<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js' type='text/javascript'/> </script>
		<script type="text/javascript">//<![CDATA[
			$(function(){
			    $('#slider div:gt(0)').hide();
			    setInterval(function(){
			      $('#slider div:first-child').fadeOut(0)
			         .next('div').fadeIn(1000)
			         .end().appendTo('#slider');}, 4000);
			});
			//]]>
		</script>﻿
	</head>
	<body>
		<div id="contenido">
			<div id="cabecera">
				<a href="../index.php"><img src="../imagenes/icono.png" alt="icono">
				<h1>COMPONENTES PC</h1></a>
			</div>
			<div id="cuerpo">
				<nav >
					<ul >
						<li class="linea"><a href="../index.php">HOME</a></li>
						<li class="linea"><a href="">COMPONENTES</a>
							<ul class="nav2">
								<li class="linea">Placa base</li>
								<li class="linea">Procesadores</li>
								<li class="linea">Discos Duros</li>
								<li class="linea">Tarjetas Gráficas</li>
								<li class="linea">Memoria RAM</li>
								<li class="linea">Fuentes de A.</li>
								<li class="linea">Cajas/Torres</li>
							</ul>
						</li>
						<li class="linea"><a href="">PERIFERICOS</a>
							<ul class="nav2">
								<li class="linea">Placa base</li>
								<li class="linea">Procesadores</li>
								<li class="linea">Discos Duros</li>
								<li class="linea">Tarjetas Gráficas</li>
								<li class="linea">Memoria RAM</li>
								<li class="linea">Fuentes de A.</li>
								<li class="linea">Cajas/Torres</li>
							</ul>
						</li>
						<li class="linea"><a href="">ZONA APPLE</a></li>
						<li class="linea"><a href="">SMARTPHONE</a></li>
							
					</ul>
				</nav>
				<div id="primero">
					<h3>La tienda de tecnología online líder por precio, calidad y servicio</h3>
					<div id="primero1">
						<a href="">Identifícate
						<img src="../imagenes/icono_persona.png" alt="persona"></a>
					</div>
					<div id="primero2">
						<a href="./carritodecompras.php">
						<img src="../imagenes/cesta.png" alt="persona"></a>
					</div>
				</div>
				<div id="tercero">
					<?php
					include 'conexion.php';
					$cons = mysql_query("select * from productos where id=".$_REQUEST['id']) or die ("Error en la consulta");

					$f = mysql_fetch_array($cons);
					?>
					<div class="imagen">
						<img src="../imagenes/<?php echo $f['imagen'];?>">
					</div>
					<div class="info">
						<h3 class="titulos"><?php echo $f['nombre'];?></h3>
						<p class="titulos"><?php echo $f['descripcion'];?></p>
						<h1 class="titulos"><?php echo $f['precio'];?><span>€</span></h1>
						<a href="./carritodecompras.php?id=<?php echo $f['id'];?>">Añadir al Carrito</a>
					</div>
				</div>

				</div>	
			</div>

	</body>
</html>
