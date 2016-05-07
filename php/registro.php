<?php
	include("./conexion.php");
	session_start();
	
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>COMPONENTESPC</title>
	

		<!--Media Query -->
		<meta name="viewport" content="initial-scale=1">
		<link rel="stylesheet" type="text/css" href="../css/estilo.css" media="screen and (min-width: 980px)">
		<link rel="stylesheet" type="text/css" href="../css/tablet.css" media="screen and (min-width: 650px) and (max-width :980px) ">
		<link rel="stylesheet" type="text/css" href="../css/movil.css" media="screen and (max-width :650px)">


		
		<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js' type='text/javascript'/> </script>
		<script type="text/javascript">//<![CDATA[
			$(function(){
			    $('#slider div:gt(0)').hide();
			    setInterval(function(){
			      $('#slider div:first-child').fadeOut(0)
			         .next('div').fadeIn(1000)
			         .end().appendTo('#slider');}, 4000);
			});
			//]]>
		</script>﻿
	</head>
	<body>
		<div id="contenido">
			<div id="cabecera">
				<a href="../index.php"><img src="../imagenes/icono.png" alt="icono">
				<h1>COMPONENTES PC</h1></a>
			</div>
			<div id="cuerpo">
				<nav>
					<ul>
						<li class="linea"><a href="../index.php">HOME</a></li>
						<li class="linea"><a href="">COMPONENTES</a>
							<ul class="nav2">
								<li class="linea">Placa base</li>
								<li class="linea">Procesadores</li>
								<li class="linea">Discos Duros</li>
								<li class="linea">Tarjetas Gráficas</li>
								<li class="linea">Memoria RAM</li>
								<li class="linea">Fuentes de A.</li>
								<li class="linea">Cajas/Torres</li>
							</ul>
						</li>
						<li class="linea"><a href="">PERIFERICOS</a>
							<ul class="nav2">
								<li class="linea">Monitores</li>
								<li class="linea">Impresoras</li>
								<li class="linea">Multifuncion</li>
								<li class="linea">Altavoces</li>
								<li class="linea">Teclados</li>
								<li class="linea">Ratones</li>
								<li class="linea">Auriculares</li>
							</ul>
						</li>
						<li class="linea"><a href="">ZONA APPLE</a>
							<ul class="nav2">
								<li class="linea">iPhone</li>
								<li class="linea">Accesorios iPhone</li>
								<li class="linea">Memorias USB</li>
								<li class="linea">Altavoces</li>
								<li class="linea">Auriculares</li>
								<li class="linea">Repuestos</li>
							</ul>
						</li>
						<li class="linea"><a href="">SMARTPHONE</a>
							<ul class="nav2">
								<li class="linea">Smartphones</li>
								<li class="linea">Fundas</li>
								<li class="linea">Protectores Pantalla</li>
								<li class="linea">Tarjetas MicroSD</li>
								<li class="linea">Powerbanks</li>
								<li class="linea">Accesorios</li>
							</ul>
						</li>
					</ul>
				</nav>
				<div id="primero">
					<h3>La tienda de tecnología online líder por precio, calidad y servicio</h3>
					<div id="primero1">
						<img src="../imagenes/icono_persona.png" alt="persona"></a>
					</div>
					<div id="primero2">
						<a href="../php/carritodecompras.php">
						<img src="../imagenes/cesta.png" alt="persona"></a>
					</div>
				</div>
				<div id="sesion">
					<div id="registro">
						<h1>Nuevo usuario</h1>
						<hr>
						<table>
							<form method="POST" action="#">
								<tr><td>dni: </td><td><input type="text" name="dni"></td></tr>
								<tr><td>Nombre: </td><td><input type="text" name="nombre"></td></tr>
								<tr><td>Apellidos: </td><td><input type="text" name="apellidos"></td></tr>
								<tr><td>Direccion: </td><td><input type="text" name="direccion"></td></tr>
								<tr><td>Pais: </td><td><input type="text" name="pais"></td></tr>
								<tr><td>C-P: </td><td><input type="text" name="cp"></td></tr>
								<tr><td>Poblacion: </td><td><input type="text" name="poblacion"></td></tr>
								<tr><td>Provincia: </td><td><input type="text" name="provincia"></td></tr>
								<tr><td>Telefono: </td><td><input type="text" name="telefono"></td></tr>
								<tr><td>Fecha de Nacimiento: </td><td><input type="date" name="fecha"></td></tr>
								<tr><td>Correo electrónico: </td><td><input type="email" name="correo" id="correo"></td></tr>
								<tr><td>Clave: </td><td><input type="password" name="pass" id="pass"></td></tr>
								<tr><td>Repetir Clave: </td><td><input type="password" name="passcom" id="passcom"></td></tr>
								<tr><td><input type="checkbox" name="politica"></td><td>He leído y aceptado la <b>política de Privacidad</b>.</td></tr>
								<tr><td>Tipo de Cliente: </td><td><select name="tipo">
									<option value=""></option>
									<option value="Particular/autónomo">Particular / Autónomo</option>
									<option value="Empresa">Empresa</option>
								</select></td></tr>
								<tr><td><input type="submit" name="crear" value="Crear cuenta"></td></tr>
							</form>
						</table>
					</div>

				<?php
					if(isset($_REQUEST['crear'])){

						$correo = $_REQUEST['correo'];
						$passcom = $_REQUEST['passcom'];
						$pass = $_REQUEST['pass'];

						$clave = sha1(md5($pass));

						$tipoC = $_REQUEST['tipo'];
						$dni = $_REQUEST['dni'];
						$nombre = $_REQUEST['nombre'];
						$apellidos = $_REQUEST['apellidos'];
						$direccion = $_REQUEST['direccion'];
						$pais = $_REQUEST['pais'];
						$cp = $_REQUEST['cp'];
						$poblacion = $_REQUEST['poblacion'];
						$provincia = $_REQUEST['provincia'];
						$telefono = $_REQUEST['telefono'];
						$fechaN = $_REQUEST['fecha'];

						$re = mysql_query("select * from usuarios")or die(mysql_error());
						$f = mysql_fetch_row($re);
						if ($f[3] == $_REQUEST['dni']) {
							echo "<script> alert('El usuario ya existe en la base de datos.'); </script>";
						}else{
							if($pass == $passcom){
								mysql_query("insert into usuarios (correo, clave, tipoC, dni, nombre, apellidos, direccion, pais, cp, poblacion, provincia, telefono, fechaN) values ('$correo','$clave','$tipoC','$dni','$nombre','$apellidos','$direccion','$pais','$cp'
									,'$poblacion','$provincia','$telefono','$fechaN')")or die(mysql_error());
								header("Location: ./registro.php");
							}
							
						}
					}
					
					

				?>
					<div id="iniciosesion">
						<h1>Usuario registrado</h1>
						<hr>
						<table>
							<form method="POST" action="#">
								<tr><td>Correo electrónico</td></tr>
								<tr><td><input type="email" name="mail"></td></tr>
								<tr><td>Contraseña</td></tr>
								<tr><td><input type="password" name="contra"></td></tr>
								<tr><td><input type="submit" name="acceder" value="Acceder"></td><td><input type="submit" name="recordar" value="Recordar Clave"></td></tr>
							</form>
						</table>
					</div>
				</div>
				<?php
					if(isset($_REQUEST['acceder'])){

						$correo = $_REQUEST['mail'];
						$pass = $_REQUEST['contra'];
						$clave = sha1(md5($pass));
						$re = mysql_query("select * from usuarios where correo = '$correo'")or die(mysql_error());
						$f = mysql_fetch_row($re);
						
						if($f[0] == $correo && $f[1] == $clave) {
							$_SESSION['correo'] = $correo;
							header("Location: ../index.php");
						}else{
							echo "<script> alert('Clave o Correo Incorrectos.'); </script>";
						}
					}

				?>

				
			</div>
		</div>
	</body>
</html>
