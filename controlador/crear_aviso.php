<?php

require_once("../bds/Conexion.php");


$tipo = $_POST['tipo'];
$titulo = $_POST['titulo'];
$descripcion = $_POST['descripcion'];
$fecha = $_POST['fecha'];
$hora = $_POST['hora'];
$destacado= $_POST['destacado'];



$newDate = date("d/m/Y", strtotime($fecha));

$CrearAvisoSql = "INSERT INTO avisos(tipo_aviso_clave, a_titulo, a_descripcion, a_fecha, a_hora, a_destacar) VALUES('$tipo','$titulo','$descripcion',".$newDate.",'$hora',".$destacado.");";
$CrearAviso = mysqli_query($con, $CrearAvisoSql);

if($CrearAviso){
    echo '<script>alert("Ingresado correctamente")</script>' ;
}else{
    echo '<script>alert("Error")</script>' ;
}
header("Location: http://localhost/plantillaAyudantia/vistas/conserjeria.php");

?>