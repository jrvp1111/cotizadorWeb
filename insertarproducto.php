<?php 
include("config/configdb.php");
//esto comprueba que se hayan enviado los campos y no esten vacios
	if( isset($_POST['modeloproducto']) && !empty($_POST['modeloproducto'])
		&& isset($_POST['descripcionproducto']) && !empty($_POST['descripcionproducto'])
		&& isset($_POST['fabricanteproducto']) && !empty($_POST['fabricanteproducto'])
		&& isset($_POST['estadoproducto']) && !empty($_POST['estadoproducto'])
		&& isset($_POST['costoproducto']) && !empty($_POST['costoproducto'])
		&& isset($_POST['ventaproducto']) && !empty($_POST['ventaproducto'])
		//&& isset($_POST['imagenproducto']) && !empty($_POST['imagenproducto'])
  	   )
{

//hace conexion a la db
$con=mysql_connect($host,$user,$pw) or die("problemas al conectar");
mysql_select_db($db,$con) or die ("problemas a conectar la bd");


//hacemos la consulta de seleccion para seleccionar los registros de la tabla fabricantes
$registro=mysql_query("SELECT * FROM fabricantes")
or die ("problemas en consulta".mysql_error());


/*
//nos va ayudar a agarrar los valores de uno por uno de la base de datos
while ($reg=mysql_fetch_array($registro)){
	echo $reg['nombre_fabricante'];
  }
*/




//aqui se genera  la consulta para insertar el fabricante traido por el metodo post
mysql_query("INSERT INTO productos (modelo_producto,descripcion_producto,fabricante_producto,estado_producto,costo_producto,venta_producto) VALUES ('$_POST[modeloproducto]','$_POST[descripcionproducto]','$_POST[fabricanteproducto]','$_POST[estadoproducto]','$_POST[costoproducto]','$_POST[ventaproducto]')",$con);
echo "datos insertados";
}
else{ echo "problemas al insertar datos";}

 ?>