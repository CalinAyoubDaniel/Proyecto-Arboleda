<?php
		include("../conexion.php");
		if(isset($_REQUEST['estado'])){
			$correo = $_REQUEST['correo'];

			$pass = rand(1111111111,9999999999);
			$clave = sha1(md5($pass));

			$dni = $_REQUEST['dni'];

			$nombre = $_REQUEST['nombre'];

			$fechaN = $_REQUEST['fecha'];
			if(mysql_query("select * from usuarios where correo = '$correo' ")){
				$re = mysql_query("select * from usuarios where correo = '$correo' ")or die(mysql_error());
			}else{
				echo "No existe este correo en nuestra base de datos.";
			}
			
			$f = mysql_fetch_row($re);
			if ($f[0] == $correo && $f[4] == $nombre && $f[12] == $fechaN && $f[3] == $dni){
				mysql_query("update usuarios set estado = 'activado', clave = '$clave', intentos = 0 where correo like '$correo'")or die(mysql_error());
				echo "<div> La nueva contraseña es: ".$pass."</div>";

			?>
				
			<button><a href="./registro2.php" style="text-decoration:none;color:black;">Volver a Registrarse</a></button>

			<?php
			}else{
				echo "<script> alert('Algun dato no es correcto.'); </script>";
				header("Location: ./registro2.php");
			}
		}




?>