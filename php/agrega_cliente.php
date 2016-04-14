<?php
include('conexion.php');
$id = $_POST['id-cte'];
$proceso = $_POST['proCte'];
$compCte = $_POST['compCte'];
$nombcomerCte = $_POST['nombcomerCte'];
$telCte = $_POST['telCte'];
$dirCte = $_POST['dirCte'];
$ciudCte = $_POST['ciudCte'];
$edoCte = $_POST['edoCte'];
$fecha = date('Y-m-d');
//VERIFICAMOS EL PROCESO

switch($proceso){
	case 'Registro':
		mysql_query("INSERT INTO clientes (comp_cte, nombcomer_cte, tel_cte, dir_cte, ciud_cte, edo_cte, fecha_cte)VALUES('$compCte','$nombcomerCte', '$telCte', '$dirCte', '$ciudCte', '$edoCte', '$fecha')");
	break;

	case 'Edicion':
		mysql_query("UPDATE clientes SET
			comp_cte = '$compCte',
			nombcomer_cte = '$nombcomerCte',
			tel_cte = '$telCte',
			dir_cte = '$dirCte',
			ciud_cte = '$ciudCte',
			edo_cte = '$edoCte'
			WHERE id_cte = '$id'");
	break;
}


//ACTUALIZAMOS LOS REGISTROS Y LOS OBTENEMOS

$registro = mysql_query("SELECT * FROM clientes ORDER BY id_cte ASC");

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
echo '</table>';
?>