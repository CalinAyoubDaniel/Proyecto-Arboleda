<?php

include('./cabecera.php');

?>
<div class="container">
	<?php
		include("./menu.php");
		?>
	<div class="row">

		<div class="col-md-4">
			<?php include('./menu2.php');?>
		</div>
		<div class="col-md-8">
			<div class="form-group">
				<div class="col-md-8 col-md-offset-2">
					<h3>MODIFICAR PRODUCTO</h3>
				</div>
				<div class="col-md-4 col-md-offset-2">
					<form action="modificar1.php" method=post>
						<div class="form-group">
							<label for="tipo">Tipo</label>
							<select name="tipo" class="form-control" >
								<option value="discosduros">discosduros</option>
								<option value="fuentesalimentacion">fuentesalimentacion</option>
								<option value="graficas">graficas</option>
								<option value="placasbase">placasbase</option>
								<option value="procesadores">procesadores</option>
								<option value="ram">ram</option>
								<option value="torres">torres</option>
								<option value="accesorios_iphone">accesorios_iphone</option>
								<option value="altavoces">altavoces</option>
								<option value="auriculares">auriculares</option>
								<option value="fundas">fundas</option>
								<option value="impresoras">impresoras</option>
								<option value="iphone">iphone</option>
								<option value="monitores">monitores</option>
								<option value="multifunciones">multifunciones</option>
								<option value="powerbanks">powerbanks</option>
								<option value="protectores_pantalla">protectores_pantalla</option>
								<option value="ratones">ratones</option>
								<option value="repuestos_iphone">repuestos_iphone</option>
								<option value="tarjetassd">tarjetassd</option>
								<option value="teclados">teclados</option>
								<option value="telefonos">telefonos</option>
							</select>
						</div>
						<input type=submit name=enviar value="Seleccionar Producto" class="btn btn-default">
					</form>
				</div>
			</div>

		</div>
	</div>
</div>
<?php

include('pie.php');

?>