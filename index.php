<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>COMPONENTESPC</title>
	

		<link rel="stylesheet" type="text/css" href="./css/estilo.css">
		<link href="./imagenes/icono2.ico" type="image/x-icon" rel="shortcut icon" />

		
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
				<nav >
					<ul >
						<li class="linea"><a href="./index.php">HOME</a></li>
						<li class="linea"><a href="">COMPONENTES</a>
							<ul class="nav2">
								<li class="linea"><a href="./Componentes/placas/placas.php" target="_blank">Placas base</a></li>
								<li class="linea"><a href="./Componentes/procesadores/procesadores.php" target="_blank">Procesadores</a></li>
								<li class="linea"><a href="./Componentes/discos duros/discos.php" target="_blank">Discos Duros</a></li>
								<li class="linea"><a href="./Componentes/graficas/graficas.php" target="_blank">Tarjetas Gráficas</a></li>
								<li class="linea"><a href="./Componentes/memorias ram/ram.php" target="_blank">Memorias RAM</a></li>
								<li class="linea"><a href="./Componentes/fuentes/fuentes.php" target="_blank">Fuentes de A.</a></li>
								<li class="linea"><a href="./Componentes/cajas/cajas.php" target="_blank">Cajas/Torres</a></li>
							</ul>
						</li>
						<li class="linea"><a href="">PERIFERICOS</a>
							<ul class="nav2">
								<li class="linea"><a href="./Perifericos/monitores/monitores.php" target="_blank">Monitores</a></li>
								<li class="linea"><a href="./Perifericos/impresoras/impresoras.php" target="_blank">Impresoras</a></li>
								<li class="linea"><a href="./Perifericos/multifuncion/multifunciones.php" target="_blank">Multifunciones</a></li>
								<li class="linea"><a href="./Perifericos/altavoces/altavoces.php" target="_blank">Altavoces</a></li>
								<li class="linea"><a href="./Perifericos/teclados/teclados.php" target="_blank">Teclados</a></li>
								<li class="linea"><a href="./Perifericos/ratones/ratones.php" target="_blank">Ratones</a></li>
								<li class="linea"><a href="./Perifericos/auriculares/auriculares.php" target="_blank">Auriculares</a></li>
							</ul>
						</li>
						<li class="linea"><a href="">ZONA APPLE</a>
							<ul class="nav2">
								<li class="linea"><a href="./Zona Apple/iphone/iphone.php" target="_blank">Iphone</a></li>
								<li class="linea"><a href="./Zona Apple/accesorios/accesorios.php" target="_blank">Accesorios</a></li>
								<li class="linea"><a href="./Zona Apple/repuestos/repuestos.php" target="_blank">Repuestos</a></li>
							</ul>
						</li>
						<li class="linea"><a href="">SMARTPHONES</a>
							<ul class="nav2">
								<li class="linea"><a href="./Smartphones/telefonos/telefonos.php" target="_blank">Smartphones</a></li>
								<li class="linea"><a href="./Smartphones/fundas/fundas.php" target="_blank">Fundas</a></li>
								<li class="linea"><a href="./Smartphones/protectores/protectores.php" target="_blank">Protectores de Pantalla</a></li>
								<li class="linea"><a href="./Smartphones/tarjetas/tarjetas.php" target="_blank">Tarjetas MicroSD</a></li>
								<li class="linea"><a href="./Smartphones/powerbanks/power.php" target="_blank">Powerbanks</a></li>
							</ul>
						</li>
							
					</ul>
				</nav>
				<div id="primero">
					<h3>La tienda de tecnología online líder por precio, calidad y servicio</h3>
					<div id="primero1">
						<a href="">Identifícate
						<img src="./imagenes/icono_persona.png" alt="persona"></a>
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
									
									<img src="./imagenes/<?php echo $f['imagen'];?>">
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
									
									<img src="./imagenes/<?php echo $f['imagen'];?>">
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