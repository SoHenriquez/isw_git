<?php 

require_once("/xampp/htdocs/isw/isw_git/bds/conexion.php");


   $a_clave =  $_POST["a_clave"];
   $tipo_anuncio = $_POST["tipo_aviso_actualizar"];
   $fecha = $_POST["fecha_actualizar"];
   $titulo = $_POST["titulo_actualizar"];
   $descripcion = $_POST["descripcion_actualizar"];
 
   $modificarPublicacion_diariomuralSql = "UPDATE `aviso` 
   SET tipo_aviso_clave = '$tipo_anuncio', a_titulo = '$titulo',  a_fecha = '$fecha', a_descripcion = '$descripcion'
   WHERE a_clave = '$a_clave' ";
   


  
   $modificarPublicacion_diariomural = mysqli_query($con,$modificarPublicacion_diariomuralSql);
   
   header("Location: http://localhost/isw/isw_git/vistas/conserjeria.php");

?>