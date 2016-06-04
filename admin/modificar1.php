<?php

include('cabecera.php');


?>

<?php 
if (isset($_REQUEST['enviar'])) {
	include ("conexion.php");

	$tipo=$_REQUEST['tipo'];
	
	
	$resultado = mysql_query("SELECT DISTINCT id,nombre,precio,ofertas FROM productos WHERE tipo like '$tipo'");
}
?>
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
					<h3>SELECIONA PRODUCTO</h3>
				</div>
				<div class="col-md-12">
					<form action="modificar2.php" method=post>
						<table border=3 class="table">
							<tr><td>Seleccionar</td><td>Nombre</td><td>Precio</td><td>Ofertas</td></tr>
							<?php while($fila = mysql_fetch_array($resultado)){ ?>
							<tr>

								<td><input type="radio" name="id" value='<?php echo $fila['id'] ?>'></td>
								<td><?php echo $fila['nombre']?></td>
								<td><?php echo $fila['precio'] ?></td>
								<td><?php echo $fila['ofertas']?></td>
							</tr>
							<?php } ?>
						</table>
						<input type=submit value='Seleccionar' name=enviar class="btn btn-default">
					</form>
				</div>

			</div>
		</div>
	</div>
	
	<?php

	include('pie.php');

	?>