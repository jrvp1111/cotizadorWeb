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
                minLength: 2,
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
      <div class="col-sm-3"><input type="text" class="form-control" id="nombrecompaniacte"></div>

      <label class="control-label col-sm-1">Atencion:</label>
      <div class="col-sm-3"><input type="text" class="form-control" id="atencot" placeholder="Atencion"></div>

      <label class="control-label col-sm-1">Email:</label>
      <div class="col-sm-3"><input type="email" class="form-control" id="emailcot" placeholder="Introduce email"></div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-1">Telefono:</label>
      <div class="col-sm-3"><input type="text" class="form-control" id="telefonocte" readonly></div>

      <label class="control-label col-sm-1">Dirección:</label>
      <div class="col-sm-3"><input type="text" class="form-control" id="direccioncte" readonly></div>

      <label class="control-label col-sm-1">Ciudad:</label>
      <div class="col-sm-3"><input type="text" class="form-control"  id="ciudadcte" readonly></div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-1">Estado:</label>
      <div class="col-sm-3"><input type="text" class="form-control" id="estadocte" readonly></div>

      <label class="control-label col-sm-1">Condiciones de pago:</label>
      <div class="col-sm-3">
        <select class="form-control" id="condpagcot">
            <option value="credito">Credito</option>
            <option value="contado">Contado</option>
        </select>
      </div>

      <label class="control-label col-sm-1">Validez:</label>
      <div class="col-sm-3">
        <select class="form-control" id="valicot">
            <option value="7 días">7 días</option>
            <option value="15 días">15 días</option>
            <option value="30 días">30 días</option>
            <option value="60 días">60 días</option>
        </select>
      </div>

    </div>

    <div class="form-group">
      <label class="control-label col-sm-1">Tiempo de entrega:</label>
      <div class="col-sm-3"><input type="text" class="form-control" id="tieentcot" value="Inmediata" placeholder="Tiempo de entrega"></div>

      <label class="control-label col-sm-1">Nota:</label>
      <div class="col-sm-7"><input type="text" class="form-control" id="notacot" placeholder="Nota"></div>

    </div>

 </form>

</div>

<p>https://www.youtube.com/watch?v=p-bs1swF69Q</p>




</body>
</html>