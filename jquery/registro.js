$(document).ready(function(){
	$("#recordar").click(recuperar);
	$("#update").click(update);
})
function recuperar(){
	var estado = "ok";
	var peticion = $.ajax({
		url: "../php/recuperar/recuperar.php",
		type: "POST",
		async: true,
		data: "estado="+estado,
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