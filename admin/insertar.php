<?php

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
				<div class="col-md-8 col-md-offset-4">
					<h3>INSERTAR PRODUCTO</h3>
				</div>

				<form  enctype="multipart/form-data" action="#" method="POST">
					<div class="form-group">
						<label for="nombre">Nombre</label>
						<input type="text" class="form-control" name="nombre" placeholder="Nombre">
					</div>
					<div class="form-group">
						<label for="descripcion">Descripcion</label>
						<input type="text" class="form-control" name="descripcion" placeholder="Descripcion">
					</div>
					<div class="form-group">
						<label for="foto">Foto</label>
						<input name="uploadedfile" type="file" />
					</div>
					<div class="form-group">
						<label for="precio">Precio</label>
						<input type="text" class="form-control" name="precio" placeholder="Precio">
					</div>
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
					<div class="form-group">
						<label for="categoria">Categoria</label>
						<select name="categoria" class="form-control" >
							<option value="piezas">piezas</option>
							<option value="apple">apple</option>
							<option value="perifericos">perifericos</option>
							<option value="smartphone">smartphone</option>
						</select>
					</div>
					<button type="submit" class="btn btn-default" name="enviar">Enviar</button>
				</form>
			</div>
		</div>
	</div>
	<?php
	if(isset($_REQUEST['enviar'])){
		include("./conexion.php");

		$uploadedfileload="true";
		$uploadedfile_size=$_FILES['uploadedfile']['size'];
		echo $_FILES['uploadedfile']['name'];
		if ($_FILES['uploadedfile']['size']>20000000000)
		{$msg=$msg."El archivo es mayor que 200KB, debes reduzcirlo antes de subirlo<BR>";
		$uploadedfileload="false";}

		if (!($_FILES['uploadedfile']['type'] =="image/jpeg" OR $_FILES['uploadedfile']['type'] =="image/gif"))
		{$msg=$msg." Tu archivo tiene que ser JPG o GIF. Otros archivos no son permitidos<BR>";
		$uploadedfileload="false";}

		$file_name=$_FILES['uploadedfile']['name'];
		$add="../imagenes/$file_name";
		if($uploadedfileload=="true"){

		if(move_uploaded_file ($_FILES['uploadedfile']['tmp_name'], $add)){
		echo " Ha sido subido satisfactoriamente";
		}else{echo "Error al subir el archivo";}

		}else{echo $msg;}

		$nombre=$_REQUEST['nombre'];;
		$descripcion=$_REQUEST['descripcion'];
		$foto=$_FILES['uploadedfile']['name'];
		$precio=$_REQUEST['precio'];
		$tipo=$_REQUEST['tipo'];
		$categoria=$_REQUEST['categoria'];


		$sentencia = "INSERT INTO productos (nombre,descripcion,imagen,precio,tipo,categoria) values ('$nombre','$descripcion','$foto','$precio','$tipo','$categoria')";
		mysql_query($sentencia)or die("No se ha insertado el articulo");
		mysql_close();

	}

	?>


	<?php
	include("../php/pie.php");
	?>	

</body>
</html>