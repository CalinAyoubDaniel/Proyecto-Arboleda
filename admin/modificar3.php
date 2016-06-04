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
					$precio=$_REQUEST['precio'];
					$id=$_REQUEST['id'];
					$oferta=$_REQUEST['oferta'];

					mysql_query("UPDATE productos SET precio='$precio' WHERE id='$id'"); 
					mysql_query("UPDATE productos SET ofertas='$oferta' WHERE id='$id'");

					$result = mysql_query("SELECT id,nombre,precio,ofertas FROM productos where id=$id"); 
					echo "<table border = '1' class='table'>"; 
					echo "<tr><td>id</td><td>Nombre</td><td>Precio</td><td>Oferta</td></tr>"; 
					while ($fila = mysql_fetch_array($result)){ 
						echo "<tr><td>".$fila['id']."</td><td>".$fila['nombre']."</td><td>".$fila['precio']."</td><td>".$fila['ofertas']."</td></tr>"; 
						$precio=$fila['precio'];
					} 
					echo "</table>"; 

				}
				?>
			</div>
		</div>
	</div>
</div>

<?php

include('pie.php');

?>