<?php

require_once("../bds/conexion.php");


$tipo = $_POST['tipo'];
$titulo = $_POST['titulo'];
$descripcion = $_POST['descripcion'];
$fecha = $_POST['fecha'];
$hora = $_POST['hora'];
$destacado= $_POST['destacado'];



$newDate = date("d/m/Y", strtotime($fecha));

$CrearAvisoSql = "INSERT INTO aviso(usuario_clave,tipo_aviso_clave, a_titulo, a_descripcion, a_fecha, a_hora, a_destacar) VALUES('1','$tipo','$titulo','$descripcion','$fecha','$hora',".$destacado.");";
$CrearAviso = mysqli_query($con, $CrearAvisoSql);


header("Location: http://localhost/isw/isw_git/vistas/conserjeria.php");

?>