<?php
	session_start();
	include './conexion.php';
	if(isset($_SESSION['carrito'])){
		if(isset($_REQUEST['id'])){
				$array=$_SESSION['carrito'];
				$encontro = false;
				$numero = 0;
				for ($i=0; $i <count($array) ; $i++) { 
					if ($array[$i]['Id']==$_REQUEST['id']) {
						$encontro = true;
						$numero = $i;
					}
				}
				if($encontro==true){
					$array[$numero]['Cantidad']=$array[$numero]['Cantidad']+1;
					$_SESSION['carrito']=$array;
				}else{
					$nombre="";
					$precio=0;
					$imagen="";
					$re=mysql_query("select * from productos where id=".$_REQUEST['id']);
					while ($f=mysql_fetch_array($re)) {
						$nombre=$f['nombre'];
						$precio=$f['precio'];
						$imagen=$f['imagen'];
					}
					$arrayNuevo=array(
						'Id'=>$_REQUEST['id'],
						'Nombre'=>$nombre,
						'Precio'=>$precio,
						'Imagen'=>$imagen,
						'Cantidad'=>1
					);
					array_push($array, $arrayNuevo);
					$_SESSION['carrito']=$array;
				}
			}

	}else{
		if(isset($_REQUEST['id'])){
			$nombre="";
			$precio=0;
			$imagen="";
			$re=mysql_query("select * from productos where id=".$_REQUEST['id']);
			while ($f=mysql_fetch_array($re)) {
				$nombre=$f['nombre'];
				$precio=$f['precio'];
				$imagen=$f['imagen'];
			}
			$array[]=array(
				'Id'=>$_REQUEST['id'],
				'Nombre'=>$nombre,
				'Precio'=>$precio,
				'Imagen'=>$imagen,
				'Cantidad'=>1
			);
			$_SESSION['carrito']=$array;
		}
	}

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>COMPONENTESPC</title>

		<!--Media Query -->
		<meta name="viewport" content="initial-scale=1">
		<link rel="stylesheet" type="text/css" href="../css/estilo.css" media="screen and (min-width: 980px)">
		<link rel="stylesheet" type="text/css" href="../css/tablet.css" media="screen and (min-width: 650px) and (max-width :980px) ">
		<link rel="stylesheet" type="text/css" href="../css/movil.css" media="screen and (max-width :650px)">

		<script type="text/javascript" src="../jquery/jquery-1.12.3.min.js"></script>
		<script type="text/javascript" src="../jquery/script.js"></script>
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
				<nav>
					<ul>
						<li class="linea"><a href="../index.php">HOME</a></li>
						<li class="linea"><a href="">COMPONENTES</a>
							<ul class="nav2">
								<li class="linea"><a href="../piezas/Componentes/placas/placas.php">Placas base</a></li>
								<li class="linea"><a href="../piezas/Componentes/procesadores/procesadores.php">Procesadores</a></li>
								<li class="linea"><a href="../piezas/Componentes/discos duros/discos.php">Discos Duros</a></li>
								<li class="linea"><a href="../piezas/Componentes/graficas/graficas.php">Tarjetas Gráficas</a></li>
								<li class="linea"><a href="../piezas/Componentes/memorias ram/ram.php">Memorias RAM</a></li>
								<li class="linea"><a href="../piezas/Componentes/fuentes/fuentes.php">Fuentes de A.</a></li>
								<li class="linea"><a href="../piezas/Componentes/cajas/cajas.php">Cajas/Torres</a></li>
							</ul>
						</li>
						<li class="linea"><a href="">PERIFERICOS</a>
							<ul class="nav2">
								<li class="linea"><a href="../piezas/Perifericos/monitores/monitores.php">Monitores</a></li>
								<li class="linea"><a href="../piezas/Perifericos/impresoras/impresoras.php">Impresoras</a></li>
								<li class="linea"><a href="../piezas/Perifericos/multifuncion/multifunciones.php">Multifunciones</a></li>
								<li class="linea"><a href="../piezas/Perifericos/altavoces/altavoces.php">Altavoces</a></li>
								<li class="linea"><a href="../piezas/Perifericos/teclados/teclados.php">Teclados</a></li>
								<li class="linea"><a href="../piezas/Perifericos/ratones/ratones.php">Ratones</a></li>
								<li class="linea"><a href="../piezas/Perifericos/auriculares/auriculares.php">Auriculares</a></li>
							</ul>
						</li>
						<li class="linea"><a href="">ZONA APPLE</a>
							<ul class="nav2">
								<li class="linea"><a href="../piezas/Zona Apple/iphone/iphone.php">Iphone</a></li>
								<li class="linea"><a href="../piezas/Zona Apple/accesorios/accesorios.php">Accesorios</a></li>
								<li class="linea"><a href="../piezas/Zona Apple/repuestos/repuestos.php">Repuestos</a></li>
							</ul>
						</li>
						<li class="linea"><a href="">SMARTPHONE</a>
							<ul class="nav2">
								<li class="linea"><a href="../piezas/Smartphones/telefonos/telefonos.php">Smartphones</a></li>
								<li class="linea"><a href="../piezas/Smartphones/fundas/fundas.php">Fundas</a></li>
								<li class="linea"><a href="../piezas/Smartphones/protectores/protectores.php">Protectores de Pantalla</a></li>
								<li class="linea"><a href="../piezas/Smartphones/tarjetas/tarjetas.php">Tarjetas MicroSD</a></li>
								<li class="linea"><a href="../piezas/Smartphones/powerbanks/power.php">Powerbanks</a></li>
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
							<a href="panel.php">Bienvenido: <?php echo $_SESSION['correo']; ?>
							<img src="../imagenes/icono_persona.png" alt="persona"></a>
						<?php
							}else{


						?>
						<a href="registro.php">Identifícate
						<img src="../imagenes/icono_persona.png" alt="persona"></a>
						<?php
							}
						?>
					</div>
					<div id="primero2">
						<a href="#">
						<img src="../imagenes/cesta.png" alt="persona"></a>
					</div>
				</div>
				<div id="carrito">
					<table id="detalles">
						
						<?php
						$total = 0;
							if(isset($_SESSION['carrito'])){
								$datos = $_SESSION['carrito'];
								
								for ($i=0; $i < count($datos); $i++) { 
						?>
						<tr>
							<div class="producto">
								
								
									<td><img src="../imagenes/<?php echo $datos[$i]['Imagen'];?>"></td>
									<td><?php echo $datos[$i]['Nombre'];?></td>
									<td>Precio: <?php echo $datos[$i]['Precio'];?></td>
									<td>Cantidad:
										<input type="text" value="<?php echo $datos[$i]['Cantidad'];?>"
										data-precio="<?php echo $datos[$i]['Precio'];?>"
										data-id="<?php echo $datos[$i]['Id'];?>"
										class="cantidad">
									</td>
									<td class="sub">Subtotal: <?php echo $datos[$i]['Precio']*$datos[$i]['Cantidad'];?></td>
								
							</div>
						</tr>
						<?php

							$total =($datos[$i]['Precio']*$datos[$i]['Cantidad'])+$total;

							}
							}else{
								echo "<h2>El carrito de compras está vacio.</h2>";
							}
							
							echo "<tr><td><h2>Total: </h2></td><td id='total'><h2>".$total."</h2></td></tr>";
							if($total!=0){
								echo "<tr><td><a href='./compras/compras.php'  class='aceptar' >Comprar</a></td></tr>";
							}
						?>
					</table>
					<p><a href="../index.php">Ver Catalogo</a></p>
				</div>
			</div>	
		</div>

	</body>
</html>
