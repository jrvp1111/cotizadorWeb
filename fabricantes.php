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
        <li><a href="productos.php">Productos</a></li>
        <li class="active"><a href="fabricantes.php">Fabricante</a></li>
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
  
      <form role="form" action="insertarfabricante.php" method="post" name="frmfabricante">
        
              <div class="col-xs-12">
                <div class="form-group">
                  <label for="nombfabricante">Nombre del fabricante:</label>
                  <input type="text" class="form-control" name="nombrefabricante">
                </div>
              </div>
  
              <div class="col-xs-12">
                <div class="form-group">
                  <label for="sel1">Selecciona el origen:</label>
                  <select class="form-control" name="origen">
                    <option>Mexico</option>
                    <option>Estados Unidos</option>
                  </select>      
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