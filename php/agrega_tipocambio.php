<?php
include('conexion.php');
$id = $_POST['id-TCambio'];
$proceso = $_POST['pro-TCambio'];
$tipoCambio = $_POST['tipoCambio'];
$fecha = date('Y-m-d');
//VERIFICAMOS EL PROCESO

switch($proceso){
	case 'Registro':
		mysql_query("INSERT INTO divisas (precio_dolar, fecha_tcambio)VALUES( $tipoCambio', '$fecha')");
	break;

	case 'Edicion':
		mysql_query("UPDATE divisas SET
			precio_dolar = $tipoCambio
			WHERE id_tcambio = '$id'");
	break;
}


//ACTUALIZAMOS LOS REGISTROS Y LOS OBTENEMOS

$registro = mysql_query("SELECT * FROM divisas ORDER BY fecha_tcambio ASC");

//CREAMOS NUESTRA VISTA Y LA DEVOLVEMOS AL AJAX

echo '<table class="table table-striped table-condensed table-hover">
        	 <tr>
                <th width="200">Precio del dolar</th>
                <th width="150">Fecha</th>
                <th width="50">Opciones</th>
            </tr>';
	while($registro2 = mysql_fetch_array($registro)){
		echo '<tr>
                        <td>'.$registro2['precio_dolar'].'</td>
                        <td>'.fechaNormal($registro2['fecha_prod']).'</td>
                        <td>
                            <a href="javascript:editarTCambio('.$registro2['id_tcambio'].');" class="glyphicon glyphicon-edit"></a>
                            <a href="javascript:eliminarProducto('.$registro2['id_tcambio'].');" class="glyphicon glyphicon-remove-circle"></a>
                        </td>
                      </tr>';
	}
echo '</table>';
?>