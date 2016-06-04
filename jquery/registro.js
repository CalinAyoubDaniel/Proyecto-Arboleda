$(document).ready(function(){
	$("#recordar").click(comprobar);
	$("#update").click(update);
})
function comprobar(){
	var factura = "ok";
	var peticion = $.ajax({
		url: "../php/recuperar/recuperar.php",
		type: "POST",
		async: true,
		data: "correo="+factura,
		success:function(){
			$("#lista").fadeIn(1000);
			$("#lista").html(peticion.responseText);
			$(".registro").hide();
		},
		
	});
}
function update(){
	var nombre = $("#nombre").val();
	var correo = $("#correo").val();
	var dni = $("#dni").val();
	var fecha = $("#fecha").val();

	var peticion = $.ajax({
		url: "../php/recuperar/getClave.php",
		type: "POST",
		async: true,
		data: "nombre="+nombre+"&correo="+correo+"&dni="+dni+"&fecha="+fecha,
		success:function(){
			$("#lista2").fadeIn(1000);
			$("#lista2").html(peticion.responseText);
			$(".registro2").hide();
		},
		
	});
}