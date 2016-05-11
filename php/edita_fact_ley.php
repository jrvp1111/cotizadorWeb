<?php
include('conexion.php');

$id = $_POST['id'];

//OBTENEMOS LOS VALORES DEL PRODUCTO

$valores = mysql_query("SELECT * FROM portalley WHERE id_port_ley = '$id'");
$valores2 = mysql_fetch_array($valores);

$datos = array(
				0 => $valores2['fecha_factley'],
				1 => $valores2['emp_ley'],
				2 => $valores2['num_fact_ley'],
				3 => $valores2['ord_comp_ley'],
				4 => $valores2['tipo_de_compra'],
				5 => $valores2['tien_carg_ley'],
				6 => $valores2['nomb_tiend_ley'],
				7 => $valores2['num_entr_ley'],
				8 => $valores2['fech_entr_ley'],
				9 => $valores2['nomb_recibio'],
				10 => $valores2['num_rem_ley'],
				11 => $valores2['arriv_port_ley'],
				);
echo json_encode($datos);
?>