<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Nuevo</title>
<link href="../css/estilo.css" rel="stylesheet">
<script src="../js/jquery.js"></script>
<script src="../js/myjava.js"></script>
</head>
<body>
<header>
	SUBIR ARCHIVOS POR AJAX
</header>
<section>
<form id="subida">
<table>
	<tr>
    	<td><input type="file" id="foto" name="foto"/></td>
    </tr>
    <tr>
    	<td><textarea id="desc" name="desc" placeholder="Ingrese una descripcion de su foto..."></textarea></td>
    </tr>
    <tr>
    	<td><input type="submit" value="Publicar"/></td>
    </tr>
</table>
<img src="../recursos/cargando.gif" class="cargando" id="cargando"/>
</form>
<fieldset><legend>Album de Fotos Publicadas</legend>
<ul class="fotos" id="fotos">
			<?php
                include('../php/conexion.php');

				$comprobar = mysql_num_rows(mysql_query("SELECT * FROM personales"));

				if($comprobar>0){

					$fotos = mysql_query("SELECT * FROM personales ORDER BY id_foto ASC");

					while($fotos2 = mysql_fetch_array($fotos)){

						echo '<li>
									<a href="../php/album/'.$fotos2['ruta_foto'].'" target="_blank"><img src="../php/album/'.$fotos2['ruta_foto'].'" class="img-subida" title="'.$fotos2['desc_foto'].'"></a>
								</li>';

					}

				}else{

					echo '<p align="center" style="font-size:12px;">Su album de fotos esta vacio...</p>';

				}
            ?>
</ul>
</fieldset>
</section>
</body>
</html>
