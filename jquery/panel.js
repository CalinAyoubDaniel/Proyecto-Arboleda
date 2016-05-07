$(document).ready(function(){
	$("#factura").click(comprobar);
	$("#datos").click(datos);
})
function comprobar(){
	var factura = $("#factura").val();
	var peticion = $.ajax({
		url: "../php/facturas/facturas.php",
		type: "POST",
		async: true,
		data: "correo="+factura,
		success:function(){
			$("#lista").fadeIn(1000);
			$("#lista").html(peticion.responseText);
		},
		
	});
}
function datos(){
	var datos = $("#datos").val();
	var peticion = $.ajax({
		url: "../php/informacion/informacion.php",
		type: "POST",
		async: true,
		data: "correo2="+datos,
		success:function(){
			$("#lista").fadeIn(1000);
			$("#lista").html(peticion.responseText);
			$(".cambio").show();
		},
		
	});
}

