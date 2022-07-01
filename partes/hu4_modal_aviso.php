    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <!-- Formulario Crear nuevo Aviso de Conserjería -->
          <form action="../controlador/crear_aviso.php" method="POST">
            <div class="row">
                <div class="col">
                  <div>
                    <label >Seleccione tipo de registro</label>
                  </div>
                </div>
                <div class="col">
                  <select class="form-select" name="tipo" required>
                          <option value="0" selected>Tipo de Registro</option>
                          <option value="1">Bitacora</option>
                          <option value="2">Encomienda</option>
                          <option value="3">Otro</option>
                  </select>
                </div>
            </div>
            <!-- Un titulo para el aviso -->
              <div class="row">
                
                <div class="form-group col">
                  <label for="exampleInputPassword1"  class="form-label">Titulo</label>
                  <input type="text" placeholder="Entrega de llaves" class="form-control" name="titulo" required>
                </div> 
              </div>
                <!-- Fecha y Hora del registro -->
              <div class="row">
                
                <div class="form-group col">
                  <label for="exampleInputPassword1" class="form-label">Fecha</label>
                  <input type="date" class="form-control" id="datepicker" name="fecha" required>
                </div>
                <div class="col-1"></div>
                <div class="form-group col">
                    <label for="exampleInputPassword1" class="form-label">Hora</label>
                    <input type="time" class="form-control" id="datepicker" name="hora" required>
                </div>
              </div>
                <!-- Descripcion del Aviso -->
              <div class="row">
                  <div class="col-3">
                  <label class="form-label">Comentario</label>
                  </div>
                  <div class="col-7 campo" >
                  <textarea class="input-text form-control" name="descripcion" style="height: 135px; width:100%;"></textarea>
                  </div>
              </div>
              <br>

              <div class="row">
                  <div class="col-2">
                  <label class="form-label">Destacar</label>
                  </div>
                  <div class="col">
                  <input class="form-check-input" type="radio" name="destacado" value="0" id="flexRadioDefault1">
                  <label class="form-check-label" for="flexRadioDefault1">
                    no
                  </label>
                  </div>
                  <div class="col">
                    
                  <div class="form-check">
                  <input class="form-check-input" type="radio" name="destacado" value="1" id="flexRadioDefault1" checked>
                  <label class="form-check-label" for="flexRadioDefault1">
                    si
                  </label>
                  
                </div>
                  </div>
                  <div class="col-1">
                  <button type="submit" class="btn btn-primary">Enviar</button>
                  </div>
                  <div class="col-6"><br></div>
              </div>
              
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Understood</button>
        </div>
      </div>
    </div>
  </div>