<?php
include("conexion.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php
	include("cabecera.php")
	?>

	
</head>

<body>
	

	<div class="container">

		<?php
		include("menu.php")
		?>
		<div class="col-md-12 registro2">
			<h2>Panel de inicio solo Administradores</h2>
			<form role="form" action="#" method="POST">
				<div class="form-group">
					Nombre:
					<input type="text" class="form-control"  name="nombre" placeholder="Introduce tu nombre" required>
				</div>
				<div class="form-group">
					Clave de Acceso:
					<input type="password" class="form-control"  name="clave" required>
				</div>

				<input class="btn btn-default" type="submit" name="acceso" value="Acceder">
			</form>
		</div>

		<?php
			if(isset($_REQUEST['acceso'])){
				$nombre = $_REQUEST['nombre'];
				$clave = $_REQUEST['clave'];

				$pass = sha1(md5($clave));

				$re = mysql_query("select * from administradores where nombre = '$nombre' ")or die(mysql_error());
				$f = mysql_fetch_row($re);
				if ($f[1] == $nombre && $f[2] == $pass){
					$_SESSION['admin'] = $nombre;
					header("Location: ./modificar.php");
				}else{
				?>

					<script> alert("LA CLAVE O EL NOMBRE NO SON CORRECTOS!.")</script>

				<?php
				}

			}

		?>
							
		</div> <!-- /container -->
		<?php
		include("pie.php")
		?>

	</body>
	</html>