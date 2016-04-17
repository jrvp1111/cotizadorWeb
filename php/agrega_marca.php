<?php
include('conexion.php');
$id = $_POST['id-mca'];
$proceso = $_POST['pro-mca'];
$nombreMca = $_POST['nombreMca'];
$origen = $_POST['origen'];
$proveeMca = $_POST['provMca'];
$telMca = $_POST['telMca'];
$notaMca = $_POST['notaMca'];
$fecha = date('Y-m-d');
//VERIFICAMOS EL PROCESO

switch($proceso){
	case 'Registro':
		mysql_query("INSERT INTO marcas (nomb_mca, origen_mca, prov_mca, tel_mca, nota_mca, fecha_reg)VALUES('$nombreMca','$origen', '$proveeMca', '$telMca', '$notaMca', '$fecha')");
	break;
	
	case 'Edicion':
		mysql_query("UPDATE marcas SET 
			nomb_mca = '$nombreMca', 
			origen_mca = '$origen',
			prov_mca = '$proveeMca',
			tel_mca = '$telMca',
			nota_mca = '$notaMca' 
			WHERE id_mca = '$id'");
	break;
}


//ACTUALIZAMOS LOS REGISTROS Y LOS OBTENEMOS

$registro = mysql_query("SELECT * FROM marcas ORDER BY nomb_mca ASC");

//CREAMOS NUESTRA VISTA Y LA DEVOLVEMOS AL AJAX

echo '<table class="table table-striped table-condensed table-hover">
        	<tr>
            	<th width="300">Nombre de la marca</th>
                <th width="200">Origen de la marca</th>
                <th width="200">Proveedor</th>
                <th width="200">Telefono</th>
                <th width="150">Fecha Registro</th>
				<th width="50">Opciones</th>
            </tr>';
	while($registro2 = mysql_fetch_array($registro)){
		echo '<tr>
				<td>'.$registro2['nomb_mca'].'</td>
				<td>'.$registro2['origen_mca'].'</td>
				<td>'.$registro2['prov_mca'].'</td>
				<td>'.$registro2['tel_mca'].'</td>
				<td>'.fechaNormal($registro2['fecha_reg']).'</td>
				<td>
					<a href="javascript:editarMarca('.$registro2['id_mca'].');" class="glyphicon glyphicon-edit"></a>
					<a href="javascript:eliminarMarca('.$registro2['id_mca'].');" class="glyphicon glyphicon-remove-circle"></a>
				</td>
			  </tr>';
	}
echo '</table>';
?>