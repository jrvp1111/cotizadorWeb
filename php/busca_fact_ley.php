<?php
include('conexion.php');

$dato = $_POST['dato'];

//EJECUTAMOS LA CONSULTA DE BUSQUEDA

$registro = mysql_query("SELECT * FROM portalley WHERE emp_ley LIKE '%$dato%' OR num_fact_ley LIKE '%$dato%' OR ord_comp_ley LIKE '%$dato%' OR tipo_de_compra LIKE '%$dato%' OR tien_carg_ley LIKE '%$dato%' OR
                                                nomb_tiend_ley LIKE '%$dato%' OR num_entr_ley LIKE '%$dato%' OR fech_entr_ley LIKE '%$dato%' OR nomb_recibio LIKE '%$dato%' OR
                                                num_rem_ley LIKE '%$dato%' OR arriv_port_ley LIKE '%$dato%' ORDER BY num_fact_ley ASC");
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
if(mysql_num_rows($registro)>0){
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
}else{
	echo '<tr>
				<td colspan="6">No se encontraron resultados</td>
			</tr>';
}
echo '</table>';
?>