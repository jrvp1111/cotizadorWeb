<?php
include('conexion.php');

$dato = $_POST['dato'];

//EJECUTAMOS LA CONSULTA DE BUSQUEDA

$registro = mysql_query("SELECT * FROM divisas WHERE fecha_tcambio LIKE '%$dato%' OR precio_dolar LIKE '%$dato%' ORDER BY fecha_tcambio ASC");
//CREAMOS NUESTRA VISTA Y LA DEVOLVEMOS AL AJAX

echo '<table class="table table-striped table-condensed table-hover">
            <tr>
                <th width="200">Precio del dolar</th>
                <th width="150">Fecha</th>
                <th width="50">Opciones</th>
            </tr>';
if(mysql_num_rows($registro)>0){
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
}else{
	echo '<tr>
				<td colspan="6">No se encontraron resultados</td>
			</tr>';
}
echo '</table>';
?>