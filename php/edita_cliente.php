<?php
include('conexion.php');

$id = $_POST['id'];

//OBTENEMOS LOS VALORES DEL PRODUCTO

$valores = mysql_query("SELECT * FROM clientes WHERE id_cte = '$id'");
$valores2 = mysql_fetch_array($valores);

$datos = array(
				0 => $valores2['comp_cte'],
				1 => $valores2['nombcomer_cte'],
				2 => $valores2['tel_cte'],
				3 => $valores2['dir_cte'],
				4 => $valores2['ciud_cte'],
				5 => $valores2['edo_cte'],
				);
echo json_encode($datos);
?>