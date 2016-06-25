<?php
include('conexion.php');

$id = $_POST['id'];

//OBTENEMOS LOS VALORES DEL PRODUCTO

$valores = mysql_query("SELECT * FROM divisas WHERE id_tcambio = '$id'");
$valores2 = mysql_fetch_array($valores);

$datos = array(
				0 => $valores2['precio_dolar'],
				);
echo json_encode($datos);
?>