$(function(){


	$('#nueva-marca').on('click',function()
		{
			$('#formulario-mca')[0].reset();
			$('#pro-mca').val('Registro');
			$('#edi-mca').hide();
			$('#reg-mca').show();
			$('#registra-marca').modal
			({
				show:true,
				backdrop:'static'
			});
		});




	$('#nuevo-producto').on('click',function()
		{
			$('#formulario-prod')[0].reset();
			$('#pro-prod').val('Registro');
			$('#edi-prod').hide();
			$('#reg-prod').show();
			$('#registra-producto').modal
			({
				show:true,
				backdrop:'static'
			});
		});


	$('#nuevo-cliente').on('click',function()
		{
			$('#formulario-cte')[0].reset();
			$('#pro-cte').val('Registro');
			$('#edi-cte').hide();
			$('#reg-cte').show();
			$('#registra-cliente').modal
			({
				show:true,
				backdrop:'static'
			});
		});




	$('#bs-mca').on('keyup',function()
		{
			var dato = $('#bs-mca').val();
			var url = '../php/busca_marca.php';
			$.ajax(
				{
					type:'POST',
					url:url,
					data:'dato='+dato,
					success: function(datos)
						{
							$('#agrega-registros-mca').html(datos);
						}
				});
		return false;
		});



		$('#bs-prod').on('keyup',function(){
		var dato = $('#bs-prod').val();
		var url = '../php/busca_producto.php';
		$.ajax({
		type:'POST',
		url:url,
		data:'dato='+dato,
		success: function(datos){
			$('#agrega-registros-prod').html(datos);
		}
	});
	return false;
	});

		

		$('#bs-cte').on('keyup',function(){
		var dato = $('#bs-cte').val();
		var url = '../php/busca_cliente.php';
		$.ajax({
		type:'POST',
		url:url,
		data:'dato='+dato,
		success: function(datos){
			$('#agrega-registros-cte').html(datos);
		}
	});
	return false;
	});





});

function agregaRegistro(){
	var url = '../php/agrega_marca.php';
	$.ajax({
		type:'POST',
		url:url,
		data:$('#formulario-mca').serialize(),
		success: function(registro){
			if ($('#pro-mca').val() == 'Registro'){
			$('#formulario-mca')[0].reset();
			$('#mensaje').addClass('bien').html('Registro completado con exito').show(200).delay(2500).hide(200);
			$('#agrega-registros-mca').html(registro);
			return false;
			}else{
			$('#mensaje').addClass('bien').html('Edicion completada con exito').show(200).delay(2500).hide(200);
			$('#agrega-registros-mca').html(registro);
			return false;
			}
		}
	});
	return false;
}


function agregaRegistroProd(){
	var url = '../php/agrega_producto.php';
	$.ajax({
		type:'POST',
		url:url,
		data:$('#formulario-prod').serialize(),
		success: function(registro){
			if ($('#pro-prod').val() == 'Registro'){
			$('#formulario-prod')[0].reset();
			$('#mensaje').addClass('bien').html('Registro completado con exito').show(200).delay(2500).hide(200);
			$('#agrega-registros-prod').html(registro);
			return false;
			}else{
			$('#mensaje').addClass('bien').html('Edicion completada con exito').show(200).delay(2500).hide(200);
			$('#agrega-registros-prod').html(registro);
			return false;
			}
		}
	});
	return false;
}



function agregaRegistroCte(){
	var url = '../php/agrega_cliente.php';
	$.ajax({
		type:'POST',
		url:url,
		data:$('#formulario-cte').serialize(),
		success: function(registro){
			if ($('#pro-cte').val() == 'Registro'){
			$('#formulario-cte')[0].reset();
			$('#mensaje').addClass('bien').html('Registro completado con exito').show(200).delay(2500).hide(200);
			$('#agrega-registros-cte').html(registro);
			return false;
			}else{
			$('#mensaje').addClass('bien').html('Edicion completada con exito').show(200).delay(2500).hide(200);
			$('#agrega-registros-cte').html(registro);
			return false;
			}
		}
	});
	return false;
}




function eliminarMarca(id){
	var url = '../php/elimina_marca.php';
	var pregunta = confirm('¿Esta seguro de eliminar esta Marca?');
	if(pregunta==true){
		$.ajax({
		type:'POST',
		url:url,
		data:'id='+id,
		success: function(registro){
			$('#agrega-registros-mca').html(registro);
			return false;
		}
	});
	return false;
	}else{
		return false;
	}
}


function eliminarProducto(id){
	var url = '../php/elimina_producto.php';
	var pregunta = confirm('¿Esta seguro de eliminar este Producto?');
	if(pregunta==true){
		$.ajax({
		type:'POST',
		url:url,
		data:'id='+id,
		success: function(registro){
			$('#agrega-registros-prod').html(registro);
			return false;
		}
	});
	return false;
	}else{
		return false;
	}
}



function eliminarCliente(id){
	var url = '../php/elimina_cliente.php';
	var pregunta = confirm('¿Esta seguro de eliminar este cliente?');
	if(pregunta==true){
		$.ajax({
		type:'POST',
		url:url,
		data:'id='+id,
		success: function(registro){
			$('#agrega-registros-cte').html(registro);
			return false;
		}
	});
	return false;
	}else{
		return false;
	}
}



function editarMarca(id){
	$('#formulario-mca')[0].reset();
	var url = '../php/edita_marca.php';
		$.ajax({
		type:'POST',
		url:url,
		data:'id='+id,
		success: function(valores){
				var datos = eval(valores);
				$('#reg-mca').hide();
				$('#edi-mca').show();
				$('#pro-mca').val('Edicion');
				$('#id-mca').val(id);
				$('#nombreMca').val(datos[0]);
				$('#origen').val(datos[1]);
				$('#registra-marca').modal({
					show:true,
					backdrop:'static'
				});
			return false;
		}
	});
	return false;
}



function editarProducto(id){
	$('#formulario-prod')[0].reset();
	var url = '../php/edita_producto.php';
		$.ajax({
		type:'POST',
		url:url,
		data:'id='+id,
		success: function(valores){
				var datos = eval(valores);
				$('#reg-prod').hide();
				$('#edi-prod').show();
				$('#pro-prod').val('Edicion');
				$('#id-prod').val(id);
				$('#nombreProd').val(datos[0]);
				$('#descProd').val(datos[1]);
				$('#mcaProd').val(datos[2]);
				$('#origenProd').val(datos[3]);
				$('#edoProd').val(datos[4]);
				$('#notaProd').val(datos[5]);
				$('#costProd').val(datos[6]);
				$('#utilidadProd').val(datos[7]);
				$('#precProd').val(datos[8]);
				$('#precRec').val(datos[9]);
				$('#registra-producto').modal({
					show:true,
					backdrop:'static'
				});
			return false;
		}
	});
	return false;
}


function editarCliente(id){
	$('#formulario-cte')[0].reset();
	var url = '../php/edita_cliente.php';
		$.ajax({
		type:'POST',
		url:url,
		data:'id='+id,
		success: function(valores){
				var datos = eval(valores);
				$('#reg-cte').hide();
				$('#edi-cte').show();
				$('#pro-cte').val('Edicion');
				$('#id-cte').val(id);
				$('#compCte').val(datos[0]);
				$('#nombcomerCte').val(datos[1]);
				$('#telCte').val(datos[2]);
				$('#dirCte').val(datos[3]);
				$('#ciudCte').val(datos[4]);
				$('#edoCte').val(datos[5]);
				$('#registra-cliente').modal({
					show:true,
					backdrop:'static'
				});
			return false;
		}
	});
	return false;
}