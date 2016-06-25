<?php
include('conexion.php');

$dato = $_POST['dato'];


//EJECUTAMOS LA CONSULTA DE BUSQUEDA

$registro = mysql_query("SELECT * FROM productos LEFT JOIN marcas ON productos.id_mca=marcas.id_mca WHERE nomb_prod LIKE '%$dato%' OR desc_prod LIKE '%$dato%' OR origen_prod LIKE '%$dato%' OR edo_prod LIKE '%$dato%' OR nomb_mca LIKE '%$dato%' ORDER BY desc_prod ASC");
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
if(mysql_num_rows($registro)>0){
	while($registro2 = mysql_fetch_array($registro)){
		echo '<tr>
                        <td>'.$registro2['nomb_prod'].'</td>
                        <td>'.$registro2['desc_prod'].'</td>
                        <td>'.$registro2['nomb_mca'].'</td>
                        <td>'.$registro2['origen_prod'].'</td>
                        <td>'.$registro2['edo_prod'].'</td>
                        <td>'.$registro2['cost_prod'].'</td>';
                        if($registro2['prec_rec']>0)
                          {
                            echo '<td class="color9">'.$registro2['prec_rec'].' '.$registro2['mon_prod'].'</td>';
                          }
                        else
                          {
                            echo '<td>'.$registro2['prec_rec'].' '.$registro2['mon_prod'].'</td>';
                          }

                  echo '<td><img height="50px"src="../Imagenes/'.$registro2['nomb_mca'].'/'.$registro2['Imagen'].'"/></td>
                        <td>'.fechaNormal($registro2['fecha_prod']).'</td>
                        <td>
                            <a href="javascript:editarProducto('.$registro2['id_prod'].');" class="glyphicon glyphicon-edit"></a>
                            <a href="javascript:eliminarProducto('.$registro2['id_prod'].');" class="glyphicon glyphicon-remove-circle"></a>
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