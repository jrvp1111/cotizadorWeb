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
          <li class="active"><a href="marcas.php">Marcas</a></li>
          <li><a href="usuarios.php">Usuarios</a></li>
          <li><a href="pagos.php">Pagos</a></li>
          <li><a href="cortinas.php">Medidas Cortinas</a></li>
        </ul>
      </div>
    </div>
  </nav>

    <!-- termina el menu-->

  <!--saltos para que no se oculte el texto en el detras del nav-->
  <br><br><hr>



    <header>Marcas</header>
    <section>
    <table border="0" align="center">
    	<tr>
        	<td width="335"><input type="text" placeholder="Busca una marca por: Nombre u origen" id="bs-mca"/></td>
            <td width="100"><button id="nueva-marca" class="btn btn-primary">Nuevo</button></td>
        </tr>
    </table>
    </section>

    <div class="registros" id="agrega-registros-mca">
        <table class="table table-striped table-condensed table-hover">
            <tr>
                <th width="300">Nombre de la marca</th>
                <th width="200">Origen de la marca</th>
                <th width="200">Proveedor</th>
                <th width="200">Telefono</th>
                <th width="150">Fecha Registro</th>
                <th width="50">Opciones</th>
            </tr>
        <?php
            include('../php/conexion.php');
            $registro = mysql_query("SELECT * FROM marcas ORDER BY nomb_mca ASC"); 
            while($registro2 = mysql_fetch_array($registro)){
                echo '<tr>
                        <td>'.$registro2['nomb_mca'].'</td>
                        <td>'.$registro2['origen_mca'].'</td>
                        <td>'.$registro2['prov_mca'].'</td>
                        <td>'.$registro2['tel_mca'].'</td>
                        <td>'.fechaNormal($registro2['fecha_reg']).'</td>
                        <td>
                            <a href="javascript:editarMarca('.$registro2['id_mca'].');" class="glyphicon glyphicon-edit"></a>
                            <a href="javascript:eliminarMarca('.$registro2['id_mca'].');" class="glyphicon glyphicon-remove-circle"></a>
                        </td>
                    </tr>';
            }
        ?>
        </table>
    </div>
    <!-- MODAL PARA EL REGISTRO DE MARCAS-->
    <div class="modal fade" id="registra-marca" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title" id="myModalLabel"><b>Registra o Edita una marca</b></h4>
            </div>
            <form id="formulario-mca" class="formulario" onsubmit="return agregaRegistro();">
            <div class="modal-body">
				<table border="0" width="100%">
               		 <tr>
                        <td colspan="2"><input type="text" required="required" readonly="readonly" id="id-mca" name="id-mca" readonly="readonly" style="visibility:hidden; height:5px;"/></td>
                    </tr>
                     <tr>
                    	<td width="150">Proceso: </td>
                        <td><input type="text" required="required" readonly="readonly" id="pro-mca" name="pro-mca"/></td>
                    </tr>
                	  <tr>
                    	  <td>Nombre de la marca: </td>
                        <td><input type="text" required="required" name="nombreMca" id="nombreMca" maxlength="100"/></td>
                    </tr>
                    <tr>
                    	<td>Origen de la marca: </td>
                        <td><select required="required" name="origen" id="origen">
                        		<option value="Nacional">Nacional</option>
                                <option value="Importación">Importación</option>
                            </select></td>
                    </tr>

                    <tr>
                        <td>Proveedor: </td>
                        <td><input type="text" name="provMca" id="provMca" maxlength="100"/></td>
                    </tr>

                    <tr>
                        <td>Telefono: </td>
                        <td><input type="text"  name="telMca" id="telMca" maxlength="100"/></td>
                    </tr>

                    <tr>
                        <td>Nota: </td>
                        <td><input type="text"  name="notaMca" id="notaMca" maxlength="100"/></td>
                    </tr>


                    <tr>
                    	<td colspan="2">
                        	<div id="mensaje"></div>
                        </td>
                    </tr>
                </table>
            </div>
            
            <div class="modal-footer">
            	<input type="submit" value="Registrar" class="btn btn-success" id="reg-mca"/>
                <input type="submit" value="Editar" class="btn btn-warning"  id="edi-mca"/>
            </div>
            </form>
          </div>
        </div>
      </div>
      

</body>
</html>