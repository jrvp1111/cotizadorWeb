<?php
include('conexion.php');

$id = $_POST['id'];

//OBTENEMOS LOS VALORES DEL PRODUCTO

$valores = mysql_query("SELECT * FROM marcas WHERE id_prod = '$id'");
$valores2 = mysql_fetch_array($valores);

$datos = array(
				0 => $valores2['nomb_prod'], 
				1 => $valores2['origen_prod'],
				);
echo json_encode($datos);
?>