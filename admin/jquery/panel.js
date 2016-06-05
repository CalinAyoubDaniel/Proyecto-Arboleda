$(document).ready(function(){
	
	$("#datos").click(datos);
})

function datos(){
	var datos = $("#datos").val();
	
	var peticion = $.ajax({
		url: "./informacion/informacion.php",
		type: "POST",
		async: true,
		data: "admin="+datos,
		success:function(){
			$("#listas").fadeIn(1000);
			$("#listas").html(peticion.responseText);
			$(".cambio").show();
		},
		
	});
}

