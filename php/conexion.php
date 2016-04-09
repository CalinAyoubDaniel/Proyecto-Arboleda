<?php
	$server="127.0.0.1";
	$username="root";
	$password="";
	$db='componentespc';
	$con=mysql_connect($server,$username,$password)or die("no se ha podido establecer la conexion");
	$sd=mysql_select_db($db,$con)or die("La base de datos no existe.");
	

?>	