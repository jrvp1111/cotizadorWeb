<!DOCTYPE html>
<html lang="en">
<head>
  <title>Cotizaciones</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
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
        <li><a href="fabricantes.php">Fabricantes</a></li>
        <li><a href="#">Usuarios</a></li>
        <li><a href="#">Pagos</a></li>        
      </ul>
    </div>
  </div>
</nav>
      
<!-- termina el menu-->

<!--saltos para que no se oculte el texto en el detras del nav-->
<br><br><hr>





<div class="container">
  <h2>Productos</h2>
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#modalnuevoproducto">Nuevo Producto</button>

  <!-- Modal -->
  <div class="modal fade" id="modalnuevoproducto" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Agregar nuevo producto</h4>
        </div>
        <div class="modal-body">
         <!--contenido del modal-->

                <form role="form" action="insertarproducto.php" method="post" name="frmproducto" enctype="multipart/form-data">
                      
                      <div class="container">

                            <div class="col-xs-8">
                              <div class="form-group">
                                <label for="modproducto">Modelo del producto:</label>
                                <input type="text" class="form-control" name="modeloproducto">
                              </div>
                            </div>

                            <div class="col-xs-8">
                              <div class="form-group">
                                <label for="descproducto">Descripción del producto:</label>
                                <input type="text" class="form-control" name="descripcionproducto">
                              </div>
                            </div>


                                 <!--aqui se selecciona el fabricante desde la base de datos-->

                                            <?php 
                                            include("config/configdb.php");                                                       

                                            //hace conexion a la db
                                            $con=mysql_connect($host,$user,$pw) or die("problemas al conectar");
                                            mysql_select_db($db,$con) or die ("problemas a conectar la bd");


                                            //hacemos la consulta de seleccion para seleccionar los registros de la tabla fabricantes
                                            $registro=mysql_query("SELECT * FROM fabricantes")
                                            or die ("problemas en consulta".mysql_error());

                                           
                                            

                                            echo "<div class=col-xs-8>";
                                            echo "<div class=form-group>";
                                            echo "<label for=fabproducto>Selecciona el fabricante:</label>";
                                            echo "<select class=form-control name=fabricanteproducto>";

                                            //nos va ayudar a agarrar los valores de uno por uno de la base de datos
                                            while ($reg=mysql_fetch_array($registro))
                                                {
                                                  // echo $reg['nombre_fabricante'];
                                                  echo "<option value='".$reg['nombre_fabricante']."'>".$reg['nombre_fabricante']."</option>";

                                                }

                                            echo "</select>";
                                            echo "</div>";
                                            echo "</div>";

                                             ?>




                            <div class="col-xs-8">
                              <div class="form-group">
                                <label for="edoproducto">Estado del producto:</label>
                                <select class="form-control" name="estadoproducto">
                                  <option>Activo</option>
                                  <option>Inactivo</option>
                                </select>      
                              </div>
                            </div>

                            <div class="col-xs-8">
                              <div class="form-group">
                                <label for="costproducto">Costo del producto:</label>
                                <input type="text" class="form-control" name="costoproducto">
                              </div>
                            </div>

                            <div class="col-xs-8">
                              <div class="form-group">
                                <label for="venproducto">Precio de venta:</label>
                                <input type="text" class="form-control" name="ventaproducto">
                              </div>
                            </div>
                              
                              
                            
                      </div>

                      <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                          <input type="submit" value="Guardar" class="btn btn-default"></input>
                      </div>

                </form>       
        </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>



</body>
</html>