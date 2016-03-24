<?php

//configura los datos para coneccion a la db
$host="localhost";
$user="root";
$pw="";
$bd="cotizador_web";

$conexion = mysql_pconnect($host,$user,$pass) or trigger_error(mysql_error(),E_USER_ERROR);


 ?>