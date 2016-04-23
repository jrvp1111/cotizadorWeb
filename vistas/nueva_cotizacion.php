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


    <header>Nueva Cotizacion</header>


<form id="formulario-prod" class="formulario" on="return agregaRegistroProd();">
            <div>
               <table border="0" width="100%">
                   <tr>
                        <td colspan="2"><input type="text" required="required" readonly="readonly" id="id-prod" name="id-prod" readonly="readonly" style="visibility:hidden; height:5px;"/></td>
                    </tr>
                     <tr>
                      <td width="150">Proceso: </td>
                        <td><input type="text" required="required" readonly="readonly" id="pro-prod" name="pro-prod"/></td>
                    </tr>

                    <tr>
                      <td>Compañia:</td>
                        <td><input type="text" required="required" name="nombreProd" id="nombreProd" maxlength="100"/></td>
                    </tr>

                    <tr>
                      <td>Atencion:</td>
                        <td><input type="text" required="required" name="descProd" id="descProd" maxlength="100"/></td>
                    </tr>


                    <tr>
                      <td>Marca: </td>
                        <td><select required="required" name="mcaProd" id="mcaProd">

                          <?php
                          include('../php/conexion.php');
                          $sql="SELECT * FROM marcas ORDER BY nomb_mca ASC";
                          $rec=mysql_query($sql);
                          while($row=mysql_fetch_array($rec))
                          {
                            echo "<option>";
                            echo $row['nomb_mca'];
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
                        <td><input type="text" required="required" name="costProd" id="costProd" onkeyup="calcular();" maxlength="100"/></td>
                    </tr>

                    <tr>
                      <td>Porcentaje de utilidad: </td>
                        <td><input type="text" required="required" name="utilidadProd" id="utilidadProd" onkeyup="calcular();" maxlength="100"/></td>
                    </tr>

                    <script language="JavaScript">  
                        function calcular()
                        {
                            var precio=  parseFloat( document.getElementById("costProd").value);   
                            var costo = parseFloat( document.getElementById("utilidadProd").value);            
                            var precioventa = document.getElementById("precProd").value = ((precio*costo)/100)+precio;              

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

</body>
</html>