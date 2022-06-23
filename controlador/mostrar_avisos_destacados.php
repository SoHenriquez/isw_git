<?php
require_once("../bds/conexion.php");
$consultaAvisosDestSql = "SELECT  A.a_clave,U.usuario_correo, U.usuario_nombre,date_format(A.a_fecha, '%d-%m-%Y') AS fecha_formateada,A.a_hora, A.a_titulo, T.tipo_aviso_nombre, A.a_descripcion  
FROM aviso A,usuario U, tipo_aviso T WHERE U.tipo_usuario_clave=A.usuario_clave  AND A.tipo_aviso_clave=T.tipo_aviso_clave ORDER BY T.tipo_aviso_clave ;";
$consultaAvisosDest= mysqli_query($con,$consultaAvisosDestSql);

?>

<!-- if($row['tipo_aviso_clave'] == 1){
            echo 'Bitácora';
        } 
    if($row['bi_destacar'] == 1){
         echo 'destacado'; 
    }else{
        echo '--';
    }
    
    
    -->