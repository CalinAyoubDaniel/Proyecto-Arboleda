<?php
	session_start();
	$_SESSION['carrito'] = null;
	header("Location: ../carritodecompras.php");

?>