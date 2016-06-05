 <?php
	include '../conexion.php';
	session_start();
	$correo_sesion = $_SESSION['correo'];

	$consultaU = mysql_query("select * from usuarios where correo like '$correo_sesion'")or die(mysql_error());

	$usuario = mysql_fetch_row($consultaU);


	if (isset($_REQUEST['actualizar'])) {
		
		$correo = $_REQUEST['correo'];
		$passcom = $_REQUEST['passcom'];
		$pass = $_REQUEST['pass'];

		/********Clave antigua ******/
		$passA = $_REQUEST['passA'];
		$claveA = sha1(md5($passA));
		/********Final antigua ******/

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
		if($usuario[1] == $claveA){
		
			if($pass == $passcom){
				mysql_query("update usuarios set correo='$correo', clave='$clave', tipoC='$tipoC', dni='$dni', nombre='$nombre', apellidos='$apellidos', direccion='$direccion', pais='$pais', cp='$cp', poblacion='$poblacion', provincia='$provincia', telefono='$telefono', fechaN ='$fechaN' where correo like '$correo_sesion'")or die(mysql_error());
				session_destroy();
				header("Location: ../registro2.php");
			}
		}
			
		
	}

?>