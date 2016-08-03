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
<script src="../js/autocomplete.js"></script>


<link href="../css/validationEngine.jquery.css" rel="stylesheet">
<script src="../js/jquery.validationEngine.min.js"></script>
<script src="../js/jquery.validationEngine-es.js"></script>
<script src="../js/agregafilas.js"></script>

  <link rel="stylesheet" href="../ejemplo/docsupport/prism.css">
  <link rel="stylesheet" href="../ejemplo/chosen.css">
  <style type="text/css" media="all">
    /* fix rtl for demo */
    .chosen-rtl .chosen-drop { left: -9000px; }
  </style>

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
          <li><a href="cortinas.php">Medidas Cortinas</a></li>
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
      <label class="control-label col-sm-1">Cotizacion:</label>
      <div class="col-sm-3"><input type="number" class="form-control" readonly id="idcotizacion" name="idcotizacion"></div>


      <label class="control-label col-sm-1">Fecha:</label>
      <div class="col-sm-3"><input type="date" class="form-control" id="fechacotizacion" name="fechacotizacion"></div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-1">Compañia:</label>
      <div class="col-sm-3"><input type="text" class="form-control" id="nombrecompaniacte" name="nombrecompaniacte"></div>


      <label class="control-label col-sm-1">Atencion:</label>
      <div class="col-sm-3"><input type="text" class="form-control" id="atencot" name="atencot"></div>



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




<div id="container ">
  <div class="row-fluid top-buffer">
    <div class="col-sm-10 col-lg-offset-1 text-center">
      <form id="miform">
        <table id="tblprod" class="table table-hover table-bordered">
            <thead>
            <tr>
              <th>Partida</th>
              <th>Nombre</th>
              <th>Cantidad</th>
              <th>Precio</th>
            </tr>
            </thead>
            <tbody>

            <tr>
                  <td>1</td>
                  <td class="col-sm-7">
                    <div>
                      <select placeholder="Selecciona un producto" class="form-control chosen-select-deselect chosen-rtl" id="nombredelProd" name="nombredelProd[]">
                         <option disabled selected hidden></option>
                            <?php
                            include('../php/conexion.php');
                            $sql="SELECT * FROM productos
                            inner join marcas on marcas.id_mca = productos.id_mca ORDER BY nomb_prod ASC";
                            $rec=mysql_query($sql);
                            while($row=mysql_fetch_array($rec))
                            {
                              echo "<option>";
                              echo $row['nomb_prod'].' '.$row['desc_prod'].' '.$row['nomb_mca'];
                              echo "</option>";
                            }

                             ?>
                      </select>
                    </div>
                  </td>
                  <td class="col-sm-2"><input class="form-control" required="required" onkeyup="calcularImporte();" id="cantProd" name="cantProd[]" placeholder="Cantidad"></td>
                  <td class='col-sm-2'><input class='form-control' required='required' id='precioRecomProd' name='precioRecomProd[]'></td>

            </tr>


              <tr>
                  <td>2</td>
                  <td class="col-sm-7">
                    <div class="form-group">
                      <select placeholder="Selecciona un producto" class="form-control chosen-select-deselect chosen-rtl" id="nombredelProd" name="nombredelProd[]">
                         <option disabled selected hidden></option>
                            <?php
                            $sql="SELECT * FROM productos
                            inner join marcas on marcas.id_mca = productos.id_mca ORDER BY nomb_prod ASC";
                            $rec=mysql_query($sql);
                            while($row=mysql_fetch_array($rec))
                            {
                              echo "<option>";
                              echo $row['nomb_prod'].' '.$row['desc_prod'].' '.$row['nomb_mca'];
                              echo "</option>";
                            }

                             ?>
                      </select>
                    </div>
                  </td>
                  <td class="col-sm-2"><input class="form-control" required="required" onkeyup="calcularImporte();" id="cantProd" name="cantProd[]" placeholder="Cantidad"></td>
                  <td class='col-sm-2'><input class='form-control' required='required' id='precioRecomProd' name='precioRecomProd[]'></td>

            </tr>

            <tr>
                  <td>3</td>
                  <td class="col-sm-7">
                    <div class="form-group">
                      <select placeholder="Selecciona un producto" class="form-control chosen-select-deselect chosen-rtl" id="nombredelProd" name="nombredelProd[]">
                         <option disabled selected hidden></option>
                            <?php
                            $sql="SELECT * FROM productos
                            inner join marcas on marcas.id_mca = productos.id_mca ORDER BY nomb_prod ASC";
                            $rec=mysql_query($sql);
                            while($row=mysql_fetch_array($rec))
                            {
                              echo "<option>";
                              echo $row['nomb_prod'].' '.$row['desc_prod'].' '.$row['nomb_mca'];
                              echo "</option>";
                            }

                             ?>
                      </select>
                    </div>
                  </td>
                  <td class="col-sm-2"><input class="form-control" required="required" onkeyup="calcularImporte();" id="cantProd" name="cantProd[]" placeholder="Cantidad"></td>
                  <td class='col-sm-2'><input class='form-control' required='required' id='precioRecomProd' name='precioRecomProd[]'></td>

            </tr>

             <tr>
                  <td>4</td>
                  <td class="col-sm-7">
                    <div class="form-group">
                      <select placeholder="Selecciona un producto" class="form-control chosen-select-deselect chosen-rtl" id="nombredelProd" name="nombredelProd[]">
                         <option disabled selected hidden></option>
                            <?php
                            $sql="SELECT * FROM productos
                            inner join marcas on marcas.id_mca = productos.id_mca ORDER BY nomb_prod ASC";
                            $rec=mysql_query($sql);
                            while($row=mysql_fetch_array($rec))
                            {
                              echo "<option>";
                              echo $row['nomb_prod'].' '.$row['desc_prod'].' '.$row['nomb_mca'];
                              echo "</option>";
                            }

                             ?>
                      </select>
                    </div>
                  </td>
                  <td class="col-sm-2"><input class="form-control" required="required" onkeyup="calcularImporte();" id="cantProd" name="cantProd[]" placeholder="Cantidad"></td>
                  <td class='col-sm-2'><input class='form-control' required='required' id='precioRecomProd' name='precioRecomProd[]'></td>

            </tr>

            <tr>
                  <td>5</td>
                  <td class="col-sm-7">
                    <div class="form-group">
                      <select placeholder="Selecciona un producto" class="form-control chosen-select-deselect chosen-rtl" id="nombredelProd" name="nombredelProd[]">
                         <option disabled selected hidden></option>
                            <?php
                            $sql="SELECT * FROM productos
                            inner join marcas on marcas.id_mca = productos.id_mca ORDER BY nomb_prod ASC";
                            $rec=mysql_query($sql);
                            while($row=mysql_fetch_array($rec))
                            {
                              echo "<option>";
                              echo $row['nomb_prod'].' '.$row['desc_prod'].' '.$row['nomb_mca'];
                              echo "</option>";
                            }

                             ?>
                      </select>
                    </div>
                  </td>
                  <td class="col-sm-2"><input class="form-control" required="required" onkeyup="calcularImporte();" id="cantProd" name="cantProd[]" placeholder="Cantidad"></td>
                  <td class='col-sm-2'><input class='form-control' required='required' id='precioRecomProd' name='precioRecomProd[]'></td>

            </tr>

             <tr>
                  <td>6</td>
                  <td class="col-sm-7">
                    <div class="form-group">
                      <select placeholder="Selecciona un producto" class="form-control chosen-select-deselect chosen-rtl" id="nombredelProd" name="nombredelProd[]">
                         <option disabled selected hidden></option>
                            <?php
                            $sql="SELECT * FROM productos
                            inner join marcas on marcas.id_mca = productos.id_mca ORDER BY nomb_prod ASC";
                            $rec=mysql_query($sql);
                            while($row=mysql_fetch_array($rec))
                            {
                              echo "<option>";
                              echo $row['nomb_prod'].' '.$row['desc_prod'].' '.$row['nomb_mca'];
                              echo "</option>";
                            }

                             ?>
                      </select>
                    </div>
                  </td>
                  <td class="col-sm-2"><input class="form-control" required="required" onkeyup="calcularImporte();" id="cantProd" name="cantProd[]" placeholder="Cantidad"></td>
                  <td class='col-sm-2'><input class='form-control' required='required' id='precioRecomProd' name='precioRecomProd[]'></td>

            </tr>

            <tr>
                  <td>7</td>
                  <td class="col-sm-7">
                    <div class="form-group">
                      <select placeholder="Selecciona un producto" class="form-control chosen-select-deselect chosen-rtl" id="nombredelProd" name="nombredelProd[]">
                         <option disabled selected hidden></option>
                            <?php
                            $sql="SELECT * FROM productos
                            inner join marcas on marcas.id_mca = productos.id_mca ORDER BY nomb_prod ASC";
                            $rec=mysql_query($sql);
                            while($row=mysql_fetch_array($rec))
                            {
                              echo "<option>";
                              echo $row['nomb_prod'].' '.$row['desc_prod'].' '.$row['nomb_mca'];
                              echo "</option>";
                            }

                             ?>
                      </select>
                    </div>
                  </td>
                  <td class="col-sm-2"><input class="form-control" required="required" onkeyup="calcularImporte();" id="cantProd" name="cantProd[]" placeholder="Cantidad"></td>
                  <td class='col-sm-2'><input class='form-control' required='required' id='precioRecomProd' name='precioRecomProd[]'></td>

            </tr>

            <tr>
                  <td>8</td>
                  <td class="col-sm-7">
                    <div class="form-group">
                      <select placeholder="Selecciona un producto" class="form-control chosen-select-deselect chosen-rtl" id="nombredelProd" name="nombredelProd[]">
                         <option disabled selected hidden></option>
                            <?php
                            $sql="SELECT * FROM productos
                            inner join marcas on marcas.id_mca = productos.id_mca ORDER BY nomb_prod ASC";
                            $rec=mysql_query($sql);
                            while($row=mysql_fetch_array($rec))
                            {
                              echo "<option>";
                              echo $row['nomb_prod'].' '.$row['desc_prod'].' '.$row['nomb_mca'];
                              echo "</option>";
                            }

                             ?>
                      </select>
                    </div>
                  </td>
                  <td class="col-sm-2"><input class="form-control" required="required" onkeyup="calcularImporte();" id="cantProd" name="cantProd[]" placeholder="Cantidad"></td>
                  <td class='col-sm-2'><input class='form-control' required='required' id='precioRecomProd' name='precioRecomProd[]'></td>

            </tr>

            <tr>
                  <td>9</td>
                  <td class="col-sm-7">
                    <div class="form-group">
                      <select placeholder="Selecciona un producto" class="form-control chosen-select-deselect chosen-rtl" id="nombredelProd" name="nombredelProd[]">
                         <option disabled selected hidden></option>
                            <?php
                            $sql="SELECT * FROM productos
                            inner join marcas on marcas.id_mca = productos.id_mca ORDER BY nomb_prod ASC";
                            $rec=mysql_query($sql);
                            while($row=mysql_fetch_array($rec))
                            {
                              echo "<option>";
                              echo $row['nomb_prod'].' '.$row['desc_prod'].' '.$row['nomb_mca'];
                              echo "</option>";
                            }

                             ?>
                      </select>
                    </div>
                  </td>
                  <td class="col-sm-2"><input class="form-control" required="required" onkeyup="calcularImporte();" id="cantProd" name="cantProd[]" placeholder="Cantidad"></td>
                  <td class='col-sm-2'><input class='form-control' required='required' id='precioRecomProd' name='precioRecomProd[]'></td>

            </tr>

            <tr>
                  <td>10</td>
                  <td class="col-sm-7">
                    <div class="form-group">
                      <select placeholder="Selecciona un producto" class="form-control chosen-select-deselect chosen-rtl" id="nombredelProd" name="nombredelProd[]">
                         <option disabled selected hidden></option>
                            <?php
                            $sql="SELECT * FROM productos
                            inner join marcas on marcas.id_mca = productos.id_mca ORDER BY nomb_prod ASC";
                            $rec=mysql_query($sql);
                            while($row=mysql_fetch_array($rec))
                            {
                              echo "<option>";
                              echo $row['nomb_prod'].' '.$row['desc_prod'].' '.$row['nomb_mca'];
                              echo "</option>";
                            }

                             ?>
                      </select>
                    </div>
                  </td>
                  <td class="col-sm-2"><input class="form-control" required="required" onkeyup="calcularImporte();" id="cantProd" name="cantProd[]" placeholder="Cantidad"></td>
                  <td class='col-sm-2'><input class='form-control' required='required' id='precioRecomProd' name='precioRecomProd[]'></td>

            </tr>

            <tr>
                  <td>11</td>
                  <td class="col-sm-7">
                    <div class="form-group">
                      <select placeholder="Selecciona un producto" class="form-control chosen-select-deselect chosen-rtl" id="nombredelProd" name="nombredelProd[]">
                         <option disabled selected hidden></option>
                            <?php
                            $sql="SELECT * FROM productos
                            inner join marcas on marcas.id_mca = productos.id_mca ORDER BY nomb_prod ASC";
                            $rec=mysql_query($sql);
                            while($row=mysql_fetch_array($rec))
                            {
                              echo "<option>";
                              echo $row['nomb_prod'].' '.$row['desc_prod'].' '.$row['nomb_mca'];
                              echo "</option>";
                            }

                             ?>
                      </select>
                    </div>
                  </td>
                  <td class="col-sm-2"><input class="form-control" required="required" onkeyup="calcularImporte();" id="cantProd" name="cantProd[]" placeholder="Cantidad"></td>
                  <td class='col-sm-2'><input class='form-control' required='required' id='precioRecomProd' name='precioRecomProd[]'></td>

            </tr>

            <tr>
                  <td>12</td>
                  <td class="col-sm-7">
                    <div class="form-group">
                      <select placeholder="Selecciona un producto" class="form-control chosen-select-deselect chosen-rtl" id="nombredelProd" name="nombredelProd[]">
                         <option disabled selected hidden></option>
                            <?php
                            $sql="SELECT * FROM productos
                            inner join marcas on marcas.id_mca = productos.id_mca ORDER BY nomb_prod ASC";
                            $rec=mysql_query($sql);
                            while($row=mysql_fetch_array($rec))
                            {
                              echo "<option>";
                              echo $row['nomb_prod'].' '.$row['desc_prod'].' '.$row['nomb_mca'];
                              echo "</option>";
                            }

                             ?>
                      </select>
                    </div>
                  </td>
                  <td class="col-sm-2"><input class="form-control" required="required" onkeyup="calcularImporte();" id="cantProd" name="cantProd[]" placeholder="Cantidad"></td>
                  <td class='col-sm-2'><input class='form-control' required='required' id='precioRecomProd' name='precioRecomProd[]'></td>

            </tr>

            </tbody>
            <tfoot>
              <tr><td></td><td></td><td align="right"><strong>Subtotal</strong></td><td><input class="form-control" type="text"></td></tr>
              <tr><td></td><td></td><td align="right"><strong>I.V.A(16%)</strong></td><td><input class="form-control" type="text"></td></tr>
              <tr><td></td><td></td><td align="right"><strong>Total</strong></td><td><input class="form-control" type="text"></td></tr>
            </tfoot>
          </table>
          <button id="btnsubmit" type="submit" class="btn btn-success">Guardar</button>
      </form>
    </div>
  </div>
</div>



  <script src="../ejemplo/chosen.jquery.js" type="text/javascript"></script>
  <script src="../ejemplo/docsupport/prism.js" type="text/javascript" charset="utf-8"></script>
  <script src="../ejemplo/scriptchosen.js" type="text/javascript"></script>









</body>

</html>