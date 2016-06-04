<?php

include('cabecera.php');


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
			<div class="col-md-10 col-md-offset-1">
				<?php 
				if (isset($_REQUEST['enviar'])) {
					include ("conexion.php");

					$id=$_REQUEST['id'];
					$precio=0;
					$oferta="";
					$result = mysql_query("SELECT id,nombre,precio,ofertas FROM productos where id=$id"); 
					echo "<table border = '1' class='table'>"; 
					echo "<tr><td>id</td><td>Nombre</td><td>Precio</td><td>Oferta</td></tr>"; 
					while ($fila = mysql_fetch_array($result)){ 
						echo "<tr><td>".$fila['id']."</td><td>".$fila['nombre']."</td><td>".$fila['precio']."</td><td>".$fila['ofertas']."</td></tr>"; 
						$precio=$fila['precio'];
						$oferta=$fila['ofertas'];
					} 
					echo "</table>"; 
					echo "";
				}
				?>
			</div>
			<div class="form-group">
				<div class="col-md-8 col-md-offset-2">
					<h3>MODIFICAR PRODUCTO</h3>
				</div>
				<div class="col-md-4 col-md-offset-2">
					<form action="modificar3.php" method="POST">
						<label for="precio">Precio</label>
						<input type=text name=precio value="<?php echo $precio?>" class="form-control">
						<input type=hidden name=id value="<?php echo $id?>" >
						<label for="oferta">Oferta</label>
						<?php if($oferta!="si"){?>
						<select name=oferta class="form-control">
							<option value=no>NO</option>
							<option value=si>SI</option>
						</select>
						<?php }else{?>
						<select name=oferta class="form-control">
							<option value=si>SI</option>
							<option value=no>NO</option>
						</select>
						<?php }?>
						<input type=submit name=enviar value="Modificar Producto" class="btn btn-default">
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<?php

include('pie.php');

?>

	