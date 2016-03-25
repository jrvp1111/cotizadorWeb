<?php require_once('conexion/conectar.php'); ?>

<?php 

if (isset($_POST['nombrefabricante']) && ($_POST['origen']!="")){
	
	$nombrefabricante = $_POST['nombrefabricante'];
	$origen = $_POST['origen'];

	$insert = sprintf("INSERT INTO fabricantes (nombre_fabricante,origen_fabricante) VALUES ('".$nombrefabricante."','".$origen."')");
	mysql_select_db($bd,$conexion);

	$resultado = mysql_query($insert,$conexion)or die(mysql_error());

	echo 1;
}
?>