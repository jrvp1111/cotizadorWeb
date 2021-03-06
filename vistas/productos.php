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
          <li  class="active"><a href="productos.php">Productos</a></li>
          <li><a href="marcas.php">Marcas</a></li>
          <li><a href="usuarios.php">Usuarios</a></li>
          <li><a href="pagos.php">Pagos</a></li>
          <li><a href="tcambio.php">T. Cambio</a></li>
          <li><a href="cortinas.php">Medidas Cortinas</a></li>
        </ul>
      </div>
    </div>
  </nav>

    <!-- termina el menu-->

  <!--saltos para que no se oculte el texto en el detras del nav-->
  <br><br><hr>



    <header>Productos</header>


    <?php
$i=0;
$j=0;
$k=0;
   echo "<table border='1'>";
   
   while($i < 5){
      echo "<tr>";
      while ($j < 3){
         echo "<td>";
            echo "Esto es un ejemplo $k";
            $k++;
         echo "</td>";
      $j++;      
      }
      $j=0;
      echo "</tr>";
   $i++;
   }  
echo "</table>"; 
?>


    <section>
    <table border="0" align="center">
      <tr>
          <td width="335"><input type="text" placeholder="Busca un producto" id="bs-prod"/></td>
            <td width="100"><button id="nuevo-producto" class="btn btn-primary">Nuevo</button></td>
        </tr>
    </table>
    </section>

    <div class="registros" id="agrega-registros-prod">
        <table class="table table-striped table-condensed table-hover">
            <tr>
                <th width="200">Nombre</th>
                <th width="500">Descripción</th>
                <th width="150">Marca</th>
                <th width="150">Origen</th>
                <th width="150">Estado</th>
                <th width="150">Costo</th>
                <th width="150">Precio</th>
                <th width="150">Imagen</th>
                <th width="150">Fecha</th>
                <th width="50">Opciones</th>
            </tr>


        <?php
            include('../php/conexion.php');
            $registro = mysql_query("SELECT * FROM productos
              left join marcas on productos.id_mca=marcas.id_mca ORDER BY desc_prod ASC");
            while($registro2 = mysql_fetch_array($registro)){
                echo '<tr>
                        <td>'.$registro2['nomb_prod'].'</td>
                        <td>'.$registro2['desc_prod'].'</td>
                        <td>'.$registro2['nomb_mca'].'</td>
                        <td>'.$registro2['origen_prod'].'</td>
                        <td>'.$registro2['edo_prod'].'</td>
                        <td>'.$registro2['cost_prod'].' '.$registro2['mon_prod'].'</td>';
                        if($registro2['mon_prod']=='MXN')
                          {
                            if($registro2['prec_rec']>$registro2['prec_prod'])
                              {
                                echo '<td class="color10">$ '.$registro2['prec_rec'].' '.'<span class="glyphicon glyphicon-ok-circle"></span></td>';
                              }
                            else
                              {
                                echo '<td class="color9">$ '.$registro2['prec_rec'].' '.'<span class="glyphicon glyphicon-warning-sign"></span></td>';
                              }
                          }
                        else
                        {
                          if($registro2['prec_rec']>$registro2['prec_prod'])
                              {
                                echo '<td class="color10">$ '.$registro2['prec_rec'].' '.'<span class="glyphicon glyphicon-ok-circle"></span></td>';
                              }
                            else
                              {
                                echo '<td class="color9">$ '.$registro2['prec_rec'].' '.'<span class="glyphicon glyphicon-warning-sign"></span></td>';
                              }
                        }

                  echo '<td><img onmouseover="this.height=200;" onmouseout="this.height=50;" height="50px"src="../Imagenes/'.$registro2['id_mca'].' '.$registro2['nomb_mca'].'/'.$registro2['Imagen'].'"/></td>
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
    <!-- MODAL PARA EL REGISTRO DE PRODUCTOS-->
    <div class="modal fade" id="registra-producto" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title" id="myModalLabel"><b>Registra o Edita un Producto</b></h4>
            </div>
            <form id="formulario-prod" class="formulario" onsubmit="return agregaRegistroProd();">
            <div class="modal-body">
        <table border="0" width="100%">
                   <tr>
                        <td colspan="2"><input type="text" required="required" readonly="readonly" id="id-prod" name="id-prod" readonly="readonly" style="visibility:hidden; height:5px;"/></td>
                    </tr>
                     <tr>
                      <td width="150">Proceso: </td>
                        <td><input type="text" required="required" readonly="readonly" id="pro-prod" name="pro-prod"/></td>
                    </tr>

                    <tr>
                      <td>Nombre: </td>
                        <td><input type="text" required="required" name="nombreProd" id="nombreProd" maxlength="100"/></td>
                    </tr>

                    <tr>
                      <td>Descripcion: </td>
                        <td><input type="text" required="required" name="descProd" id="descProd" maxlength="100"/></td>
                    </tr>


                    <tr>
                      <td>Marca: </td>
                        <td><select required="required" name="mcaProd" id="mcaProd">

                          <?php
                          $sql="SELECT * FROM marcas ORDER BY nomb_mca ASC";
                          $rec=mysql_query($sql);
                          while($row=mysql_fetch_array($rec))
                          {
                            echo "<option>";
                            echo $row['id_mca']." ".$row['nomb_mca'];
                            echo "</option>";
                          }


                           ?>

                            </select>
                        </td>
                    </tr>

                    <tr>
                      <td>Origen: </td>
                        <td><select required="required" name="origenProd" id="origenProd">
                                <option value="Nacional">Nacional</option>
                                <option value="Importación">Importación</option>
                            </select>
                        </td>
                    </tr>

                    <tr>
                      <td>Estado: </td>
                        <td><select required="required" name="edoProd" id="edoProd">
                            <option value="Activo">Activo</option>
                            <option value="Inactivo">Inactivo</option>
                            <option value="Descontinuado">Descontinuado</option>
                            </select>
                        </td>
                    </tr>

                    <tr>
                      <td>Nota: </td>
                        <td><input type="text" name="notaProd" id="notaProd" maxlength="100"/></td>
                    </tr>

                    <tr>
                      <td>Costo: </td>
                        <td><input type="text" required="required" name="costProd" id="costProd" onchange="calcular();" maxlength="100"/></td>
                    </tr>

                    <tr>
                      <td>Moneda: </td>
                        <td><select required="required" onmouseover="calcular();" name="monProd" id="monProd">
                            <option value="" disabled selected hidden>Selecciona el tipo de moneda...</option>
                            <option value="MXN">MXN</option>
                            <option value="USD">USD</option>
                            </select>
                        </td>
                    </tr>



                      <td>Tipo de cambio: </td>
                        <td><select required="required" id="preciotipoCambio" name="preciotipoCambio">

                          <?php
                          $sql="SELECT * FROM divisas ORDER BY id_tcambio DESC LIMIT 1";
                          $rec=mysql_query($sql);
                          while($row=mysql_fetch_array($rec))
                          {
                            echo "<option>";
                            echo $row['precio_dolar'];
                            echo "</option>";
                          }


                           ?>

                            </select>
                        </td>


                    <tr>
                      <td>Porcentaje de utilidad: </td>
                        <td><input type="text" required="required" name="utilidadProd" id="utilidadProd" onchange="calcular();" maxlength="100"/></td>
                    </tr>

                    <script language="JavaScript">
                        function calcular()
                        {   var obtentc = parseFloat( document.getElementById("preciotipoCambio").value);
                            var tc = document.getElementById("monProd").value;
                            var precio=  parseFloat( document.getElementById("costProd").value);
                            var utilidad = parseFloat( document.getElementById("utilidadProd").value);
                            if  (tc == 'USD')
                              {
                                precioventa = document.getElementById("precProd").value = obtentc*precio*utilidad/100+(obtentc*precio);
                              }

                           else{


                            
                            var precioventa = document.getElementById("precProd").value = ((precio*utilidad)/100)+precio;
                          }

                        }
                    </script>

                    <tr>
                      <td>Precio venta: </td>
                        <td><input type="text" required="required" readonly="readonly" name="precProd" id="precProd" maxlength="100"/></td>
                    </tr>

                    <tr>
                        <td>Precio recomendado: </td>
                        <td><input type="text" required="required" name="precRec" id="precRec" maxlength="100"/></td>
                    </tr>


                    <tr>
                      <td colspan="2">
                          <div id="mensaje"></div>
                        </td>
                    </tr>
                </table>
            </div>

            <div class="modal-footer">
              <input type="submit" value="Registrar" class="btn btn-success" id="reg-prod"/>
                <input type="submit" value="Editar" class="btn btn-warning"  id="edi-prod"/>
            </div>
            </form>
          </div>
        </div>
      </div>


</body>
</html>