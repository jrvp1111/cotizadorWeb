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
          <li class="active"><a href="clientes.php">Clientes</a></li>
          <li><a href="productos.php">Productos</a></li>
          <li><a href="marcas.php">Marcas</a></li>
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



    <header>Clientes</header>
    <section>
    <table border="0" align="center">
    	<tr>
        	<td width="335"><input type="text" placeholder="Busca un cliente:" id="bs-cte"/></td>
            <td width="100"><button id="nuevo-cliente" class="btn btn-primary">Nuevo</button></td>
        </tr>
    </table>
    </section>

    <div class="registros" id="agrega-registros-cte">
        <table class="table table-striped table-condensed table-hover">
            <tr>
                <th width="300">Compañia</th>
                <th width="300">Telefono</th>
                <th width="200">Ciudad</th>
                <th width="150">Estado</th>
                <th width="150">Fecha</th>
                <th width="50">Opciones</th>
            </tr>
        <?php
            include('../php/conexion.php');
            $registro = mysql_query("SELECT * FROM clientes");
            while($registro2 = mysql_fetch_array($registro)){
                echo '<tr>
                        <td>'.$registro2['nombcomer_cte'].'</td>
                        <td>'.$registro2['tel_cte'].'</td>
                        <td>'.$registro2['ciud_cte'].'</td>
                        <td>'.$registro2['edo_cte'].'</td>
                        <td>'.fechaNormal($registro2['fecha_cte']).'</td>
                        <td>
                            <a href="javascript:editarCliente('.$registro2['id_cte'].');" class="glyphicon glyphicon-edit"></a>
                            <a href="javascript:eliminarCliente('.$registro2['id_cte'].');" class="glyphicon glyphicon-remove-circle"></a>
                        </td>
                    </tr>';
            }
        ?>
        </table>
    </div>
    <!-- MODAL PARA EL REGISTRO DE MARCAS-->
    <div class="modal fade" id="registra-cliente" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title" id="myModalLabel"><b>Registra o Edita un cliente</b></h4>
            </div>
            <form id="formulario-cte" class="formulario" onsubmit="return agregaRegistroCte();">
            <div class="modal-body">
				<table border="0" width="100%">
               		 <tr>
                        <td colspan="2"><input type="text" required="required" readonly="readonly" id="id-cte" name="id-cte" readonly="readonly" style="visibility:hidden; height:5px;"/></td>
                    </tr>
                     <tr>
                    	<td width="150">Proceso: </td>
                        <td><input type="text" required="required" readonly="readonly" id="pro-cte" name="pro-cte"/></td>
                    </tr>
                  	<tr>
                    	<td>Nombre Fiscal: </td>
                        <td><input type="text" required="required" name="compCte" id="compCte" maxlength="100"/></td>
                    </tr>
                    <tr>
                      <td>Nombre Comercial: </td>
                        <td><input type="text" required="required" name="nombcomerCte" id="nombcomerCte" maxlength="100"/></td>
                    </tr>
                    <tr>
                      <td>Telefono: </td>
                        <td><input type="text" required="required" name="telCte" id="telCte" maxlength="100"/></td>
                    </tr>
                    <tr>
                      <td>Dirección: </td>
                        <td><input type="text" required="required" name="dirCte" id="dirCte" maxlength="100"/></td>
                    </tr>
                    <tr>
                    <td>Ciudad: </td>
                        <td><input type="text" required="required" name="ciudCte" id="ciudCte" maxlength="100"/></td>
                    </tr>
                   <tr>
                      <td>Estado: </td>
                        <td><select required="required" name="edoCte" id="edoCte">
                                <option value="Aguascalientes">Aguascalientes</option>
                                <option value="Baja California">Baja California</option>
                                <option value="Baja California Sur">Baja California Sur</option>
                                <option value="Campeche">Campeche</option>
                                <option value="Coahuila">Coahuila</option>
                                <option value="Colima">Colima</option>
                                <option value="Chiapas">Chihuahua</option>
                                <option value="Distrito Federal">Distrito Federal</option>
                                <option value="Durango">Durango</option>
                                <option value="Guanajuato">Guanajuato</option>
                                <option value="Guerrero">Guerrero</option>
                                <option value="Hidalgo">Hidalgo</option>
                                <option value="Jalisco">Jalisco</option>
                                <option value="México">México</option>
                                <option value="Michoacán">Michoacán</option>
                                <option value="Morelos">Morelos</option>
                                <option value="Nayarit">Nayarit</option>
                                <option value="Nuevo León">Nuevo León</option>
                                <option value="Oaxaca">Oaxaca</option>
                                <option value="Puebla">Puebla</option>
                                <option value="Querétaro">Querétaro</option>
                                <option value="Quintana Roo">Quintana Roo</option>
                                <option value="San Luis Potosí">San Luis Potosí</option>
                                <option value="Sinaloa">Sinaloa</option>
                                <option value="Sonora">Sonora</option>
                                <option value="Tabasco">Tabasco</option>
                                <option value="Tamaulipas">Tamaulipas</option>
                                <option value="Tlaxcala">Tlaxcala</option>
                                <option value="Veracruz">Veracruz</option>
                                <option value="Yucatán">Yucatán</option>
                                <option value="Zacatecas">Zacatecas</option>
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
            	 <input type="submit" value="Registrar" class="btn btn-success" id="reg-cte"/>
               <input type="submit" value="Editar" class="btn btn-warning"  id="edi-cte"/>
            </div>
            </form>
          </div>
        </div>
      </div>


</body>
</html>