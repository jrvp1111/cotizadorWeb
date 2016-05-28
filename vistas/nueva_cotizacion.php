<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cotizaciones</title>
<link href="../css/estilo.css" rel="stylesheet">
<script src="../js/jquery.js"></script>
<script src="../js/myjava.js"></script>
<link href="../bootstrap/css/bootstrap.css" rel="stylesheet">
<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="../bootstrap/css/bootstrap-theme.css" rel="stylesheet">
<link href="../bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
<script src="../bootstrap/js/bootstrap.min.js"></script>
<script src="../bootstrap/js/bootstrap.js"></script>






  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <script type="text/javascript">
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
</script>



<script type="text/javascript">
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
</script>


</head>
<body>

      <!--empieza el menu-->
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Cotizador Web</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li><a href="index.php">Inicio</a></li>>
          <li class="active"><a href="cotizaciones.php">Cotizaciones</a></li>
          <li><a href="clientes.php">Clientes</a></li>
          <li><a href="productos.php">Productos</a></li>
          <li><a href="marcas.php">Marcas</a></li>
          <li><a href="usuarios.php">Usuarios</a></li>
          <li><a href="pagos.php">Pagos</a></li>
        </ul>
      </div>
    </div>
  </nav>

    <!-- termina el menu-->

  <!--saltos para que no se oculte el texto en el detras del nav-->
  <br><br><hr>


 <header>Nueva Cotizacion</header>

<div class="container">

<form role="form" class="form-horizontal">



    <div class="form-group">
      <label class="control-label col-sm-1">Compañia:</label>
      <div class="col-sm-3"><input type="text" class="form-control" id="nombrecompaniacte" name="nombrecompaniacte"></div>

      <label class="control-label col-sm-1">Atencion:</label>
      <div class="col-sm-3"><input type="text" class="form-control" id="atencot" name="atencot" placeholder="Atencion"></div>

      <label class="control-label col-sm-1">Email:</label>
      <div class="col-sm-3"><input type="email" class="form-control" id="emailcot" name="emailcot" placeholder="Introduce email"></div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-1">Telefono:</label>
      <div class="col-sm-3"><input type="text" class="form-control" id="telefonocte" name="telefonocte" readonly></div>

      <label class="control-label col-sm-1">Dirección:</label>
      <div class="col-sm-3"><input type="text" class="form-control" id="direccioncte" name="direccioncte" readonly></div>

      <label class="control-label col-sm-1">Ciudad:</label>
      <div class="col-sm-3"><input type="text" class="form-control"  id="ciudadcte" name="ciudadcte" readonly></div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-1">Estado:</label>
      <div class="col-sm-3"><input type="text" class="form-control" id="estadocte" name="estadocte" readonly></div>

      <label class="control-label col-sm-1">Condiciones de pago:</label>
      <div class="col-sm-3">
        <select class="form-control" id="condpagcot" name="condpagcot">
            <option value="credito">Credito</option>
            <option value="contado">Contado</option>
        </select>
      </div>

      <label class="control-label col-sm-1">Validez:</label>
      <div class="col-sm-3">
        <select class="form-control" id="valicot" name="valicot">
            <option value="7 días">7 días</option>
            <option value="15 días">15 días</option>
            <option value="30 días">30 días</option>
            <option value="60 días">60 días</option>
        </select>
      </div>

    </div>

    <div class="form-group">
      <label class="control-label col-sm-1">T.E.:</label>
      <div class="col-sm-3"><input type="text" class="form-control" id="tieentcot" name="tieentcot" value="Inmediata" placeholder="Tiempo de entrega"></div>

      <label class="control-label col-sm-1">Nota:</label>
      <div class="col-sm-7"><input type="text" class="form-control" id="notacot" name="notacot" placeholder="Nota"></div>

    </div>

 </form>

</div>





 <!-- MODAL PARA EL REGISTRO DE PRODUCTOS-->
    <div >

       <form id="formulario-cot" class="formulario" onsubmit="return agregaRegistroCot();">
          <div>

            <table class="table table-hover" id="tabla_1">


                <tr id="clonable" >
                  <td width="150"><input type="text" required="required" readonly="readonly" id="pro-cot" name="pro-cot"/></td>
                  <td><input type="text" required="required" id="nombredelProd" name="nombredelProd"  placeholder="Introduce producto, modelo o marca"/></td>
                  <td width="300"><input type="text" id="notaProdCot" name="notaProdCot" placeholder="Intruduce una nota"/></td>
                  <td width="100"><input type="text" required="required" onkeyup="calcularImporte();" id="cantProd" name="cantProd" placeholder="Cantidad"/></td>
                  <td width="100"><input type="text" required="required" id="precioRecomProd" name="precioRecomProd"/></td>
                  <td width="100"><img src="" id="imagenProducto" name="imagenProducto"/></td>


                  <td>
                    <a href="#" onClick="borraFila(this.parentNode.parentNode)"><span class="glyphicon glyphicon-minus"></span></a> &nbsp; &nbsp;
                    <a href="javascript:agregaFila( 'tabla_1' );"><span class="glyphicon glyphicon-plus"></span></a>
                  </td>
                </tr>


                <tr>
                  <th>Proceso:</th>
                  <th>Producto:</th>
                  <th>Nota:</th>
                  <th>Cantidad:</th>
                  <th>Precio:</th>
                  <th>Imagen</th>
                  <th>Opción</th>
                </tr>


             <tbody>



             </tbody>

              <tfoot>
                <tr>
                  <td></td><td></td><td></td><td>Subtotal</td><td><input type="text" readonly="readonly" class="subtotal" id="subtotal"/></td>
                </tr>
                <tr><td></td><td></td><td></td><td>I.V.A.(16%)</td><td><input type="text" readonly="readonly"/></td></tr>
                <tr><td></td><td></td><td></td><td>Neto</td><td><input type="text" readonly="readonly"/></td></tr>
                <input type="button" value="Calcular" onclick="calcular_total()"/>

              </tfoot>

              <tr><td colspan="2"><div id="mensaje"></div></td></tr>
            </table>
          </div>


          <div class="modal-footer">
            <input type="submit" value="Registrar" class="btn btn-success" id="reg-cot"/>
            <input type="submit" value="Editar" class="btn btn-warning"  id="edi-cot"/>
          </div>
      </form>
    </div>



<script>

function agregaFila( id ) {
var tabla = document.getElementById( id );
var tbody = document.getElementById( tabla.id ).tBodies[0];
var row = tbody.rows[0].cloneNode( true );
var id = 1;
while( document.getElementById( tabla.id+'_fila_'+id ) ) {
id++;
}
row.id = tabla.id+'_fila_'+id;
row.style.display = '';
tbody.appendChild( row );
}

function borraFila( fila ) {
var id = fila.id;
if( fila.parentNode.rows.length <= 1 ) return;
document.getElementById( id ).parentNode.removeChild( document.getElementById(id) );
}

</script>


</body>
</html>