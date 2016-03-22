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
        <li class="active"><a href="cotizaciones.php">Cotizaciones</a></li>
        <li><a href="clientes.php">Clientes</a></li>
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
          <h2>Cotizaciones</h2>

                <form role="form" action="insertarcotizacion.php" method="post" name="frmcotizacion">
                           
                      <div class="col-md-2">
                         <div class="form-group">
                           <label for="feccotizacion">Fecha:</label>
                           <input type="text" class="form-control" name="fechacotizacion" placeholder="Selecciona la fecha">
                         </div>
                      </div>

                      <div class="col-md-5">
                          <div class="form-group">
                            <label for="nombcotizacion">Seleccionar el cliente:</label>
                            <input type="text" class="form-control" name="nombrecotizacion" placeholder="Selecciona el cliente">
                          </div>
                       </div>

                       <div class="col-md-5">
                         <div class="form-group">
                            <label for="atencotizacion">Atención:</label>
                            <input type="text" class="form-control" name="atencioncotizacion" placeholder="Atención">
                          </div>
                       </div>

                       <div class="col-md-4">
                         <div class="form-group">
                            <label for="telcotizacion">Telefono:</label>
                            <input type="text" class="form-control" name="telefonocotizacion">
                          </div>
                       </div>

                       <div class="col-md-4">
                         <div class="form-group">
                            <label for="emaicotizacion">Email:</label>
                            <input type="text" class="form-control" name="emailcotizacion">
                          </div>
                       </div>


                       <div class="col-md-4">
                         <div class="form-group">
                            <label for="notcotizacion">Nota:</label>
                            <input type="text" class="form-control" name="notacotizacion" placeholder="Nota">
                          </div>
                       </div>

                       <div class="col-md-4">
                         <div class="form-group">
                            <label for="condcotizacion">Condiciones de pago:</label>
                                <select class="form-control" name="condicionespagocotizacion">
                                    <option>Contado</option>
                                    <option>Crédito 7 días</option>
                                    <option>Crédito 15 días</option>
                                    <option>Crédito 30 días</option>
                                    <option>Crédito 60 días</option>
                                </select> 
                          </div>
                       </div>

                       <div class="col-md-4">
                         <div class="form-group">
                            <label for="valcotizacion">Validez:</label>
                                <select class="form-control" name="validezcotizacion">
                                    <option>Contado</option>
                                    <option>Crédito 5 días</option>
                                    <option>Crédito 10 días</option>
                                    <option>Crédito 15 días</option>
                                    <option>Crédito 30 días</option>
                                </select>
                          </div>
                       </div>


                       <div class="col-md-4">
                         <div class="form-group">
                            <label for="tiementrecotizacion">Tiempo de entrega:</label>
                            <input type="text" class="form-control" name="tiempoentregacotizacion" placeholder="Tiempo de entrega">
                          </div>
                       </div>

                        
                               
                       <div class="col-md-8">
                          <div class="form-group">
                              <input type="submit" value="Guardar" class="btn btn-default"></input>
                          </div>
                       </div>

                </form>       
        </div>





  
  </body>
</html>



</body>
</html>