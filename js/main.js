$(document).ready(function() {

	//evento submit del formulario
	$('form').submit(function(e){
		e.preventDefault();

		//convierte en un array los campos de nombre del fabricante y el origen
		var data=$(this).serializeArray();
		data.push({name:'tag', value: 'fabricantes'});

		$.ajax({
			//el url es como si tuvieramos el action en el form
			url: 'insertarfabricante.php',
			//el type es como si usaramos el method
			type: 'post',
			//aqui se usa el tipo de dato json
			dataType: 'json',
			//en este caso ponemos data por que es la variable que creamos arribita
			data: data,
			//colocar un icono de recarga
			beforeSend: function(){
				$('.fa').css('display','inline');
			}
		})
		//done se ejecuta si el resultado del request fue true
		.done(function() {
			$('span').html('Correcto');
		})
		//done se ejecuta si el resultado del request fue false
		.fail(function() {
			$('span').html('Incorrecto');
		})
		//always siempre se ejecuta
		.always(function() {
			setTimeout(function() {
				$('.fa').hide();
				}, 1000);
		});


	})
})