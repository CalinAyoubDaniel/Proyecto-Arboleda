<?php
	include("./conexion.php");
	include("./expresiones.php");
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php
	include("./cabecera_carrito.php")
	?>

</head>

<body>
	

<div class="container">

		<?php
		include("./menu_registro.php")
		?>
		<div class="col-md-8 registro">
			<div class="col-md-12">
				NUEVO USUARIO
			</div>
			<dir class="col-md-12">

				<form role="form" action="#" method="POST">
					<div class="form-group">
						Nombre:
						<input type="text" class="form-control"  name="nombre" placeholder="Introduce tu nombre " required>
					</div>
					<div class="form-group">
						DNI:
						<input type="text" class="form-control"  name="dni" placeholder="Introduce tu dni" required>
					</div>
					<div class="form-group">
						Apellidos:
						<input type="text" class="form-control"  name="apellidos" placeholder="Introduce tus apellidos" required>
					</div>
					<div class="form-group">
						Direccion:
						<input type="text" class="form-control"  name="direccion" placeholder="Introduce tu direccion" required>
					</div>
					<div class="form-group">
						Pais:
						<input type="text" class="form-control"  name="pais" placeholder="Introduce tu Pais" required>
					</div>
					<div class="form-group">
						CP:
						<input type="text" class="form-control"  name="cp" placeholder="Introduce tu CP" required>
					</div>
					<div class="form-group">
						Poblacion:
						<input type="text" class="form-control"  name="poblacion" placeholder="Introduce tu Poblacion" required>
					</div>
					<div class="form-group">
						Provincia:
						<input type="text" class="form-control"  name="provincia" placeholder="Introduce tu Provincia" required>
					</div>
					<div class="form-group">
						Telefono:
						<input type="text" class="form-control"  name="telefono" placeholder="Introduce tu Telefono" required>
					</div>
					<div class="form-group">
						Fecha de Nacimiento:
						<input type="date" class="form-control"  name="fecha" placeholder="Introduce tu fecha" required>
					</div>
					<div class="form-group">
						Correo:
						<input type="email" class="form-control"  name="correo" placeholder="Introduce tu Correo" required>
					</div>
					<div class="form-group">
						Clave:
						<input type="password" class="form-control"  name="clave" placeholder="Introduce tu clave" required>
					</div>
					<div class="form-group">
						Repetir clave:
						<input type="password" class="form-control"  name="clavecom" placeholder="Introduce tu clave" required> 
					</div>
					<div class="form-group">
						<input type="checkbox" name="politica" required>He leído y aceptado la política de Privacidad
					</div>
					<div class="form-group">
						Tipo de Cliente:<select name="tipo" required>
						<option value=""></option>
						<option value="Particular/autónomo">Particular / Autónomo</option>
						<option value="Empresa">Empresa</option>
					</select>
				</div>

				<input class="btn btn-default" type="submit" name="registro" value="Enviar">
			</form>

		<?php

			if (isset($_REQUEST['registro'])) {
				
				$correo = $_REQUEST['correo'];
				$passcom = $_REQUEST['clavecom'];
				$pass = $_REQUEST['clave'];

				$clave = sha1(md5($pass));

				$tipoC = $_REQUEST['tipo'];
				$dni = $_REQUEST['dni'];
				$nombre = $_REQUEST['nombre'];
				$apellidos = $_REQUEST['apellidos'];
				$direccion = $_REQUEST['direccion'];
				$pais = $_REQUEST['pais'];
				$cp = $_REQUEST['cp'];
				$poblacion = $_REQUEST['poblacion'];
				$provincia = $_REQUEST['provincia'];
				$telefono = $_REQUEST['telefono'];
				$fechaN = $_REQUEST['fecha'];
				/*********comprobacion de datos*********/

					if(verificar_email($correo) && verificar_pass($pass) && verificar_cp($cp) && verificar_nombre($nombre) && verificar_dni($dni)){
						$re = mysql_query("select * from usuarios")or die(mysql_error());
						$f = mysql_fetch_row($re);
						if ($f[3] == $_REQUEST['dni']) {
							echo "<script> alert('El usuario ya existe en la base de datos.'); </script>";
						}else{
							if($pass == $passcom){
								mysql_query("insert into usuarios (correo, clave, tipoC, dni, nombre, apellidos, direccion, pais, cp, poblacion, provincia, telefono, fechaN, intentos, estado) values ('$correo','$clave','$tipoC','$dni','$nombre','$apellidos','$direccion','$pais','$cp'
									,'$poblacion','$provincia','$telefono','$fechaN','0','activado')")or die(mysql_error());
								header("Location: ./registro2.php");
							}

						}
					}else{
						echo "<script> alert('El formato del correo debe ser nombre@dominio.com, La contraseña debe contener 10 caracteres o más, el cp 5 digitos.'); </script>";
					}

				/********fin***************************/


				
		}



		?>


		</div>
			<div class="col-md-4 registro">
				<div class="col-md-12">
					<h1>Usuario registrado</h1>
					<hr>
					<table>
						<form role="form" method="POST" action="#">
							<div class="form-group">
								Correo:
								<input type="email" class="form-control"  name="correo" placeholder="Introduce tu Correo" required>
							</div>
							<div class="form-group">
								Clave:
								<input type="password" class="form-control"  name="clave" placeholder="Introduce tu clave" required>
							</div>
							<input class="btn btn-default" type="submit"  id="acceder" name="acceder" value="Enviar">
							<br>
							<br>
							<div class="form-group" id="recordar">
								<input class="btn btn-default" type="button" name="recordar" value="Recordar">
							</div>
							
						</form>
					</table>
				</div>
				<?php
					if(isset($_REQUEST['acceder'])){

						$correo = $_REQUEST['correo'];
						$pass = $_REQUEST['clave'];
						$clave = sha1(md5($pass));
						$re = mysql_query("select * from usuarios where correo = '$correo'")or die(mysql_error());
						$f = mysql_fetch_row($re);
						if($f[0] == $correo && $f[1] == $clave && $f[13] < 3 ) {
							$_SESSION['correo'] = $correo;
							header("Location: ../index.php");
							mysql_query("update usuarios set intentos = 0 where correo like '$correo'")or die(mysql_error());
						}else if($f[13] == 3 && $f[14] == "activado"){
							mysql_query("update usuarios set estado = 'bloqueado' where correo like '$correo'")or die(mysql_error());
						?>
							<script> alert('Cuenta Bloqueada');</script>
						<?php
						}else{
							mysql_query("update usuarios set intentos = intentos + 1 where correo like '$correo'")or die(mysql_error());
						?>
							<script> alert('Clave o Correo Incorrectos.'); </script>
						<?php
						}
						
					}

				?>
			</div>
			<div id="lista">
				
			</div>
	</div>
		<?php
		include("./pie.php")
		?>
</body>
</html>

