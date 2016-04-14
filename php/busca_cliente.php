<?php
include('conexion.php');

$dato = $_POST['dato'];

//EJECUTAMOS LA CONSULTA DE BUSQUEDA

$registro = mysql_query("SELECT * FROM clientes WHERE nombcomer_cte LIKE '%$dato%' OR  LIKE '%$dato%' OR tel_cte LIKE '%$dato%' OR ciud_cte LIKE '%$dato%' OR edo_cte LIKE '%$dato%' ORDER BY nombcomer_cte ASC");
//CREAMOS NUESTRA VISTA Y LA DEVOLVEMOS AL AJAX

echo '<table class="table table-striped table-condensed table-hover">
        	<tr>
            	<th width="300">Compañia</th>
                <th width="300">Telefono</th>
                <th width="200">Ciudad</th>
                <th width="150">Estado</th>
                <th width="150">Fecha</th>
                <th width="50">Opciones</th>
            </tr>';
if(mysql_num_rows($registro)>0){
	while($registro2 = mysql_fetch_array($registro)){
		echo '<tr>
    				<td>'.$registro2['nombcomer_cte'].'</td>
                    <td>'.$registro2['tel_cte'].'</td>
                    <td>'.$registro2['ciud_cte'].'</td>
                    <td>'.$registro2['edo_cte'].'</td>
                    <td>'.fechaNormal($registro2['fecha_cte']).'</td>
                    <td>
                        <a href="javascript:editarCliente('.$registro2['id_cte'].');" class="glyphicon glyphicon-edit"></a>
                        <a href="javascript:eliminarCliente('.$registro2['id_cte'].');" class="glyphicon glyphicon-remove-circle"></a>
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