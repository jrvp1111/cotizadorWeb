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
        <li class="active"><a href="clientes.php">Clientes</a></li>
        <li><a href="productos.php">Productos</a></li>
        <li><a href="fabricantes.php">Fabricantes</a></li>
        <li><a href="usuarios.php">Usuarios</a></li>
        <li><a href="pagos.php">Pagos</a></li>        
      </ul>
    </div>
  </div>
</nav>
      
<!-- termina el menu-->

<!--saltos para que no se oculte el texto en el detras del nav-->
<br><br><hr>

<div class="container">
  
      <form role="form" action="insertarcliente.php" method="post" name="frmcliente">
        
              <div class="col-xs-12">
                <div class="form-group">
                  <label for="nombcliente">Nombre del cliente:</label>
                  <input type="text" class="form-control" name="nombrecliente">
                </div>
              </div>

              <div class="col-xs-12">
                <div class="form-group">
                  <label for="nombcomercial">Nombre comercial:</label>
                  <input type="text" class="form-control" name="nombrecomercial">
                </div>
              </div>

              <div class="col-xs-12">
                <div class="form-group">
                  <label for="dircliente">Direccion:</label>
                  <input type="text" class="form-control" name="direccioncliente">
                </div>
              </div>

              <div class="col-xs-12">
                <div class="form-group">
                  <label for="emacliente">Email:</label>
                  <input type="email" class="form-control" name="emailcliente">
                </div>
              </div>

              <div class="col-xs-12">
                <div class="form-group">
                  <label for="telcliente">Telefono:</label>
                  <input type="text" class="form-control" name="telefonocliente">
                </div>
              </div>

              <div class="col-xs-12">
                <div class="form-group">
                  <label for="nombcontacto">Nombre del contacto:</label>
                  <input type="text" class="form-control" name="nombrecontacto">
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