<?php 
include("config/configdb.php");
//esto comprueba que se hayan enviado los campos y no esten vacios
if ( isset($_POST['nombrecliente']) && !empty($_POST['nombrecliente'])
	 && isset($_POST['nombrecomercial']) && !empty($_POST['nombrecomercial'])
	 && isset($_POST['direccioncliente']) && !empty($_POST['direccioncliente'])
	 && isset($_POST['emailcliente']) && !empty($_POST['emailcliente'])
	 && isset($_POST['telefonocliente']) && !empty($_POST['telefonocliente'])
	 && isset($_POST['nombrecontacto']) && !empty($_POST['nombrecontacto'])
    )
{

//hace conexion a la db
$con=mysql_connect($host,$user,$pw) or die("problemas al conectar");
mysql_select_db($db,$con) or die ("problemas a conectar la bd");

//aqui se genera  la consulta para insertar el fabricante traido por el metodo post
mysql_query("INSERT INTO clientes (nombre_cliente,nombre_comercial,direccion_cliente,email_cliente,telefono_cliente,nombre_contacto) VALUES ('$_POST[nombrecliente]','$_POST[nombrecomercial]','$_POST[direccioncliente]','$_POST[emailcliente]','$_POST[telefonocliente]','$_POST[nombrecontacto]')",$con);
echo "datos insertados";
}
else{ echo "problemas al insertar datos";
}

 ?>