<?php 
	include "datos/conexion.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>sin título</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<link rel="stylesheet" href="css/estilo.css">
	<meta name="generator" content="Geany 1.22" />
</head>
<body>
	<h1>Sube tus productos con imagenes a este servidor.</h1>
	<br/>
<form action="Acciones/guardar.php" method="post" enctype="multipart/form-data">
<table>
	<TR>
		<td><label>Modelo:</label></td>
		<td><label><input type="text" name="Nombre" /></label></td>
	</TR>
	<TR>
		<td><label>Descripcion:</label></td>
		<td><label><input type="text" name="Descripcion"/> $</label></td>
	</TR>
	<tr>
		<td><label>Marca</label></td>
		<td><select required="required" name="Marca">

                          <?php
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
</table>
	<input type="file" name="foto" />
	<br/>
	<input type="submit" value="Upload"/>
	</form>
<table border="2px">
	<tr>
		<td>ID</td>
		<td>Nombre</td>
		<td>Descripcion</td>
		<td>Marca</td>
		<td>Imagen</td>
	</tr>
	<?php
		include 'Datos/conexion.php';
		$re=mysql_query("select * from productos")or die(mysql_error());
		while ($f=mysql_fetch_array($re)) {
	?>

	<tr>
		<td><?php echo $f['id_prod'];?></td>
		<td><?php echo $f['nomb_prod'];?></td>
		<td><?php echo $f['desc_prod'];?></td>
		<td><?php echo $f['mca_prod'];?></td>
		<td><?php echo "<img class=\"imagen\" src=\""."Imagenes/".$f['mca_prod']."/".$f['Imagen']."\"/>";?></td>
	</tr>
	<?php
	}
	?>
	</table>
</body>
</html>