

    <!-- Modal -->
    <div class="modal fade" id="modificar?id=<?php echo $row['a_clave'];?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Modificar registro</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="row ">
                <div class="col-lg-6 col-md-8">
                <h1 class="font-weight-bold mb-0">Modificar registro</h1>
                </div>
                <div class="col-6"></div>
                <div class="col-12"><br></div>
    
            </div>
            <!-- Formulario Crear nuevo Aviso de Conserjería -->
          <?php  if($consultaAvisosDest): foreach($consultaAvisosDest as $row): ?>
            <?php  if($_GET['id'] == $row['a_clave']){?>
          <form action="../controlador/hu4_modificar_aviso.php"  method="POST">
          <div class="row">
              <div class="col-4">
                <div>
                  <label >Seleccione tipo de registro</label>
                </div>
              </div>
              <div class="col-5">
                <select class="form-select" name="tipo_aviso_actualizar" value="<?php echo $row['tipo_aviso_clave'];?>" required>
                        <option value="0" selected>Tipo de Registro </option>
                        <option value="1">Bitacora</option>
                        <option value="2">Encomienda</option>
                        <option value="3">Otro</option>
                </select>
              </div>
          </div>
          <!-- Modificar titulo y Fecha del aviso -->
            <div class="row">
              
              <div class="form-group col-3">
                <label for="exampleInputPassword1"  class="form-label">Titulo</label>
                <input type="text" placeholder="Entrega de llaves" value="<?php echo $row['a_titulo'];?>" class="form-control" name="titulo_actualizar" required>
              </div> 
              <div class="col-1"></div>
              <div class="col-3">
                <label for="exampleInputPassword1" class="form-label">Fecha antigua: <?php echo $row['fecha_formateada'];?></label>
                <input type="date" class="form-control" id="datepicker" name="fecha_actualizar" value="<?php echo $row['fecha_formateada'];?>" required>
              </div>
            </div>
              
              <!-- Modificar Descripcion del Aviso -->
            <div class="row">
              
              <div class="form-group col-2">
              <label >Comentario</label>
                </div>
                <div class="col-5 campo" >
                <textarea class="input-text form-control" name="descripcion_actualizar"  style="height: 135px; width:100%;"><?php echo $row['a_descripcion'];?></textarea>
                
              </div>
            </div>
            <br>
            <div class="row">
                <div class="col-5"></div>
                <div class="col-1"><button type="reset" class="btn btn-primary"><i class="fa-solid fa-trash"></i>&nbsp</button></div>
                <div class="form-group">
                <button type="submit"  class="btn btn-primary">Enviar</button>
                </div>
            </div>
            <input type="hidden" name="a_clave" value="<?php echo $row['a_clave']; ?>">
            <?php }?>
            <?php endforeach; endif ?>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Understood</button>
        </div>
      </div>
    </div>
  </div>