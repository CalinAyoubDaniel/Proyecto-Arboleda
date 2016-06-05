<?php
session_start();
require_once('class.ezpdf.php');
$pdf =& new Cezpdf('a4');
$pdf->selectFont('../fonts/courier.afm');
$pdf->ezSetCmMargins(1,1,1.5,1.5);

include '../conexion.php';
		$correo = $_SESSION['correo'];
		$consultaU = mysql_query("select * from usuarios where correo like '$correo'")or die(mysql_error());
		$usuario = mysql_fetch_row($consultaU);
		$dni = $usuario[3];

$queEmp = "select * from compras where dni like '$dni'";

$resEmp = mysql_query($queEmp) or die(mysql_error());
$totEmp = mysql_num_rows($resEmp);

$ixx = 0;
while($datatmp = mysql_fetch_assoc($resEmp)) { 
	$ixx = $ixx+1;
	$data[] = array_merge($datatmp, array('id'=>$ixx));
}
$titles = array(
				
				'id'=>'<b>Id</b>',
				'numeroventa'=>'<b>Numero venta</b>',
				'nombre'=>'<b>Nombre</b>',
				'precio'=>'<b>Precio</b>',
				'cantidad'=>'<b>Cantidad</b>',
				'subtotal'=>'<b>Subtotal</b>'
			);
$options = array(
				'shadeCol'=>array(0.9,0.9,0.9),
				'xOrientation'=>'center',
				'width'=>500
			);
$txttit = "<b>FACTURA DE COMPRA</b>\n";
$txttit.= "COMPONENTES PC \n";


$pdf->ezText($txttit, 12);
$pdf->ezTable($data, $titles, '', $options);
$pdf->ezText("\n\n\n", 10);
$pdf->ezText("<b>Fecha:</b> ".date("d/m/Y"), 10);

$pdf->ezStream();
?>