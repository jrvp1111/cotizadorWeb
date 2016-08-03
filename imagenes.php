<?php 
	include "datos/conexion.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>sin título</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<link rel="stylesheet" href="css/estilo.css">
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
		<td><label><input type="text" name="Descripcion"/></label></td>
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
                            echo $row['id_mca']." ".$row['nomb_mca'];
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
		$re=mysql_query("SELECT * FROM productos left join marcas on productos.id_mca=marcas.id_mca ORDER BY desc_prod ASC")or die(mysql_error());
		while ($f=mysql_fetch_array($re)) {
	?>

	<tr>
		<td><?php echo $f['id_prod'];?></td>
		<td><?php echo $f['nomb_prod'];?></td>
		<td><?php echo $f['desc_prod'];?></td>
		<td><?php echo $f['nomb_mca'];?></td>
		<td><?php echo "<img class=\"imagen\" src=\""."Imagenes/".$f['id_mca'].' '.$f['nomb_mca']."/".$f['Imagen']."\"/>";?></td>
	</tr>
	<?php
	}
	?>
	</table>
</body>
</html>