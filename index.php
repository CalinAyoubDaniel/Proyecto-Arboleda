<?php
include("./php/conexion.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php
	include("./php/cabecera.php")
	?>

	
</head>

<body>
	

	<div class="container">

		<?php
		include("./php/menu.php")
		?>
		<div class="col-md-12" id="contenido">

			

					<div class="col-md-8 col-md-offset-2" id="segundo">
						<?php
							include("./php/carrusel.php")
						?>
					</div>

					<div class="col-md-8 col-md-offset-2 oferta" ><h3>OFERTAS DE LA SEMANA</h3></div>
					<div class="col-md-12">
						<div class="row">
							<?php
							$re = mysql_query("select * from productos")or die(mysql_error());
							$cont = 0;

							while ($f = mysql_fetch_array($re)) {

								if ($cont == 3) {

									?>

								</div><div class="row">

								<?php
								$cont = 0;
							}
							?>

							<div class="col-md-4 ">
								<div class="col-md-12 ">
									<img class="imagenes" src="./imagenes/<?php echo $f['imagen'];?>">
								</div>
								<div class="col-md-12 ">
									<?php echo $f['nombre'];?>
								</div>
								<div class="col-md-12 ">
									<?php echo $f['precio'];?><span>€</span>
								</div>
								<div class="col-md-12 ">
									<a href="./php/detalles.php?id=<?php echo $f['id'];?>">Ver</a>
								</div>
							</div>



							<?php
							$cont++;
						}
						?>	
					</div>
				</div>
			</div>
		</div> <!-- /container -->
		<?php
		include("./php/pie.php")
		?>

	</body>
	</html>