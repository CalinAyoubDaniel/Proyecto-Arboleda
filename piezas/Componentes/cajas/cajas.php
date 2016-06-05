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
				<div class="oferta"><h3>Cajas/Torres</h3></div>
				<div class="row">
							<?php
							$re = mysql_query("select * from productos where tipo = 'torres' ")or die(mysql_error());
							$cont = 0;

							while ($f = mysql_fetch_array($re)) {

								if ($cont == 3) {

									?>

								</div>
								<div class="row">

								<?php
								$cont = 0;
							}
							?>

							<div class="col-md-4 ">
								<div class="col-md-12 ">
									<img class="imagenes" src="../../../imagenes/<?php echo $f['imagen'];?>">
								</div>
								<div class="col-md-12 ">
									<?php echo $f['nombre'];?>
								</div>
								<div class="col-md-12 ">
									<?php echo $f['precio'];?><span>€</span>
								</div>
								<div class="col-md-12 ">
									<a href="./detalles.php?id=<?php echo $f['id'];?>">Ver</a>
								</div>
							</div>



							<?php
							$cont++;
						}
						?>	
					</div>
				</div>
			</div>
			<?php
				include("../../../php/pie.php");
			?>
		</div>
	</body>
</html>