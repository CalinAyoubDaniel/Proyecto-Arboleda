<?php

	session_start();

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>COMPONENTESPC</title>
		<!--Media Query -->
		<meta name="viewport" content="initial-scale=1">
		<!--Resolucion para pantalla profesor maximo width 1152 x 824 -->
		<link rel="stylesheet" type="text/css" href="./css/estilo.css" media="screen and (min-width: 980px)">
		<link rel="stylesheet" type="text/css" href="./css/tablet.css" media="screen and (min-width: 650px) and (max-width :980px) ">
		<link rel="stylesheet" type="text/css" href="./css/movil.css" media="screen and (max-width :650px)">

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
				<a href="./index.php"><img src="./imagenes/icono.png" alt="icono">
				<h1>COMPONENTES PC</h1></a>
			</div>
			<div id="cuerpo">
				<nav>
					<ul>
						<li class="linea"><a href="./index.php">HOME</a></li>
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
								<li class="linea">Monitores</li>
								<li class="linea">Impresoras</li>

								<li class="linea">Multifuncion</li>

								<li class="linea">Multifunciones</li>

								<li class="linea">Altavoces</li>
								<li class="linea">Teclados</li>
								<li class="linea">Ratones</li>
								<li class="linea">Auriculares</li>
							</ul>
						</li>
						<li class="linea"><a href="">ZONA APPLE</a>
							<ul class="nav2">

								<li class="linea">iPhone</li>
								<li class="linea">Accesorios iPhone</li>
								<li class="linea">Memorias USB</li>
								<li class="linea">Altavoces</li>
								<li class="linea">Auriculares</li>
								<li class="linea">Repuestos</li>
							</ul>
						</li>
						<li class="linea"><a href="">SMARTPHONE</a>
							<ul class="nav2">
								<li class="linea">Smartphones</li>
								<li class="linea">Fundas</li>
								<li class="linea">Protectores Pantalla</li>
								<li class="linea">Tarjetas MicroSD</li>
								<li class="linea">Powerbanks</li>
								<li class="linea">Accesorios</li>
							</ul>
						</li>

								<li class="linea">Iphone</li>
								<li class="linea">Accesorios</li>
								<li class="linea">Altavoces</li>
								<li class="linea">Auriculares</li>
								<li class="linea">Respuestos</li>
							</ul>
						</li>
						<li class="linea"><a href="">SMARTPHONES</a>
							<ul class="nav2">
								<li class="linea">Smartphones</li>
								<li class="linea">Fundas</li>
								<li class="linea">Protectores de Pantalla</li>
								<li class="linea">Tarjetas MicroSD</li>
								<li class="linea">Powerbanks</li>
							</ul>
						</li>
							

					</ul>
				</nav>
				<div id="primero">
					<h3>La tienda de tecnología online líder por precio, calidad y servicio</h3>
					<div id="primero1">
						<?php
							if(isset($_SESSION['correo'])){
						?>
							<a href="./php/panel.php">Bienvenido: <?php echo $_SESSION['correo']; ?>
							<img src="./imagenes/icono_persona.png" alt="persona"></a>
						<?php
							}else{


						?>
						<a href="./php/registro.php">Identifícate
						<img src="./imagenes/icono_persona.png" alt="persona"></a>
						<?php
							}
						?>
					</div>
					<div id="primero2">
						<a href="./php/carritodecompras.php">
						<img src="./imagenes/cesta.png" alt="persona"></a>
					</div>
				</div>
				<div id="segundo">
					<div id="slider">
						<div class="elemento">
							<a href=""><img src="./imagenes/banner-msi.jpg" alt="imagen1"></a>
						</div>
						<div class="elemento">
							<a href=""><img src="./imagenes/banner-portatil.jpg" alt="imagen2"></a>
						</div>
						<div class="elemento">
							<a href=""><img src="./imagenes/banner-RT.jpg" alt="imagen3"></a>
						</div>
					</div>
				</div>
				<div class="oferta"><h3>OFERTAS DE LA SEMANA</h3></div>
				<div id="tabla">
					<table>
						<tr>
					<?php
						include "./php/conexion.php";
						$re = mysql_query("select * from productos")or die(mysql_error());
						$cont = 1;

						while ($f = mysql_fetch_array($re)) {

							if ($cont <= 3) {
							
					?>	
								<td>
									
									<img class="imagenes" src="./imagenes/<?php echo $f['imagen'];?>">
									<h3 class="titulos"><?php echo $f['nombre'];?></h3>
									<h3 class="titulos"><?php echo $f['precio'];?><span>€</span></h3>
									<a href="./php/detalles.php?id=<?php echo $f['id'];?>">Ver</a>
								</td>
					<?php
							$cont++;
							}else{
					?>
								</tr>
								<tr>
									<td>
									
									<img class="imagenes" src="./imagenes/<?php echo $f['imagen'];?>">
									<h3 class="titulos"><?php echo $f['nombre'];?></h3>
									<h3 class="titulos"><?php echo $f['precio'];?><span>€</span></h3>
									<a href="./php/detalles.php?id=<?php echo $f['id'];?>">Ver</a>
									
								</td>
					<?php
							$cont=1;
							$cont++;
							}
						}
					?>	
					</table>
				</div>
			</div>
			<div id="pie">
				
			</div>
		</div>
	</body>
</html>