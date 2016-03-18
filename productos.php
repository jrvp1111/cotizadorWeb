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
        <li><a href="#">Clientes</a></li>
        <li  class="active"><a href="productos.php">Productos</a></li>
        <li><a href="fabricantes.php">Fabricante</a></li>
        <li><a href="#">Usuarios</a></li>
        <li><a href="#">Configuracion</a></li>
        <li><a href="#">Pagos</a></li>        
      </ul>
    </div>
  </div>
</nav>
      
<!-- termina el menu-->

<!--saltos para que no se oculte el texto en el detras del nav-->
<br><br><hr>

 <div class="container">
  
      <form role="form" action="insertarproducto.php" method="post" name="frmproducto">
        
              <div class="col-xs-12">
                <div class="form-group">
                  <label for="modproducto">Modelo del producto:</label>
                  <input type="text" class="form-control" name="modeloproducto">
                </div>
              </div>

              <div class="col-xs-12">
                <div class="form-group">
                  <label for="descproducto">Descripción del producto:</label>
                  <input type="text" class="form-control" name="descripcionproducto">
                </div>
              </div>

              <div class="col-xs-12">
                <div class="form-group">
                  <label for="fabproducto">Fabricante:</label>
                  <input type="text" class="form-control" name="fabricanteproducto">
                </div>
              </div>              

              <div class="col-xs-12">
                <div class="form-group">
                  <label for="edoproducto">Estado del producto:</label>
                  <select class="form-control" name="estadoproducto">
                    <option>Activo</option>
                    <option>Inactivo</option>
                  </select>      
                </div>
              </div>

              <div class="col-xs-12">
                <div class="form-group">
                  <label for="costproducto">Costo del producto:</label>
                  <input type="text" class="form-control" name="costoproducto">
                </div>
              </div>

              <div class="col-xs-12">
                <div class="form-group">
                  <label for="venproducto">Precio de venta:</label>
                  <input type="text" class="form-control" name="ventaproducto">
                </div>
              </div>

              <div class="form-group">        
                  <div class="col-sm-offset-2 col-sm-10">
                    <input type="submit" value="Guardar" class="btn btn-default"></input>
                  </div>
              </div>
      </form>
 </div>


  </body>
</html>



</body>
</html>