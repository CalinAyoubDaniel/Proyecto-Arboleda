<?php
	session_start();

		$array=$_SESSION['carrito'];
		$total = 0;
		$numero = 0;
		for ($i=0; $i <count($array) ; $i++) { 
			if ($array[$i]['Id']==$_POST['Id']) {
				$numero = $i;
			}
		}
		$array[$numero]['Cantidad']=$_POST['Cantidad'];
		for ($i=0; $i < count($array); $i++) { 
			$total = ($array[$i]['Precio']*$array[$i]['Cantidad'])+$total;
		}
		$_SESSION['carrito']=$array;
		echo $total;


?>