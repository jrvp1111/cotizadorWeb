<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cotizaciones</title>
<link href="../css/estilo.css" rel="stylesheet">
<script src="../js/jquery.js"></script>
<script src="../js/myjavaportal.js"></script>
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
        <a class="navbar-brand" href="#">Facturas en el portal</a>
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
          <li class="active"><a href="portal_ley.php">Portales</a></li>
        </ul>
      </div>
    </div>
  </nav>

    <!-- termina el menu-->

  <!--saltos para que no se oculte el texto en el detras del nav-->
  <br><br><hr>



    <header>Portal de Ley</header>
    <section>
    <table border="0" align="center">
    	<tr>
        	<td width="335"><input type="text" placeholder="Busca una factura" id="bs-fact-ley"/></td>
            <td width="100"><button id="nueva-fact-ley" class="btn btn-primary">Nuevo</button></td>
        </tr>
    </table>
    </section>

    <div class="registros" id="agrega-registros-fact-ley">
        <table class="table table-striped table-condensed table-hover">
            <tr>
                <th width="100">Fecha</th>
                <th width="150">Empresa</th>
                <th width="50">Factura</th>
                <th width="200">Orden de compra</th>
                <th width="150">Tipo de compra</th>
                <th width="100">Tienda cargo</th>
                <th width="150">Nombre de tienda</th>
                <th width="100">Entrada bultos</th>
                <th width="100">Fecha entrada</th>
                <th width="120">Recibió</th>
                <th width="50">Portal</th>
                <th width="50">Fecha d/Alta</th>
                <th width="50">Opciones</th>
            </tr>
        <?php
            include('../php/conexion.php');
            $registro = mysql_query("SELECT * FROM portalley ORDER BY num_fact_ley ASC"); 
            while($registro2 = mysql_fetch_array($registro)){
                echo '<tr>
                        <td>'.$registro2['fecha_factley'].'</td>
                        <td>'.$registro2['emp_ley'].'</td>
                        <td>'.$registro2['num_fact_ley'].'</td>
                        <td>'.$registro2['ord_comp_ley'].'</td>
                        <td>'.$registro2['tipo_de_compra'].'</td>
                        <td>'.$registro2['tien_carg_ley'].'</td>
                        <td>'.$registro2['nomb_tiend_ley'].'</td>
                        <td>'.$registro2['num_entr_ley'].'</td>
                        <td>'.$registro2['fech_entr_ley'].'</td>
                        <td>'.$registro2['nomb_recibio'].'</td>
                        <td>'.$registro2['arriv_port_ley'].'</td>
                        <td>'.fechaNormal($registro2['fecha_reg_fact']).'</td>
                        <td>
                            <a href="javascript:editarPortalLey('.$registro2['id_port_ley'].');" class="glyphicon glyphicon-edit"></a>
                            <a href="javascript:eliminarPortalLey('.$registro2['id_port_ley'].');" class="glyphicon glyphicon-remove-circle"></a>
                        </td>
                    </tr>';
            }
        ?>
        </table>
    </div>
    <!-- MODAL PARA EL REGISTRO DE MARCAS-->
    <div class="modal fade" id="registra-fact-ley" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title" id="myModalLabel"><b>Registra o Edita una factura</b></h4>
            </div>
            <form id="formulario-fact-ley" class="formulario" onsubmit="return agregaRegistroFactLey();">
            <div class="modal-body">
				<table border="0" width="100%">
               		 <tr>
                        <td colspan="2"><input type="text" required="required" readonly="readonly" id="id-port-ley" name="id-port-ley" readonly="readonly" style="visibility:hidden; height:5px;"/></td>
                    </tr>
                     <tr>
                    	<td width="150">Proceso: </td>
                        <td><input type="text" required="required" readonly="readonly" id="pro-port-ley" name="pro-port-ley"/></td>
                    </tr>
                	  <tr>
                    	  <td>Fecha de factura: </td>
                        <td><input type="date" name="fechaFactLey" id="fechaFactLey" maxlength="100"/></td>
                    </tr>
                    <tr>
                        <td>Empresa: </td>
                        <td><select required="required" name="empreLey" id="empreLey">
                              <option value="Casa Ley">Casa Ley</option>
                              <option value="Centros Comerciales">Operadora de Centros Comerciales</option>
                              <option value="Conveniencia">Operadora Conveniencia</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                    	<td>Numero de factura: </td>
                        <td><input type="text" name="numFactLey" id="numFactLey" maxlength="100"/></td>
                    </tr>

                    <tr>
                        <td>Orden de compra: </td>
                        <td><input type="text" name="ordCompraLey" id="ordCompraLey" maxlength="150"/></td>
                    </tr>

                    <tr>
                        <td>Tipo de compra: </td>
                        <td><select required="required" name="tipoCompraLey" id="tipoCompraLey">
                              <option value="Mercaderia">Mercaderia</option>
                              <option value="Servicios">Servicios</option>
                              <option value="Activos Fijos">Activos Fijos</option>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td>Tienda a cargo: </td>
                        <td><input type="text" name="tienCargoLey" id="tienCargoLey" maxlength="100"/></td>
                    </tr>

                    <tr>
                        <td>Nombre de tienda: </td>
                        <td><input type="text" name="nombTienLey" id="nombTienLey" maxlength="100"/></td>
                    </tr>

                    <tr>
                        <td>N° Entrada a bultos: </td>
                        <td><input type="text" name="numEntrBultLey" id="numEntrBultLey" maxlength="100"/></td>
                    </tr>

                    <tr>
                        <td>Fecha de entrada: </td>
                        <td><input type="date" name="fechEntrBultLey" id="fechEntrBultLey" maxlength="100"/></td>
                    </tr>

                    <tr>
                        <td>Nombre de quien recibio: </td>
                        <td><input type="text" name="nomQuienRecibLey" id="nomQuienRecibLey" maxlength="100"/></td>
                    </tr>

                    <tr>
                        <td>N° de remision: </td>
                        <td><input type="text" name="numRemLey" id="numRemLey" maxlength="100"/></td>
                    </tr>

                    <tr>
                        <td>Esta en el Portal: </td>
                        <td><select required="required" name="estPortLey" id="estPortLey">
                              <option value="Pendiente">Pendiente</option>
                              <option value="Subida">Subida</option>
                            </select>
                        </td>
                    </tr>


                    <tr>
                    	<td colspan="2">
                        	<div id="mensaje"></div>
                        </td>
                    </tr>
                </table>
            </div>
            
            <div class="modal-footer">
            	<input type="submit" value="Registrar" class="btn btn-success" id="reg-fact-ley"/>
                <input type="submit" value="Editar" class="btn btn-warning"  id="edi-fact-ley"/>
            </div>
            </form>
          </div>
        </div>
      </div>
      

</body>
</html>