<?php
	include '../conexion.php';
	if(isset($_REQUEST['admin'])){
		$nombre = $_REQUEST['admin'];
		$consultaU = mysql_query("select * from administradores where nombre like '$nombre'")or die(mysql_error());
		?>
		<table>
			<tr class="info-table">
				<td>Dni/Nie</td>
				<td>Nombre</td>
				<td>Clave</td>
			</tr>
			<tr>
				<?php
					
					while($usuario = mysql_fetch_row($consultaU)){
						foreach ($usuario as $key => $value) {
							
				?>
								<td><?php echo $value; ?></td>
						
				<?php
							
						}
					}
				?>
			</tr>
		</table>
		<?php

		}

	?>

	
