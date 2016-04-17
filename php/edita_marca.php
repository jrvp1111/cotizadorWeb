<?php
include('conexion.php');

$id = $_POST['id'];

//OBTENEMOS LOS VALORES DEL PRODUCTO

$valores = mysql_query("SELECT * FROM marcas WHERE id_mca = '$id'");
$valores2 = mysql_fetch_array($valores);

$datos = array(
				0 => $valores2['nomb_mca'], 
				1 => $valores2['origen_mca'],
				2 => $valores2['prov_mca'],
				3 => $valores2['tel_mca'],
				4 => $valores2['nota_mca'],
				);
echo json_encode($datos);
?>