<?php
	include '../conexion.php';
	session_start();
	$correo_sesion = $_SESSION['correo'];
	if (isset($_REQUEST['actualizar'])) {
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
				mysql_query("update usuarios set correo='$correo', clave='$clave', tipoC='$tipoC', dni='$dni', nombre='$nombre', apellidos='$apellidos', direccion='$direccion', pais='$pais', cp='$cp', poblacion='$poblacion', provincia='$provincia', telefono='$telefono', fechaN ='$fechaN' where correo like '$correo_sesion'")or die(mysql_error());
				unset($_SESSION['carrito']);
				header("Location: ../registro.php");
			}
			
		}
	}

?>