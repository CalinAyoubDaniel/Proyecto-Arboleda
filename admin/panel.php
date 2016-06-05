<?php
include("./conexion.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<?php
	include("./cabecera.php")
	?>

	
</head>

<body>
	

	<div class="container">

		<?php
		include("./menu.php")
		?>
		<div class="col-md-12" id="contenido">

			

					
				<div class="panel">
					<div class="row contenedor-panel ">
						<div class="col-md-4 col-xs-12 col-sm-12 botones">
							<button id="datos" value="<?php echo $_SESSION['admin']; ?>"><img src="../imagenes/datos.png"></button>
							<p>Datos personales</p>
						</div>
						<div class="col-md-4 col-xs-12 col-sm-12 botones">
							<button><a href="./informacion/salir.php"><img src="../imagenes/salir.png"></a></button>
							<p>Salir de la sesión</p>
						</div>
						
					</div>
					
					
					
					<div class="col-md-12 col-xs-12 col-sm-12 table-responsive paneles" id="listas">
						
					</div>
					<div class="cambio">
						<div class="col-md-12 col-xs-12 col-sm-12 table-responsive paneles-2">
						<h2>Introduce los nuevos datos.</h2>
							
							<table>
							<form action='./informacion/cambiar.php' method='POST'>
									<tr><td>dni: </td><td><input type="text" name="dni" required></td></tr>
									<tr><td>Nombre: </td><td><input type="text" name="nombre" required></td></tr>
									<tr><td>Clave Antigua: </td><td><input type="password" name="passA" id="passA" required></td></tr>
									<tr><td>Clave Nueva: </td><td><input type="password" name="pass" id="pass" required></td></tr>
									<tr><td>Repetir Clave: </td><td><input type="password" name="passcom" id="passcom" required></td></tr>
									<tr><td><input type="checkbox" name="politica"></td><td>He leído y aceptado la <b>política de Privacidad</b>.</td></tr>
									</select></td></tr>
									<tr><td><input type="submit" name="actualizar" value="Actualizar Datos"></td></tr>
							</form>
						
					</table>
					
					</div>
				</div>
					

			</div>
		</div>
	</div>
		<?php
		include("./pie.php")
		?>
	</body>
</html>