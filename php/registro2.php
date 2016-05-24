

<?php
	include("./conexion.php");
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
<div class="col-md-8">
	<div class="col-md-12">
		NUEVO USUARIO
	</div>
	<dir class="col-md-12">

		<form role="form" action="#" method="POST">
			<div class="form-group">
				Nombre:
				<input type="text" class="form-control"  name="nombre" placeholder="Introduce tu nombre ">
			</div>
			<div class="form-group">
				DNI:
				<input type="text" class="form-control"  name="dni" placeholder="Introduce tu dni">
			</div>
			<div class="form-group">
				Apellidos:
				<input type="text" class="form-control"  name="apellidos" placeholder="Introduce tus apellidos">
			</div>
			<div class="form-group">
				Direccion:
				<input type="text" class="form-control"  name="direccion" placeholder="Introduce tu direccion">
			</div>
			<div class="form-group">
				Pais:
				<input type="text" class="form-control"  name="pais" placeholder="Introduce tu Pais">
			</div>
			<div class="form-group">
				CP:
				<input type="text" class="form-control"  name="cp" placeholder="Introduce tu CP">
			</div>
			<div class="form-group">
				Poblacion:
				<input type="text" class="form-control"  name="poblacion" placeholder="Introduce tu Poblacion">
			</div>
			<div class="form-group">
				Provincia:
				<input type="text" class="form-control"  name="provincia" placeholder="Introduce tu Provincia">
			</div>
			<div class="form-group">
				Telefono:
				<input type="text" class="form-control"  name="telefono" placeholder="Introduce tu Telefono">
			</div>
			<div class="form-group">
				Fecha de Nacimiento:
				<input type="date" class="form-control"  name="fecha" placeholder="Introduce tu fecha">
			</div>
			<div class="form-group">
				Correo:
				<input type="email" class="form-control"  name="correo" placeholder="Introduce tu Correo">
			</div>
			<div class="form-group">
				Clave:
				<input type="password" class="form-control"  name="clave" placeholder="Introduce tu clave">
			</div>
			<div class="form-group">
				Repetir clave:
				<input type="password" class="form-control"  name="clavecom" placeholder="Introduce tu clave">
			</div>
			<div class="form-group">
				<input type="checkbox" name="politica">He leído y aceptado la política de Privacidad
			</div>
			<div class="form-group">
				Tipo de Cliente:<select name="tipo">
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

		$re = mysql_query("select * from usuarios")or die(mysql_error());
		$f = mysql_fetch_row($re);
		if ($f[3] == $_REQUEST['dni']) {
			echo "<script> alert('El usuario ya existe en la base de datos.'); </script>";
		}else{
			if($pass == $passcom){
				mysql_query("insert into usuarios (correo, clave, tipoC, dni, nombre, apellidos, direccion, pais, cp, poblacion, provincia, telefono, fechaN) values ('$correo','$clave','$tipoC','$dni','$nombre','$apellidos','$direccion','$pais','$cp'
					,'$poblacion','$provincia','$telefono','$fechaN')")or die(mysql_error());
				header("Location: ./registro2.php");
			}

		}
}



?>





</div>
	<div class="col-md-4">
		<div class="col-md-12">
			<h1>Usuario registrado</h1>
			<hr>
			<table>
				<form role="form" method="POST" action="#">
					<div class="form-group">
						Correo:
						<input type="email" class="form-control"  name="correo" placeholder="Introduce tu Correo">
					</div>
					<div class="form-group">
						Clave:
						<input type="password" class="form-control"  name="clave" placeholder="Introduce tu clave">
					</div>
					<input class="btn btn-default" type="submit" name="acceder" value="Enviar">

					<input class="btn btn-default" type="submit" name="recordar" value="Recordar Clave">
					
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
				if (isset($_SESSION['errores'])) {
					
				}else{
					$_SESSION['errores'] = 0;
				}
				
				if ($_SESSION['errores'] < 3) {
					if($f[0] == $correo && $f[1] == $clave ) {
						$_SESSION['errores'] = 0;
						$_SESSION['correo'] = $correo;
						header("Location: ../index.php");
					}else{
						$_SESSION['errores']++;
						echo "<script> alert('Clave o Correo Incorrectos.'); </script>";
						echo $_SESSION['errores'];
					}
				}else{
					echo "<script> alert('Tienes que recordar la clave.'); </script>";
				}
			}

		?>
	</div>
		<?php
		include("./pie.php")
		?>
</body>
</html>

