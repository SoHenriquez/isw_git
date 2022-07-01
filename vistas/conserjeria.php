<!-- head -->
<?php include('../partes/head.php') ?>
    <!-- fin head -->
<?php require_once("../controlador/mostrar_avisos_destacados.php"); ?>
<body>
    <div class="d-flex" id="content-wrapper">
     <!-- sideBar -->
     <?php include('../partes/sidebar.php') ?>
    <!-- fin sideBar -->
    <div class="w-100">
    <!-- Navbar -->
    <?php include('../partes/nav.php') ?>
    <!-- Fin Navbar -->
    <div id="content" class="bg-light w-100">
        <section class="bg-light py-3">
            <div class="container border-bottom ">
                <div class="row ">
                    <div class="col-lg-6 col-md-8">
                    <h1 class="font-weight-bold mb-0">Bienvenido Juan</h1>
                    </div>
                    <div class="col-6"></div>
                    <div class="col-7">
                    <p class="lead text-muted">Revisa la última información de avisos de conserjería</p></div>
                    <div class="col-5"></div>
                </div>
            </div>
        </section>
        <section class=" my-0" style="padding-bottom: 1rem;">
            <div class="container">
            <div class="row">
                <div class="col-lg-8">
                <h2 class="font-weight-bold mb-0">Avisos de Conserjería</h2>
                </div>
                <div class="col-lg-2 col-md-4 d-flex" style="justify-content:center; align-items:center;">
                <a href="" class="btn btn-primary w-100 align-self-center" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Agregar</a>
                
                </div>
                <div class="dropdown col-2">
                <form action="../controlador/mostrar_avisos_destacados.php" method="get">
                    <select class="form-select btn btn-primary w-100 align-self-center" name="tipo_aviso_clave" required>
                        <li><option class="dropdown-item bg-light" value="0" >Filtrar por</option></li>
                        <li><option class="dropdown-item bg-light" value="Tipo_aviso_clave" selected>Tipo de Aviso</option></li>
                        <li><option class="dropdown-item bg-light" value="2" >Fecha</option></li>
                        <li><option class="dropdown-item bg-light" value="3" >Nombre</option></li>
                    </select>   
                </form>
                </div>
            </div>
            
        </section>
        <div class="container">
        
        <?php include("../partes/hu1_avisos.php");?>
        </div>

    </div>
    
    
    </div>
    </div>
    <?php include("../partes/hu4_modal_aviso.php")?>
 
    <!-- Optional JavaScript -->
    
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js" integrity="sha256-R4pqcOYV8lt7snxMQO/HSbVCFRPMdrhAFMH+vr9giYI=" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <!-- Dropdown -->
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="form-validation.js"></script>
    <!-- Orden y filtro de datos de la tabla -->
<script>
        $(document).ready(function () {
    var table = $('#orden').DataTable({"bPaginate": false, "dom": '<lf<t>>'});

    
    $('#body tbody').on('click', 'tr', function () {
        var data = table.row(this).data();
        alert('You clicked on ' + data[0] + "'s row");
        
    });
});

</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
<!-- fin datatable -->
</body>