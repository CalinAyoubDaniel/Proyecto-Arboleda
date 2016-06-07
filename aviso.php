<?php
include("./php/conexion.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php
	include("./php/cabecera.php")
	?>

	
</head>

<body>
	

	<div class="container">

		<?php
		include("./php/menu.php")
		?>
		<div class="col-md-12" id="contenido">
			<h2>DATOS GENERALES</h2>
			<p>
De acuerdo con el artículo 10 de la Ley 34/2002, de 11 de julio, de Servicios de la Sociedad de la Información y de Comercio Electrónico ponemos a su disposición los siguientes datos:
COMPONENTES PC está domiciliada en Madrid. Inscrita en el Registro Mercantil de Madrid, Vol. 585858, Folio 323232, Hoja 7, Inscripción 1245.
En la web http://componentespc.esy.es/ hay una serie de contenidos de carácter informativo sobre Componentes tecnológicos.
Su principal objetivo es facilitar a los clientes y al público en general, la información relativa a la empresa, a los productos y servicios que se ofrecen.</p>
		</div>
	</div>
	<?php
		include("./php/pie.php")
		?>
</body>
</html>