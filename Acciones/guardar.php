<?php
include '../Datos/conexion.php';
$fecha = date('Y-m-d');
$dirmca = $_POST['Marca']."/";
$ruta = "../Imagenes/";
$nuevaruta = $ruta.$dirmca;
if(!file_exists($nuevaruta))
{
mkdir ($nuevaruta);
opendir($ruta);
}
$destino = $nuevaruta.$_FILES['foto']['name'];
copy($_FILES['foto']['tmp_name'],$destino);
$nombre=$_FILES['foto']['name'];
$con=mysql_connect($server,$username,$password)or die("problemas al conectar al servidor");
	mysql_select_db($db,$con)or die("no existe la base de datos");
	mysql_query("insert into productos(nomb_prod,desc_prod,mca_prod,Imagen,fecha_prod)values('$_POST[Nombre]','$_POST[Descripcion]','$_POST[Marca]','$nombre','$fecha')",$con);
	header("location:../imagenes.php"); 


?>
