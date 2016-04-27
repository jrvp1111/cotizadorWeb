<?php 
if (isset($_GET['term'])){
	# conectare la base de datos
    $conexion=@mysqli_connect("localhost", "root", "", "cotizador_web");

$return_arr = array();
/* Si la conexión a la base de datos , ejecuta instrucción SQL. */
if ($conexion)
{
	$fetch = mysqli_query($conexion,"SELECT * FROM productos where nomb_prod like '%" . mysqli_real_escape_string($conexion,($_GET['term'])) . "%' or
																   desc_prod like '%" . mysqli_real_escape_string($conexion,($_GET['term'])) . "%' or
																   mca_prod like '%"  . mysqli_real_escape_string($conexion,($_GET['term'])) . "%' ORDER BY desc_prod ASC LIMIT 0 ,50");

	//$registro = mysql_query("SELECT * FROM clientes WHERE nombcomer_cte LIKE '%$dato%' OR tel_cte LIKE '%$dato%' OR ciud_cte LIKE '%$dato%' OR edo_cte LIKE '%$dato%' ORDER BY nombcomer_cte ASC");
	
	/* Recuperar y almacenar en conjunto los resultados de la consulta.*/
	while ($row = mysqli_fetch_array($fetch)) {
		$id_cte=$row['id_prod'];
		$row_array['value'] = $row['nomb_prod'].' '.$row['desc_prod'].' '.$row['mca_prod'];
		$row_array['id_prod']=$row['id_prod'];
		$row_array['nombredelProd']=$row['nomb_prod'].' '.$row['desc_prod'].' '.$row['mca_prod'];
		$row_array['precioRecomProd']=$row['prec_prod'];
		array_push($return_arr,$row_array);
    }
}

/* Cierra la conexión. */
mysqli_close($conexion);

/* Codifica el resultado del array en JSON. */
echo json_encode($return_arr);

}

 ?>