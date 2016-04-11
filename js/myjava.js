$(function(){
	/*$('#bd-desde').on('change', function(){
		var desde = $('#bd-desde').val();
		var hasta = $('#bd-hasta').val();
		var url = '../php/busca_producto_fecha.php';
		$.ajax({
		type:'POST',
		url:url,
		data:'desde='+desde+'&hasta='+hasta,
		success: function(datos){
			$('#agrega-registros').html(datos);
		}
	});
	return false;
	});
	
	$('#bd-hasta').on('change', function(){
		var desde = $('#bd-desde').val();
		var hasta = $('#bd-hasta').val();
		var url = '../php/busca_producto_fecha.php';
		$.ajax({
		type:'POST',
		url:url,
		data:'desde='+desde+'&hasta='+hasta,
		success: function(datos){
			$('#agrega-registros').html(datos);
		}
	});
	return false;
	});*/
	
	$('#nueva-marca').on('click',function(){
		$('#formulario')[0].reset();
		$('#pro-mca').val('Registro');
		$('#edi-mca').hide();
		$('#reg-mca').show();
		$('#registra-marca').modal({
			show:true,
			backdrop:'static'
		});
	});
	
	$('#bs-mca').on('keyup',function(){
		var dato = $('#bs-mca').val();
		var url = '../php/busca_marca.php';
		$.ajax({
		type:'POST',
		url:url,
		data:'dato='+dato,
		success: function(datos){
			$('#agrega-registros-mca').html(datos);
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
		data:$('#formulario').serialize(),
		success: function(registro){
			if ($('#pro-mca').val() == 'Registro'){
			$('#formulario')[0].reset();
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

function eliminarMarca(id){
	var url = '../php/elimina_marca.php';
	var pregunta = confirm('¿Esta seguro de eliminar este Producto?');
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

function editarMarca(id){
	$('#formulario')[0].reset();
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