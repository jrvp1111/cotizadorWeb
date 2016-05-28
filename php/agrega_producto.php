<?php
include('conexion.php');
$id = $_POST['id-prod'];
$procesoProd = $_POST['pro-prod'];
$nombreProd = $_POST['nombreProd'];
$descripcionProd = $_POST['descProd'];
$marcaProd = $_POST['mcaProd'];
$origenProd = $_POST['origenProd'];
$estadoProd = $_POST['edoProd'];
$notaProd = $_POST['notaProd'];
$costoProd = $_POST['costProd'];
$utilidadProd = $_POST['utilidadProd'];
$precioProd = $_POST['precProd'];
$precioReco = $_POST['precRec'];
$fecha = date('Y-m-d');
//VERIFICAMOS EL PROCESO

switch($procesoProd){
	case 'Registro':
		mysql_query("INSERT INTO productos (nomb_prod, desc_prod, mca_prod, origen_prod, edo_prod, nota_prod, cost_prod, util_prod, prec_prod, prec_rec, fecha_prod)
						VALUES('$nombreProd','$descripcionProd','$marcaProd', '$origenProd', '$estadoProd', '$notaProd', '$costoProd', '$utilidadProd', '$precioProd', '$precioReco','$fecha')");
	break;

	case 'Edicion':
		mysql_query("UPDATE productos SET
			nomb_prod = '$nombreProd',
			desc_prod = '$descripcionProd',
			mca_prod = '$marcaProd',
			origen_prod = '$origenProd',
			edo_prod = '$estadoProd',
			nota_prod = '$notaProd',
			cost_prod = '$costoProd',
			util_prod = '$utilidadProd',
			prec_prod = '$precioProd',
			prec_rec = '$precioReco'
			WHERE id_prod = '$id'");
	break;
}


//ACTUALIZAMOS LOS REGISTROS Y LOS OBTENEMOS

$registro = mysql_query("SELECT * FROM productos ORDER BY desc_prod ASC");

//CREAMOS NUESTRA VISTA Y LA DEVOLVEMOS AL AJAX

echo '<table class="table table-striped table-condensed table-hover">
        	<tr>
            	<th width="200">Nombre</th>
                <th width="500">Descripción</th>
                <th width="150">Marca</th>
                <th width="150">Origen</th>
                <th width="150">Estado</th>
                <th width="150">Costo</th>
                <th width="150">Precio</th>
                <th width="150">Imagen</th>
                <th width="150">Fecha</th>
                <th width="50">Opciones</th>
            </tr>';
	while($registro2 = mysql_fetch_array($registro)){
		echo '<tr>
						<td>'.$registro2['nomb_prod'].'</td>
                        <td>'.$registro2['desc_prod'].'</td>
                        <td>'.$registro2['mca_prod'].'</td>
                        <td>'.$registro2['origen_prod'].'</td>
                        <td>'.$registro2['edo_prod'].'</td>
                        <td>'.$registro2['cost_prod'].'</td>
                        <td>'.$registro2['prec_rec'].'</td>
                        <td><img height="50px"src="../Imagenes/'.$registro2['mca_prod'].'/'.$registro2['Imagen'].'"/></td>
                        <td>'.fechaNormal($registro2['fecha_prod']).'</td>
				<td>
					<a href="javascript:editarProducto('.$registro2['id_prod'].');" class="glyphicon glyphicon-edit"></a>
					<a href="javascript:eliminarProducto('.$registro2['id_prod'].');" class="glyphicon glyphicon-remove-circle"></a>
				</td>
			  </tr>';
	}
echo '</table>';
?>