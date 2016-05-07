<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Detalles</title>

		<link rel="stylesheet" type="text/css" href="../../css/estilo.css">
		<link href="../../imagenes/icono2.ico" type="image/x-icon" rel="shortcut icon" />

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
				<a href="../../index.php"><img src="../../imagenes/icono.png" alt="icono">
				<h1>COMPONENTES PC</h1></a>
			</div>
			<div id="cuerpo">
				<nav >
					<ul >
						<li class="linea"><a href="../../index.php">HOME</a></li>
						<li class="linea"><a href="">COMPONENTES</a>
							<ul class="nav2">
								<li class="linea"><a href="./placas.php" target="_blank">Placas base</a></li>
								<li class="linea"><a href="./procesadores/procesadores.php" target="_blank">Procesadores</a></li>
								<li class="linea"><a href="../discos duros/discos.php" target="_blank">Discos Duros</a></li>
								<li class="linea"><a href="../graficas/graficas.php" target="_blank">Tarjetas Gráficas</a></li>
								<li class="linea"><a href="../memorias ram/ram.php" target="_blank">Memorias RAM</a></li>
								<li class="linea"><a href="../fuentes/fuentes.php" target="_blank">Fuentes de A.</a></li>
								<li class="linea"><a href="../cajas/cajas.php" target="_blank">Cajas/Torres</a></li>
							</ul>
						</li>
						<li class="linea"><a href="">PERIFERICOS</a>
							<ul class="nav2">
								<li class="linea"><a href="../../Perifericos/monitores/monitores.php" target="_blank">Monitores</a></li>
								<li class="linea"><a href="../../Perifericos/impresoras/impresoras.php" target="_blank">Impresoras</a></li>
								<li class="linea"><a href="../../Perifericos/multifuncion/multifunciones.php" target="_blank">Multifunciones</a></li>
								<li class="linea"><a href="../../Perifericos/altavoces/altavoces.php" target="_blank">Altavoces</a></li>
								<li class="linea"><a href="../../Perifericos/teclados/teclados.php" target="_blank">Teclados</a></li>
								<li class="linea"><a href="../../Perifericos/ratones/ratones.php" target="_blank">Ratones</a></li>
								<li class="linea"><a href="../../Perifericos/auriculares/auriculares.php" target="_blank">Auriculares</a></li>
							</ul>
						</li>
						<li class="linea"><a href="">ZONA APPLE</a>
							<ul class="nav2">
								<li class="linea"><a href="../../Zona Apple/iphone/iphone.php" target="_blank">Iphone</a></li>
								<li class="linea"><a href="../../Zona Apple/accesorios/accesorios.php" target="_blank">Accesorios</a></li>
								<li class="linea"><a href="../../Zona Apple/repuestos/repuestos.php" target="_blank">Repuestos</a></li>
							</ul>
						</li>
						<li class="linea"><a href="">SMARTPHONES</a>
							<ul class="nav2">
								<li class="linea"><a href="../../Smartphones/telefonos/telefonos.php" target="_blank">Smartphones</a></li>
								<li class="linea"><a href="../../Smartphones/fundas/fundas.php" target="_blank">Fundas</a></li>
								<li class="linea"><a href="../../Smartphones/protectores/protectores.php" target="_blank">Protectores de Pantalla</a></li>
								<li class="linea"><a href="../../Smartphones/tarjetas/tarjetas.php" target="_blank">Tarjetas MicroSD</a></li>
								<li class="linea"><a href="../../Smartphones/powerbanks/power.php" target="_blank">Powerbanks</a></li>
							</ul>
						</li>
					</ul>
				</nav>
				<div id="primero">
					<h3>La tienda de tecnología online líder por precio, calidad y servicio</h3>
					<div id="primero1">
						<a href="">Identifícate
						<img src="../../imagenes/icono_persona.png" alt="persona"></a>
					</div>
					<div id="primero2">
						<a href="../../carritodecompras.php">
						<img src="../../imagenes/cesta.png" alt="persona"></a>
					</div>
				</div>
				<div id="tercero">
					<?php
					include '../../php/conexion.php';
					$cons = mysql_query("select * from procesadores where id=".$_REQUEST['id']) or die ("Error en la consulta");

					$f = mysql_fetch_array($cons);
					?>
					<div class="imagen">
						<img src="./<?php echo $f['imagen'];?>">
					</div>
					<div class="info">
						<h3 class="titulos"><?php echo $f['nombre'];?></h3>
						<p class="titulos"><?php echo $f['descripcion'];?></p>
						<h1 class="titulos"><?php echo $f['precio'];?><span>€</span></h1>
						<a href="../../php/carritodecompras.php?id=<?php echo $f['id'];?>">Añadir al Carrito</a>
					</div>
				</div>

				</div>	
			</div>
	</body>
</html>