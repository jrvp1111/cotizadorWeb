<?php
include("config/configdb.php");



		//esto comprueba que se hayan enviado los campos y no esten vacios
		if (isset($_POST['nombrefabricante']) && !empty($_POST['nombrefabricante']) &&
		isset($_POST['origen']) && !empty($_POST['origen']))
		{

		//hace conexion a la db
		$con=mysql_connect($host,$user,$pw) or die("problemas al conectar");
		mysql_select_db($db,$con) or die ("problemas a conectar la bd");

		//aqui se genera  la consulta para insertar el fabricante traido por el metodo post
		mysql_query("INSERT INTO fabricantes (nombre_fabricante,origen_fabricante) VALUES ('$_POST[nombrefabricante]','$_POST[origen]')",$con);
		echo 1;
		}
		else{ echo "problemas al insertar datos";
		}

 ?>