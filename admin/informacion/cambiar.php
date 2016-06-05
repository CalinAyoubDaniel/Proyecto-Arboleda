 <?php
	include '../conexion.php';
	session_start();
	$dato = $_SESSION['admin'];

	$consultaU = mysql_query("select * from administradores where nombre like '$dato'")or die(mysql_error());

	$usuario = mysql_fetch_row($consultaU);


	if (isset($_REQUEST['actualizar'])) {
		
		$passcom = $_REQUEST['passcom'];
		$pass = $_REQUEST['pass'];

		/********Clave antigua ******/
		$passA = $_REQUEST['passA'];
		$claveA = sha1(md5($passA));
		/********Final antigua ******/

		$clave = sha1(md5($pass));

		
		$dni = $_REQUEST['dni'];
		$nombre = $_REQUEST['nombre'];

		if($usuario[2] == $claveA){
		
			if($pass == $passcom){
				mysql_query("update administradores set dni='$dni', nombre='$nombre', clave = '$clave' where nombre like '$dato'")or die(mysql_error());
				session_destroy();
				header("Location: ../index.php");
			}
		}
			
		
	}

?>