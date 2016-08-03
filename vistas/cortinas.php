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
          <li><a href="productos.php">Productos</a></li>
          <li><a href="marcas.php">Marcas</a></li>
          <li><a href="usuarios.php">Usuarios</a></li>
          <li><a href="pagos.php">Pagos</a></li>
          <li class="active"><a href="cortinas.php">Medidas Cortinas</a></li>
        </ul>
      </div>
    </div>
  </nav>

    <!-- termina el menu-->

  <!--saltos para que no se oculte el texto en el detras del nav-->
  <br><br><hr>



    <header>Cortinas Hawaianas</header>

      <div class="container">
        <form role="form">
          <div class="row">
            <div class="form-group">


                  <div class="col-xs-3">
                       <label>Tiras de 8.08 pulgadas de ancho</label>
                  </div>

                  <div class="col-xs-3">
                    <label for="sel1">Porcentaje de traslape: 50%</label>
                  </div>

            </div>
          </div>

            <hr>

            <div class="form-group">
              <div class="row">

              <div class="col-xs-2">
                <label>Introduce las medidas de la cortina en mts</label>
              </div>

              <div class="col-xs-1">
                 <input type="text" class="form-control" onchange="calcula();" id="anchodecortina" placeholder="Ancho">
              </div>

              <div class="col-xs-1" align="center">
                <label>x</label>
              </div>

              <div class="col-xs-1">
                 <input type="text" class="form-control" onchange="calcula();" id="altodecortina" placeholder="Altura">
              </div>

              <div class="col-xs-1" align="center">
                <label>=</label>
              </div>

              <div class="col-xs-1">
                   <p id="mts"></p>
              </div>

            </div>
          </div>

          <hr>

            <div class="form-group">
              <div class="row">

              <div class="col-xs-1" align="center">
                <label>Necesitas</label>
              </div>

              <div class="col-xs-1" align="center">
                <p id="tirasnecesitadas"></p>
              </div>

              <div class="col-xs-1" align="center">
                <label>tiras de</label>
              </div>

              <div class="col-xs-1" align="center">
                <p id="largodecortina"></p>
              </div>

              <div class="col-xs-1" align="center">
                <p id="sobrante"></p>
              </div>

            </div>
          </div>

        </form>
      </div>
<script>
  function calcula(){
    var convertido = document.getElementById('anchodecortina').value;
    var anchocortina = convertido*39.3701;
    var altocortina = document.getElementById('altodecortina').value;
    var mtscuadrados = document.getElementById('mts').innerHTML = convertido*altocortina+' mts2';
    var largocortina = document.getElementById('largodecortina').innerHTML=altocortina+' mts de largo';

    if(anchocortina>20 & anchocortina<=26){
            var tirasquenecesitas = document.getElementById('tirasnecesitadas').innerHTML = '4 tiras';
    }
    if(anchocortina>26 & anchocortina<=32){
            var tirasquenecesitas = document.getElementById('tirasnecesitadas').innerHTML = '5 tiras';
    }
    if(anchocortina>32 & anchocortina<=38 ){
            var tirasquenecesitas = document.getElementById('tirasnecesitadas').innerHTML = '6 tiras';
    }
    if(anchocortina>38 & anchocortina<=44 ){
            var tirasquenecesitas = document.getElementById('tirasnecesitadas').innerHTML = '7 tiras';
    }
    if(anchocortina>44 & anchocortina<=50 ){
            var tirasquenecesitas = document.getElementById('tirasnecesitadas').innerHTML = '8 tiras';
    }
    if(anchocortina>50 & anchocortina<=56 ){
            var tirasquenecesitas = document.getElementById('tirasnecesitadas').innerHTML = '9 tiras';
    }
    if(anchocortina>56 & anchocortina<=62 ){
            var tirasquenecesitas = document.getElementById('tirasnecesitadas').innerHTML = '10 tiras';
    }
    if(anchocortina>62 & anchocortina<=68 ){
            var tirasquenecesitas = document.getElementById('tirasnecesitadas').innerHTML = '11 tiras';
    }
    if(anchocortina>68 & anchocortina<=74 ){
            var tirasquenecesitas = document.getElementById('tirasnecesitadas').innerHTML = '12 tiras';
    }
    if(anchocortina>74 & anchocortina<=80 ){
            var tirasquenecesitas = document.getElementById('tirasnecesitadas').innerHTML = '13 tiras';
    }
    if(anchocortina>80 & anchocortina<=86 ){
            var tirasquenecesitas = document.getElementById('tirasnecesitadas').innerHTML = '14 tiras';
    }
    if(anchocortina>86 & anchocortina<=92 ){
            var tirasquenecesitas = document.getElementById('tirasnecesitadas').innerHTML = '15 tiras';
    }
    if(anchocortina>92 & anchocortina<=98 ){
            var tirasquenecesitas = document.getElementById('tirasnecesitadas').innerHTML = '16 tiras';
    }
    if(anchocortina>98 & anchocortina<=104 ){
            var tirasquenecesitas = document.getElementById('tirasnecesitadas').innerHTML = '17 tiras';
    }
    if(anchocortina>104 & anchocortina<=110 ){
            var tirasquenecesitas = document.getElementById('tirasnecesitadas').innerHTML = '18 tiras';
    }
    if(anchocortina>110 & anchocortina<=116 ){
            var tirasquenecesitas = document.getElementById('tirasnecesitadas').innerHTML = '19 tiras';
    }
    if(anchocortina>116 & anchocortina<=122 ){
            var tirasquenecesitas = document.getElementById('tirasnecesitadas').innerHTML = '20 tiras';
    }
    if(anchocortina>122 & anchocortina<=128 ){
            var tirasquenecesitas = document.getElementById('tirasnecesitadas').innerHTML = '21 tiras';
    }
    if(anchocortina>128 & anchocortina<=134 ){
            var tirasquenecesitas = document.getElementById('tirasnecesitadas').innerHTML = '22 tiras';
    }
    if(anchocortina>134 & anchocortina<=140 ){
            var tirasquenecesitas = document.getElementById('tirasnecesitadas').innerHTML = '23 tiras';
    }
    if(anchocortina>140 & anchocortina<=146 ){
            var tirasquenecesitas = document.getElementById('tirasnecesitadas').innerHTML = '24 tiras';
    }
    if(anchocortina>146 & anchocortina<=152 ){
            var tirasquenecesitas = document.getElementById('tirasnecesitadas').innerHTML = '25 tiras';
    }
    if(anchocortina>152 & anchocortina<=158 ){
            var tirasquenecesitas = document.getElementById('tirasnecesitadas').innerHTML = '26 tiras';
    }
    if(anchocortina>158 & anchocortina<=164 ){
            var tirasquenecesitas = document.getElementById('tirasnecesitadas').innerHTML = '27 tiras';
    }
    if(anchocortina>164 & anchocortina<=170 ){
            var tirasquenecesitas = document.getElementById('tirasnecesitadas').innerHTML = '28 tiras';
    }
    if(anchocortina>170 & anchocortina<=176 ){
            var tirasquenecesitas = document.getElementById('tirasnecesitadas').innerHTML = '29 tiras';
    }
    if(anchocortina>176 & anchocortina<=182 ){
            var tirasquenecesitas = document.getElementById('tirasnecesitadas').innerHTML = '30 tiras';
    }
    if(anchocortina>182 & anchocortina<=188 ){
            var tirasquenecesitas = document.getElementById('tirasnecesitadas').innerHTML = '31 tiras';
    }
    if(anchocortina>188 & anchocortina<=194 ){
            var tirasquenecesitas = document.getElementById('tirasnecesitadas').innerHTML = '32 tiras';
    }
    if(anchocortina>194 & anchocortina<=200 ){
            var tirasquenecesitas = document.getElementById('tirasnecesitadas').innerHTML = '33 tiras';
    }
    if(anchocortina>200 & anchocortina<=206 ){
            var tirasquenecesitas = document.getElementById('tirasnecesitadas').innerHTML = '34 tiras';
    }
    if(anchocortina>206 & anchocortina<=212 ){
            var tirasquenecesitas = document.getElementById('tirasnecesitadas').innerHTML = '35 tiras';
    }
    if(anchocortina>212 & anchocortina<=218 ){
            var tirasquenecesitas = document.getElementById('tirasnecesitadas').innerHTML = '36 tiras';
    }
    if(anchocortina>218 & anchocortina<=224 ){
            var tirasquenecesitas = document.getElementById('tirasnecesitadas').innerHTML = '37 tiras';
    }
    if(anchocortina>224 & anchocortina<=230 ){
            var tirasquenecesitas = document.getElementById('tirasnecesitadas').innerHTML = '38 tiras';
    }
    if(anchocortina>230 & anchocortina<=236 ){
            var tirasquenecesitas = document.getElementById('tirasnecesitadas').innerHTML = '38 tiras';
    }
    if(anchocortina>236 & anchocortina<=242 ){
            var tirasquenecesitas = document.getElementById('tirasnecesitadas').innerHTML = '38 tiras';
    }
    if(anchocortina>242 & anchocortina<=248 ){
            var tirasquenecesitas = document.getElementById('tirasnecesitadas').innerHTML = '38 tiras';
    }
    if(anchocortina>248 & anchocortina<=254 ){
            var tirasquenecesitas = document.getElementById('tirasnecesitadas').innerHTML = '38 tiras';
    }
    if(anchocortina>254 & anchocortina<=260 ){
            var tirasquenecesitas = document.getElementById('tirasnecesitadas').innerHTML = '38 tiras';
    }
    if(anchocortina>260 & anchocortina<=262 ){
            var tirasquenecesitas = document.getElementById('tirasnecesitadas').innerHTML = '38 tiras';
    }
    if(anchocortina>262 ){
            var tirasquenecesitas = document.getElementById('tirasnecesitadas').innerHTML = 'checa bien las medidas';
    }

  }
</script>

</body>
</html>