<?php
	include '../conexion.php';
	if(isset($_REQUEST['correo2'])){
		$correo = $_REQUEST['correo2'];
		$consultaU = mysql_query("select * from usuarios where correo like '$correo'")or die(mysql_error());
		?>
		<table>
			<tr class="info-table">
				<td>Correo</td>
				<td>Tipo</td>
				<td>Dni/Nie</td>
				<td>Nombre</td>
				<td>Apellidos</td>
				<td>Direccion</td>
				<td>Pais</td>
				<td>Cp</td>
				<td>Provincia</td>
				<td>Localidad</td>
				<td>Nº telefono</td>
				<td>Fecha Nacimiento</td>
			</tr>
			<tr>
				<?php
					
					while($usuario = mysql_fetch_row($consultaU)){
						foreach ($usuario as $key => $value) {
							if($key == 1 || $key == 13 || $key == 14){
							}else{
				?>
								<td><?php echo $value; ?></td>
						
				<?php
							}
						}
					}
				?>
			</tr>
		</table>
		<?php

		}

	?>

	
