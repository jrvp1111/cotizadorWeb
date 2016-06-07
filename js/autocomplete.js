
$(function() {
            $("#nombrecompaniacte").autocomplete({
                source: "../php/cotizar_clientes.php",
                minLength: 1,
                select: function(event, ui) {
          event.preventDefault();
                    $('#nombrecompaniacte').val(ui.item.nombrecompaniacte);
          $('#telefonocte').val(ui.item.telefonocte);
          $('#direccioncte').val(ui.item.direccioncte);
          $('#ciudadcte').val(ui.item.ciudadcte);
          $('#estadocte').val(ui.item.estadocte);
           }
            });
    });





$(function() {
            $("#nombredelProd").autocomplete({
                source: "../php/cotizar_productos.php",
                minLength: 1,
                select: function(event, ui) {
          event.preventDefault();
          $('#nombredelProd').val(ui.item.nombredelProd);
          $('#precioRecomProd').val(ui.item.precioRecomProd);
          $('#imagenProducto').val(ui.item.imagenProducto);
           }
            });
    });
