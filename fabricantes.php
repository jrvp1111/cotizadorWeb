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
        <li><a href="productos.php">Productos</a></li>
        <li class="active"><a href="fabricantes.php">Fabricantes</a></li>
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
  <h2>Fabricante</h2>
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#modalnuevofabricante">Nuevo Fabricante</button>

  <!-- Modal -->
  <div class="modal fade" id="modalnuevofabricante" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Agregar nuevo fabricante</h4>
        </div>
        <div class="modal-body">
         <!--contenido del modal-->
                    <div class="container">
                      
                          <form role="form" action="insertarfabricante.php" method="post" name="frmfabricante">
                            
                                  <div class="col-xs-8">
                                    <div class="form-group">
                                      <label for="nombfabricante">Nombre del fabricante:</label>
                                      <input type="text" class="form-control" name="nombrefabricante">
                                    </div>
                                  </div>
                      
                                  <div class="col-xs-8">
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


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>
</div>



  </body>
</html>



</body>
</html>