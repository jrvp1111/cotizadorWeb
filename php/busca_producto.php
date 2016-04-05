<?php
include('conexion.php');

$dato = $_POST['dato'];

//EJECUTAMOS LA CONSULTA DE BUSQUEDA

$registro = mysql_query("SELECT * FROM marcas WHERE nomb_mca LIKE '%$dato%' OR origen_mca LIKE '%$dato%' ORDER BY id_mca ASC");

//CREAMOS NUESTRA VISTA Y LA DEVOLVEMOS AL AJAX

echo '<table class="table table-striped table-condensed table-hover">
        	<tr>
            	<th width="300">Nombre de la marca</th>
                <th width="200">Origen de la marca</th>
                <th width="150">Fecha Registro</th>
                <th width="50">Opciones</th>
            </tr>';
if(mysql_num_rows($registro)>0){
	while($registro2 = mysql_fetch_array($registro)){
		echo '<tr>
				<td>'.$registro2['nomb_mca'].'</td>
				<td>'.$registro2['origen_mca'].'</td>
				<td>'.fechaNormal($registro2['fecha_reg']).'</td>
				<td>
					<a href="javascript:editarMarca('.$registro2['id_mca'].');" class="glyphicon glyphicon-edit"></a>
					<a href="javascript:eliminarMarca('.$registro2['id_mca'].');" class="glyphicon glyphicon-remove-circle"></a>
				</td>
			  </tr>';
	}
}else{
	echo '<tr>
				<td colspan="6">No se encontraron resultados</td>
			</tr>';
}
echo '</table>';
?>