
var inicio=function(){
	$(".cantidad").keyup(function(e){
		if($(this).val()!=''){
			if(e.keyCode==13){
				var id=$(this).attr('data-id');
				var precio=$(this).attr('data-precio');
				var cantidad = $(this).val();
				$(this).parentsUntil('.producto').find('.sub').text('Subtotal : '+(precio*cantidad));
				
				$.post('../php/modificarDatos.php',{
					Id:id,
					Precio:precio,
					Cantidad:cantidad
				},function(e){
					$('#total').text(e);
				});
			}
		}
	});
}

$(document).on('ready',inicio);