$(function(){


	$('#nueva-fact-ley').on('click',function()
		{
			$('#formulario-fact-ley')[0].reset();
			$('#pro-port-ley').val('Registro');
			$('#edi-fact-ley').hide();
			$('#reg-fact-ley').show();
			$('#registra-fact-ley').modal
			({
				show:true,
				backdrop:'static'
			});
		});


	$('#bs-fact-ley').on('keyup',function()
		{
			var dato = $('#bs-fact-ley').val();
			var url = '../php/portales/busca_fact_ley.php';
			$.ajax(
				{
					type:'POST',
					url:url,
					data:'dato='+dato,
					success: function(datos)
						{
							$('#agrega-registros-fact-ley').html(datos);
						}
				});
		return false;
		});




});

function agregaRegistroFactLey(){
	var url = '../php/portales/agrega_fact_ley.php';
	$.ajax({
		type:'POST',
		url:url,
		data:$('#formulario-fact-ley').serialize(),
		success: function(registro){
			if ($('#pro-fact-ley').val() == 'Registro'){
			$('#formulario-fact-ley')[0].reset();
			$('#mensaje').addClass('bien').html('Registro completado con exito').show(200).delay(2500).hide(200);
			$('#agrega-registros-fact-ley').html(registro);
			return false;
			}else{
			$('#mensaje').addClass('bien').html('Edicion completada con exito').show(200).delay(2500).hide(200);
			$('#agrega-registros-fact-ley').html(registro);
			return false;
			}
		}
	});
	return false;
}




function eliminarPortalLey(id){
	var url = '../php/portales/elimina_fact_ley.php';
	var pregunta = confirm('¿Esta seguro de eliminar esta factura?');
	if(pregunta==true){
		$.ajax({
		type:'POST',
		url:url,
		data:'id='+id,
		success: function(registro){
			$('#agrega-registros-fact-ley').html(registro);
			return false;
		}
	});
	return false;
	}else{
		return false;
	}
}




function editarPortalLey(id){
	$('#formulario-fact-ley')[0].reset();
	var url = '../php/portales/edita_fact_ley.php';
		$.ajax({
		type:'POST',
		url:url,
		data:'id='+id,
		success: function(valores){
				var datos = eval(valores);
				$('#reg-fact-ley').hide();
				$('#edi-fact-ley').show();
				$('#pro-port-ley').val('Edicion');
				$('#id-port-ley').val(id);
				$('#fechaFactLey').val(datos[0]);
				$('#empreLey').val(datos[1]);
				$('#numFactLey').val(datos[2]);
				$('#ordCompraLey').val(datos[3]);
				$('#tipoCompraLey').val(datos[4]);
				$('#tienCargoLey').val(datos[5]);
				$('#nombTienLey').val(datos[6]);
				$('#numEntrBultLey').val(datos[7]);
				$('#fechEntrBultLey').val(datos[8]);
				$('#nomQuienRecibLey').val(datos[9]);
				$('#numRemLey').val(datos[10]);
				$('#estPortLey').val(datos[11]);
				$('#registra-fact-ley').modal({
					show:true,
					backdrop:'static'
				});
			return false;
		}
	});
	return false;
}