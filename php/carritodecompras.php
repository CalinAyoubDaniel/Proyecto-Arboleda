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

		<link rel="stylesheet" type="text/css" href="../css/estilo.css">
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
						<a href="#">
						<img src="../imagenes/cesta.png" alt="persona"></a>
					</div>
				</div>
				<div id="carrito">
					<table>
						
						<?php
							if(isset($_SESSION['carrito'])){
								$datos = $_SESSION['carrito'];
								$total = 0;
								
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
								echo "<tr><td id='total'><h2>Total: </h2></td><td><h2>".$total."</h2></td></tr>";
							}else{
								echo "<h2>El carrito de compras está vacio.</h2>";
							}
							
						?>
					</table>
					<p><a href="../index.php">Ver Catalogo</a></p>
				</div>
			</div>	
		</div>

	</body>
</html>
