<?php

session_start();
	$array=$_SESSION['carrito'];
	$numeroventa = 0;
	include("../conexion.php");
	$re = mysql_query("select * from compras order by numeroventa DESC limit 1")or die(mysql_error());
	while ($f = mysql_fetch_array($re)) {
		$numeroventa = $f['numeroventa'];
	}
	if($numeroventa == 0){
		$numeroventa=1;
	}else{
		$numeroventa++;
	}
	for($i=0;$i<count($array);$i++){
		mysql_query("insert into compras (numeroventa, imagen, nombre, precio, cantidad, subtotal) value 
			(".$numeroventa.",
			'".$array[$i]['Imagen']."',
			'".$array[$i]['Nombre']."',
			'".$array[$i]['Precio']."',
			'".$array[$i]['Cantidad']."',
			'".($array[$i]['Precio']*$array[$i]['Cantidad'])."'
			)")or die(mysql_error());
	}
	unset($_SESSION['carrito']);
	header("Location: ../../index.php");
?>