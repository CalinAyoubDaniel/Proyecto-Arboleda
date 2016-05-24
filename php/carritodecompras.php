<?php
include("./conexion.php");
session_start();
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
	<?php
	include("./cabecera_carrito.php");
	?>

</head>

<body>
	

	<div class="container">

		<?php
		include("./menu_carrito.php");
		?>
		<div class="col-md-12" id="contenido">

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
					<p><a href="./informacion/vaciar_carrito.php">Vaciar carrito</a></p>
				</div>
			</div>	
		</div>
		<?php
			include("./pie.php")
		?>
	</body>
</html>
