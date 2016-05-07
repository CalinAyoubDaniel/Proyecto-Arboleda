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
								<li class="linea"><a href="./piezas/Componentes/placas/placas.php" target="">Placas base</a></li>
								<li class="linea"><a href="./piezas/Componentes/procesadores/procesadores.php" target="">Procesadores</a></li>
								<li class="linea"><a href="./piezas/Componentes/discos duros/discos.php" target="">Discos Duros</a></li>
								<li class="linea"><a href="./piezas/Componentes/graficas/graficas.php" target="">Tarjetas Gráficas</a></li>
								<li class="linea"><a href="./piezas/Componentes/memorias ram/ram.php" target="">Memorias RAM</a></li>
								<li class="linea"><a href="./piezas/Componentes/fuentes/fuentes.php" target="">Fuentes de A.</a></li>
								<li class="linea"><a href="./piezas/Componentes/cajas/cajas.php" target="">Cajas/Torres</a></li>
							</ul>
						</li>
						<li class="linea"><a href="">PERIFERICOS</a>
							<ul class="nav2">
								<li class="linea"><a href="./piezas/Perifericos/monitores/monitores.php" target="">Monitores</a></li>
								<li class="linea"><a href="./piezas/Perifericos/impresoras/impresoras.php" target="">Impresoras</a></li>
								<li class="linea"><a href="./piezas/Perifericos/multifuncion/multifunciones.php" target="">Multifunciones</a></li>
								<li class="linea"><a href="./piezas/Perifericos/altavoces/altavoces.php" target="">Altavoces</a></li>
								<li class="linea"><a href="./piezas/Perifericos/teclados/teclados.php" target="">Teclados</a></li>
								<li class="linea"><a href="./piezas/Perifericos/ratones/ratones.php" target="">Ratones</a></li>
								<li class="linea"><a href="./piezas/Perifericos/auriculares/auriculares.php" target="">Auriculares</a></li>
							</ul>
						</li>
						<li class="linea"><a href="">ZONA APPLE</a>
							<ul class="nav2">
								<li class="linea"><a href="./piezas/Zona Apple/iphone/iphone.php" target="">Iphone</a></li>
								<li class="linea"><a href="./piezas/Zona Apple/accesorios/accesorios.php" target="">Accesorios</a></li>
								<li class="linea"><a href="./piezas/Zona Apple/repuestos/repuestos.php" target="">Repuestos</a></li>
							</ul>
						</li>
						<li class="linea"><a href="">SMARTPHONE</a>
							<ul class="nav2">
								<li class="linea"><a href="./piezas/Smartphones/telefonos/telefonos.php" target="">Smartphones</a></li>
								<li class="linea"><a href="./piezas/Smartphones/fundas/fundas.php" target="">Fundas</a></li>
								<li class="linea"><a href="./piezas/Smartphones/protectores/protectores.php" target="">Protectores de Pantalla</a></li>
								<li class="linea"><a href="./piezas/Smartphones/tarjetas/tarjetas.php" target="">Tarjetas MicroSD</a></li>
								<li class="linea"><a href="./piezas/Smartphones/powerbanks/power.php" target="">Powerbanks</a></li>
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