<!-- Modal -->
<div class="modal fade" id="NuevoAviso" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="staticBackdropLabel">Crear nuevo registro</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                      <!-- <span aria-hidden="true">&times;</span> -->
              </button>
            </div>
            <!-- Body de Modal -->
            <div class="modal-body">

              <!-- Formulario Crear nuevo empleado -->
              <form action="../Controlador/crear_aviso.php" method="POST">
              <div class="row">
                  <div class="col-6">
                    <div>
                      <label for="">Seleccione tipo de registro</label>
                      
                    </div>
                    
                  </div>
                  <div class="col-5">
                    <select class="form-select" name="tipo" required>
                          <option value="0" selected>Tipo de Registro</option>
                          <option value="1">Bitacora</option>
                          <option value="2">Colación</option>
                          <option value="3" >Encomienda</option>
                          <option value="4">Entrega de llave</option>
                          <option value="5">Ingreso de visita</option>
                          <option value="6">Inventario</option>
                          <option value="7">Cambio de Turno</option>
                          <option value="8">Otro</option>
                      </select>
                    </div>
                </div>
                <div class="row">
                  
                  <div class="form-group col-7">
                    <label for="exampleInputPassword1"  class="form-label">Titulo</label>
                    <input type="text" placeholder="Entrega de llaves" class="form-control" name="titulo" required>
                  </div> 
                </div>
                <div class="row">
                  
                  <div class="form-group col-6">
                    <label for="exampleInputPassword1" class="form-label">Fecha</label>
                    <input type="date" class="form-control" id="datepicker" name="fecha" required>
                  </div>
                  <div class="form-group col-6">
                      <label for="exampleInputPassword1" class="form-label">Hora</label>
                      <input type="time" class="form-control" id="datepicker" name="hora" required>
                  </div>
                </div>
                <div class="row">
                    <div class="col-3">
                    <label for="">Comentario</label>
                    </div>
                    <div class="col-8 campo" >
                    <textarea class="input-text form-control" name="descripcion" style="height: 135px; width:100%;"></textarea>
                    <!-- <input type="text" class="form-control" name="comentario"  size=40 style="width:100%; height:10rem"> -->
                    </div>
                </div>
                
                
                <br>
                <div class="row">
                    <div class="form-group col-8">
                    <input class="check-input " type="checkbox" name="destacado[]" value="1" id="flexCheckChecked" >
                    <label>Destacar</label>
                    </div>
                    <div class="offset-2 ">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
                </div>
                
              </form>
            </div>
          </div>
        </div>
      </div>


      
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
