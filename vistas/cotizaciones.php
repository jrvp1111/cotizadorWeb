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



    <header>Buscar Cotizaciones</header>
    <section>
    <table border="0" align="center">
      <tr>
          <td width="335"><input type="text" placeholder="Busca un producto" id="bs-prod"/></td>
            <td width="100"><a href="nueva_cotizacion.php"><button class="btn btn-primary">Nueva cotizacion</button></a></td>
        </tr>
    </table>
    </section>

    <div class="registros" id="agrega-registros-prod">
        <table class="table table-striped table-condensed table-hover">
            <tr>
                <th width="200">#</th>
                <th width="150">Fecha</th>
                <th width="150">Atención</th>
                <th width="150">Empresa</th>
                <th width="150">Vendedor</th>
                <th width="150">Estado</th>
                <th width="150">Total</th>
                <th width="150">Condicion</th>
                <th width="150">Telefono</th>
                <th width="50">Opciones</th>
            </tr>
        <?php
            include('../php/conexion.php');
            $registro = mysql_query("SELECT * FROM productos ORDER BY desc_prod ASC"); 
            while($registro2 = mysql_fetch_array($registro)){
                echo '<tr>
                        <td>'.$registro2['nomb_prod'].'</td>
                        <td>'.$registro2['desc_prod'].'</td>
                        <td>'.$registro2['mca_prod'].'</td>
                        <td>'.$registro2['origen_prod'].'</td>
                        <td>'.$registro2['edo_prod'].'</td>
                        <td>'.$registro2['cost_prod'].'</td>
                        <td>'.$registro2['prec_rec'].'</td>
                        <td>'.fechaNormal($registro2['fecha_prod']).'</td>
                        <td>
                            <a href="javascript:editarProducto('.$registro2['id_prod'].');" class="glyphicon glyphicon-edit"></a>
                            <a href="javascript:eliminarProducto('.$registro2['id_prod'].');" class="glyphicon glyphicon-remove-circle"></a>
                        </td>
                    </tr>';
            }
        ?>
        </table>
    </div>

</body>
</html>