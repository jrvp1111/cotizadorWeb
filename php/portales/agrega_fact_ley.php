<?php
include('../conexion.php');
$id = $_POST['id-port-ley'];
$proceso = $_POST['pro-port-ley'];
$fechaFactLey = $_POST['fechaFactLey'];
$empreLey = $_POST['empreLey'];
$numFactLey = $_POST['numFactLey'];
$ordCompraLey = $_POST['ordCompraLey'];
$tipoCompraLey = $_POST['tipoCompraLey'];
$tienCargoLey = $_POST['tienCargoLey'];
$nombTienLey = $_POST['nombTienLey'];
$numEntrBultLey = $_POST['numEntrBultLey'];
$fechEntrBultLey = $_POST['fechEntrBultLey'];
$nomQuienRecibLey = $_POST['nomQuienRecibLey'];
$numRemLey = $_POST['numRemLey'];
$estPortLey = $_POST['estPortLey'];
$fecha = date('Y-m-d');
//VERIFICAMOS EL PROCESO


switch($proceso){
	case 'Registro':
		mysql_query("INSERT INTO portalley
	(fecha_factley, emp_ley, num_fact_ley, ord_comp_ley, tipo_de_compra, tien_carg_ley, nomb_tiend_ley, num_entr_ley, fech_entr_ley, nomb_recibio, num_rem_ley, arriv_port_ley, fecha_reg_fact) VALUES
	('$fechaFactLey', '$empreLey','$numFactLey', '$ordCompraLey', '$tipoCompraLey', '$tienCargoLey', '$nombTienLey', '$numEntrBultLey', '$fechEntrBultLey', '$nomQuienRecibLey', '$numRemLey', '$estPortLey', '$fecha')");
	break;

	case 'Edicion':
		mysql_query("UPDATE portalley SET
			fecha_factley = '$fechaFactLey',
            emp_ley = '$empreLey',
			num_fact_ley = '$numFactLey',
			ord_comp_ley = '$ordCompraLey',
			tipo_de_compra = '$tipoCompraLey',
			tien_carg_ley = '$tienCargoLey',
			nomb_tiend_ley = '$nombTienLey',
			num_entr_ley = '$numEntrBultLey',
			fech_entr_ley = '$fechEntrBultLey',
			nomb_recibio = '$nomQuienRecibLey',
			num_rem_ley = '$numRemLey',
			arriv_port_ley = '$estPortLey'
			WHERE id_port_ley = '$id'");
	break;
}


//ACTUALIZAMOS LOS REGISTROS Y LOS OBTENEMOS

$registro = mysql_query("SELECT * FROM portalley ORDER BY num_fact_ley ASC");

//CREAMOS NUESTRA VISTA Y LA DEVOLVEMOS AL AJAX

echo '<table class="table table-striped table-condensed table-hover">
        	<tr>
                <th width="100">Fecha</th>
                <th width="150">Empresa</th>
                <th width="50">Factura</th>
                <th width="200">Orden de compra</th>
                <th width="150">Tipo de compra</th>
                <th width="100">Tienda cargo</th>
                <th width="150">Nombre de tienda</th>
                <th width="100">Entrada bultos</th>
                <th width="100">Fecha entrada</th>
                <th width="120">Recibió</th>
                <th width="50">Portal</th>
                <th width="50">Fecha d/Alta</th>
                <th width="50">Opciones</th>
            </tr>';
	while($registro2 = mysql_fetch_array($registro)){
		echo '<tr>
                        <td>'.$registro2['fecha_factley'].'</td>
                        <td>'.$registro2['emp_ley'].'</td>
                        <td>'.$registro2['num_fact_ley'].'</td>
                        <td>'.$registro2['ord_comp_ley'].'</td>
                        <td>'.$registro2['tipo_de_compra'].'</td>
                        <td>'.$registro2['tien_carg_ley'].'</td>
                        <td>'.$registro2['nomb_tiend_ley'].'</td>
                        <td>'.$registro2['num_entr_ley'].'</td>
                        <td>'.$registro2['fech_entr_ley'].'</td>
                        <td>'.$registro2['nomb_recibio'].'</td>
                        <td>'.$registro2['arriv_port_ley'].'</td>
                        <td>'.fechaNormal($registro2['fecha_reg_fact']).'</td>
                        <td>
                            <a href="javascript:editarPortalLey('.$registro2['id_port_ley'].');" class="glyphicon glyphicon-edit"></a>
                            <a href="javascript:eliminarPortalLey('.$registro2['id_port_ley'].');" class="glyphicon glyphicon-remove-circle"></a>
                        </td>
			  </tr>';
	}
echo '</table>';
?>