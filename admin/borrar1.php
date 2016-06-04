<?php
include("../php/conexion.php");
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
		<div class="row">

			<div class="col-md-4">
				<?php include('menu2.php');?>
			</div>
			<div class="col-md-8">
				<div class="form-group">
					<div class="col-md-8 col-md-offset-2">
						<h3>BORRAR PRODUCTO</h3>
					</div>
					<div class="col-md-12 ">

						<?php
						$tipo=$_REQUEST['tipo'];
						$sentencia = "SELECT * FROM productos WHERE tipo like '$tipo'";
						$resultado = mysql_query($sentencia);
						?>
						<div id=formulario>
							<form action="#" method=post>
								<table border=1 class="table">
									<tr><td>Borrar</td><td>Nombre</td><td>Apellidos</td><td>Telefono</td><td>Correo</td></tr>
									<?php while($fila = mysql_fetch_array($resultado)){ ?>
									<tr>
										<td><input type='checkbox' name='array[]' value='<?php echo $fila['id'] ?>' ></td>
										<td><?php echo $fila['nombre']?></td>
										<td><?php echo $fila['precio'] ?></td>
										<td><?php echo $fila['tipo']?></td>
										<td><?php echo $fila['categoria']?></td>
									</tr>
									<?php } ?>
								</table>
								<input type=submit value='Borrar' name="enviar" class="btn btn-default">
							</form>
						</div>
					</div>
				</div>
			</div>


			<?php
			if(isset ($_REQUEST['enviar'])){
				$borrar=$_REQUEST['array'];


				foreach($borrar as $v1){
					$sql = "DELETE FROM productos WHERE id='$v1'";
					$result = mysql_query($sql);
					echo "<b>Producto borrado correctamente</b><br/>";
				}

				mysql_close();

			}
			?>


			<?php
			include("../php/pie.php");
			?>	

		</body>
		</html>