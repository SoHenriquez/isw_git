<?php
require_once("../bds/conexion.php");

$eliminar = $_GET["id"]; 
  $eliminarPublicacion_ConserjeriaSql = "DELETE FROM `aviso` WHERE a_clave = $eliminar";
  
  $eliminarPublicacion_Conserjeria = mysqli_query($con,$eliminarPublicacion_ConserjeriaSql);


  header("Location: http://localhost/isw/isw_git/vistas/conserjeria.php");







?>