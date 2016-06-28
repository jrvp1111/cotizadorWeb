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
          <li><a href="cotizaciones.php">Cotizaciones</a></li>
          <li><a href="clientes.php">Clientes</a></li>
          <li><a href="productos.php">Productos</a></li>
          <li><a href="marcas.php">Marcas</a></li>
          <li><a href="usuarios.php">Usuarios</a></li>
          <li><a href="pagos.php">Pagos</a></li>
          <li class="active"><a href="tcambio.php">T. Cambio</a></li>
        </ul>
      </div>
    </div>
  </nav>

    <!-- termina el menu-->

  <!--saltos para que no se oculte el texto en el detras del nav-->
  <br><br><hr>

 

    <header>Tipo de Cambio</header>

    <section>
    <table border="0" align="center">
      <tr>
          <td width="335"><input type="text" placeholder="Busca un Tipo de Cambio" id="bs-TCambio"/></td>
            <td width="100"><button id="nuevo-TCambio" class="btn btn-primary">Nuevo</button></td>
        </tr>
    </table>
    </section>

    <div class="registros" id="agrega-registros-TCambio">
        <table class="table table-striped table-condensed table-hover">
            <tr>
                <th width="200">Precio del dolar</th>
                <th width="150">Fecha</th>
                <th width="50">Opciones</th>
            </tr>




        <?php
            include('../php/conexion.php');
            $registro = mysql_query("SELECT * FROM divisas ORDER BY fecha_tcambio ASC"); 
            while($registro2 = mysql_fetch_array($registro)){
                echo '<tr>
                        <td>'.$registro2['precio_dolar'].'</td>
                        <td>'.fechaNormal($registro2['fecha_tcambio']).'</td>
                        <td>
                            <a href="javascript:editarTCambio('.$registro2['id_tcambio'].');" class="glyphicon glyphicon-edit"></a>
                            <a href="javascript:eliminarTCambio('.$registro2['id_tcambio'].');" class="glyphicon glyphicon-remove-circle"></a>
                        </td>
                      </tr>';
            }
        ?>
        </table>
    </div>
    <!-- MODAL PARA EL REGISTRO DE PRODUCTOS-->
    <div class="modal fade" id="registra-TCambio" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title" id="myModalLabel"><b>Registra o Edita un Producto</b></h4>
            </div>
            <form id="formulario-TCambio" class="formulario" onsubmit="return agregaRegistroTCambio();">
            <div class="modal-body">
        <table border="0" width="100%">
                   <tr>
                        <td colspan="2"><input type="text" required="required" readonly="readonly" id="id-TCambio" name="id-TCambio" readonly="readonly" style="visibility:hidden; height:5px;"/></td>
                    </tr>
                     <tr>
                      <td width="150">Proceso: </td>
                        <td><input type="text" required="required" readonly="readonly" id="pro-TCambio" name="pro-TCambio"/></td>
                    </tr>

                    <tr>
                      <td>Tipo de cambio: </td>
                        <td><input type="text" required="required" name="tipoCambio" id="tipoCambio" maxlength="100"/></td>
                    </tr>

                    
                    <tr>
                      <td colspan="2">
                          <div id="mensaje"></div>
                        </td>
                    </tr>
                </table>
            </div>

            <div class="modal-footer">
              <input type="submit" value="Registrar" class="btn btn-success" id="reg-TCambio"/>
                <input type="submit" value="Editar" class="btn btn-warning"  id="edi-TCambio"/>
            </div>
            </form>
          </div>
        </div>
      </div>


</body>
</html>