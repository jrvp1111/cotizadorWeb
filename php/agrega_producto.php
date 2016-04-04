<?php
include('conexion.php');
$id = $_POST['id-prod'];
$proceso = $_POST['pro'];
$nombre = $_POST['nombre'];
$origen = $_POST['origen'];
$fecha = date('Y-m-d');
//VERIFICAMOS EL PROCESO

switch($proceso){
	case 'Registro':
		mysql_query("INSERT INTO marcas (nomb_prod, origen_prod, fecha_reg)VALUES('$nombre','$origen', '$fecha')");
	break;
	
	case 'Edicion':
		mysql_query("UPDATE marcas SET nomb_prod = '$nombre', origen_prod = '$origen' WHERE id_prod = '$id'");
	break;
}


//ACTUALIZAMOS LOS REGISTROS Y LOS OBTENEMOS

$registro = mysql_query("SELECT * FROM marcas ORDER BY id_prod ASC");

//CREAMOS NUESTRA VISTA Y LA DEVOLVEMOS AL AJAX

echo '<table class="table table-striped table-condensed table-hover">
        	<tr>
            	<th width="300">Nombre de la marca</th>
                <th width="200">Origen de la marca</th>
				<th width="50">Opciones</th>
            </tr>';
	while($registro2 = mysql_fetch_array($registro)){
		echo '<tr>
				<td>'.$registro2['nomb_prod'].'</td>
				<td>'.$registro2['origen_prod'].'</td>
				<td>
					<a href="javascript:editarProducto('.$registro2['id_prod'].');" class="glyphicon glyphicon-edit"></a>
					<a href="javascript:eliminarProducto('.$registro2['id_prod'].');" class="glyphicon glyphicon-remove-circle"></a>
				</td>
			  </tr>';
	}
echo '</table>';
?>