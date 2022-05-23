<?php require_once("../controlador/mostrar_avisos_destacados.php"); ?>

<table class="table">
  <thead>
    <tr class="bg-primary" style="color:white">
      <th scope="col-1">#</th>
      <th scope="col-1">Correo</th>
      <th scope="col-1">Nombre</th>
      <th scope="col-1">Titulo</th>
      <th scope="col-1">Tipo</th>
      <th scope="col-1">Fecha</th>
      <th scope="col-1">Hora</th>
      <th scope="col-4">Descripcion</th>
      <th scope="col-1">Accion</th>
    </tr>
  </thead>
  <tbody>
  <?php 
$contador =+ 1;
if($consultaAvisosDest): foreach($consultaAvisosDest as $row): ?>

<tr>
    <td><?php echo $contador;?></td>
    <td><?php echo "<small>".$row['usuario_correo']."</small>"?> </td>
    <td><?php echo $row['usuario_nombre']?> </td>
    <td><?php echo $row['a_titulo']?> </td>
    <td><?php echo $row['tipo_aviso_nombre'] ?>  </td>
    <td><?php echo $row['fecha_formateada']?> </td>
    <td><?php echo $row['a_hora']?> </td>
    
    <td><?php echo $row['a_descripcion']?></td>
    <td class="d-flex justify-content-end px-0">
    <button type="button" class="btn btn-primary mx-1" ><i class="fa-solid fa-book"></i></button>
    <a class="btn btn-primary"href="#"><i class="fa-solid fa-trash"></i></a>
    </td>
    
    
</tr>

<?php endforeach; endif ?>
  </tbody>
</table>
<!--  -->
