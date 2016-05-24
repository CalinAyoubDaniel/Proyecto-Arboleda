<?php
include("./conexion.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php
	include("./cabecera_panel.php")
	?>

	
</head>

<body>
	

	<div class="container">

		<?php
		include("./menu_panel.php")
		?>
		<div class="col-md-12" id="contenido">

			

					<div class="col-md-8 col-md-offset-2" id="segundo">
						<?php
							include("./carrusel_panel.php")
						?>
					</div>

				<div class="panel">
					<div class="row contenedor-panel">
						<div class="col-md-4">
							<button id="factura" value="<?php echo $_SESSION['correo']; ?>"><img src="../imagenes/facturas.png"></button>
						</div>
						<div class="col-md-4">
							<button id="datos" value="<?php echo $_SESSION['correo']; ?>"><img src="../imagenes/datos.png"></button>
						</div>
						<div class="col-md-4">
							<button><a href="./informacion/salir.php"><img src="../imagenes/salir.png"></a></button>
						</div>
						
					</div>
					
					
					<script type="text/javascript" src="../jquery/panel.js"></script>
					<div class="col-md-12 paneles" id="lista">
						
					</div>
					<div class="cambio">
						<div class="col-md-12 paneles-2">
						<h2>Introduce los nuevos datos.</h2>
							<table>
							<form action='./informacion/cambiar.php' method='POST'>
									<tr><td>dni: </td><td><input type="text" name="dni"></td></tr>
									<tr><td>Nombre: </td><td><input type="text" name="nombre"></td></tr>
									<tr><td>Apellidos: </td><td><input type="text" name="apellidos"></td></tr>
									<tr><td>Direccion: </td><td><input type="text" name="direccion"></td></tr>
									<tr><td>Pais: </td><td><input type="text" name="pais"></td></tr>
									<tr><td>C-P: </td><td><input type="text" name="cp"></td></tr>
									<tr><td>Poblacion: </td><td><input type="text" name="poblacion"></td></tr>
									<tr><td>Provincia: </td><td><input type="text" name="provincia"></td></tr>
									<tr><td>Telefono: </td><td><input type="text" name="telefono"></td></tr>
									<tr><td>Fecha de Nacimiento: </td><td><input type="date" name="fecha"></td></tr>
									<tr><td>Correo electrónico: </td><td><input type="email" name="correo" id="correo"></td></tr>
									<tr><td>Clave: </td><td><input type="password" name="pass" id="pass"></td></tr>
									<tr><td>Repetir Clave: </td><td><input type="password" name="passcom" id="passcom"></td></tr>
									<tr><td><input type="checkbox" name="politica"></td><td>He leído y aceptado la <b>política de Privacidad</b>.</td></tr>
									<tr><td>Tipo de Cliente: </td><td><select name="tipo">
										<option value=""></option>
										<option value="Particular/autónomo">Particular / Autónomo</option>
										<option value="Empresa">Empresa</option>
									</select></td></tr>
									<tr><td><input type="submit" name="actualizar" value="Actualizar Datos"></td></tr>
							</form>
						
					</table>
					</div>
				</div>
					

				</div>
		<?php
		include("./pie.php")
		?>
	</body>
</html>