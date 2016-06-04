<div class="col-md-12 registro2">

		<form role="form" action="#" method="POST">
			<div class="form-group">
				Nombre:
				<input type="text" class="form-control"  id="nombre" placeholder="Introduce tu nombre ">
			</div>
			<div class="form-group">
				DNI:
				<input type="text" class="form-control"  id="dni" placeholder="Introduce tu dni">
			</div>
			<div class="form-group">
				Fecha de Nacimiento:
				<input type="date" class="form-control"  id="fecha" placeholder="Introduce tu fecha">
			</div>
			<div class="form-group">
				Correo:
				<input type="email" class="form-control"  id="correo" placeholder="Introduce tu Correo">
			</div>

		<input class="btn btn-default" type="button" id="update" name="update" value="Enviar">
	</form>
</div>
	<div id="lista2"></div>
	<?php
		include("../pie.php")
	?>
