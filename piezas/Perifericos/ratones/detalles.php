<?php
include("../../../php/conexion.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php
	include("./cabecera.php");
	?>

	
</head>

<body>
	

	<div class="container">

		<?php
		include("./menu.php");
		?>
		<div class="col-md-12" id="contenido">
				<div class="row">
					<?php
					include '../../../php/conexion.php';
					$cons = mysql_query("select * from productos where tipo = 'ratones' and  id=".$_REQUEST['id']) or die ("Error en la consulta");

					$f = mysql_fetch_array($cons);
					?>
					<div class="col-md-4 ">
						<div class="col-md-12 ">
							<img class="imagenes"  src="../../../imagenes/<?php echo $f['imagen'];?>">
				 		</div>
					</div>
					<div class="col-md-12 ">
						<h3 class="titulos"><?php echo $f['nombre'];?></h3>
						<p class="titulos"><?php echo $f['descripcion'];?></p>
						<h1 class="titulos"><?php echo $f['precio'];?><span>€</span></h1>
						<a href="../../../php/carritodecompras.php?id=<?php echo $f['id'];?>">Añadir al Carrito</a>
					</div>
				</div>

		</div>
		<?php
			include("../../../php/pie.php");
		?>	
			
	</body>
</html>