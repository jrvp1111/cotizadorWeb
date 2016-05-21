<?php
include('conexion.php');

$id = $_POST['id'];

//OBTENEMOS LOS VALORES DEL PRODUCTO

$valores = mysql_query("SELECT * FROM productos WHERE id_prod = '$id'");
$valores2 = mysql_fetch_array($valores);

$datos = array(
				0 => $valores2['nomb_prod'],
				1 => $valores2['desc_prod'],
				2 => $valores2['mca_prod'],
				3 => $valores2['origen_prod'],
				4 => $valores2['edo_prod'],
				5 => $valores2['nota_prod'],
				6 => $valores2['cost_prod'],
				7 => $valores2['util_prod'],
				8 => $valores2['prec_prod'],
				9 => $valores2['prec_rec'],
				);
echo json_encode($datos);
?>