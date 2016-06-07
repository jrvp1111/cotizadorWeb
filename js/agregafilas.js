
$(function() {
    var count = 1;
    jQuery("#miform").validationEngine({promptPosition : "centerRight:0,-5"});
  
   $(document).on("click","#btnadd",function( event ) {
    count++;
      $('#tblprod tr:last').after('<tr><td>'+count+'<td style="display:none" width="150"><input type="text" required="required" readonly="readonly" id="pro-cot" name="pro-cot[]"/></td>'+
                                                    '<td class="col-sm-4"><div class="form-group"><input class="form-control" required="required" id="nombredelProd" name="nombredelProd[]" placeholder="Introduce producto, modelo o marca"/></div></td>'+
                                                    '<td class="col-sm-3"><div class="form-group"><input class="form-control" id="notaProdCot" name="notaProdCot[]" placeholder="Intruduce una nota"/></div></td>'+
                                                    '<td class="col-sm-2"><div class="form-group"><input class="form-control" required="required" onkeyup="calcularImporte();" id="cantProd" name="cantProd[]" placeholder="Cantidad"/></div></td>'+
                                                    '<td class="col-sm-2"><div class="form-group"><input class="form-control" required="required" id="precioRecomProd" name="precioRecomProd[]"/></div></td>'+'</tr>');
      event.preventDefault();
   });
   
   $( "#miform" ).submit(function( event ) {
          var frm = $(this);
    var formulario = $(this).serialize();
    
    if($('#miform').validationEngine('validate')){
    $.post( "guardar.php", formulario)
            .done(function(data){
              alert(data);
        $(frm)[0].reset();
      })
      .fail(function() {
            alert( "error no pude enviar los datos" );
      });
    }
    event.preventDefault();
  });
});