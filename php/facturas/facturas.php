<?php
	include '../conexion.php';
	if(isset($_REQUEST['correo'])){
		$correo = $_REQUEST['correo'];
		$consultaU = mysql_query("select * from usuarios where correo like '$correo'")or die(mysql_error());
		$usuario = mysql_fetch_row($consultaU);

		$dni = $usuario[3];

		$consultaC = mysql_query("select * from compras where dni like '$dni'")or die(mysql_error());
		echo "<h1>Pedidos</h1>";
		echo "<table>";
		echo "<tr class='colorTabla'><td>Nombre Articulo</td><td>Precio</td><td>Cantidad</td><td>Subtotal</td></tr>";
		while ($compras = mysql_fetch_row($consultaC)) {
			
			echo "<tr>";
				echo "<td>".$compras[3]."</td>";
				echo "<td>".$compras[4]."</td>";
				echo "<td>".$compras[5]."</td>";
				echo "<td>".$compras[6]."</td>";
			echo "</tr>";
		}
		echo "</table>";
		echo "<br>Para descargar Factura en PDF pulse <a href='../php/pdf/factura.php'>aquí</a>";
	}
	
	
?>