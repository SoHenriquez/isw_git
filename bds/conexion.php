<?php 
/* Datos de conexion a la base de datos */

$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "avisos";

$con = mysqli_connect($db_host, $db_user,$db_pass,$db_name);

if(!$con){

    echo 'No se puede conectar a la base de datos: ' .mysqli_connect_errno()();

}


?>