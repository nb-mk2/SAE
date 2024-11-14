<!DOCTYPE html>
<html lang="en">

<?php require_once "./head.php";?>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <?php require_once "./nav_header.php"; ?>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <?php require_once "./header.php"; ?>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <?php require_once "./sidebar.php"; ?>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->

        <div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Hola, @usuario!!</h4>
                            <span class="ml-1">Datatable</span>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Table</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Datatable</a></li>
                        </ol>
                    </div>
                </div>
                <!-- row -->


                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Tabla de Actividades Extracurriculares</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                <table id="example" class="display" style="min-width: 845px">
    <thead>
        <tr>
            <th>Fecha</th>
            <th>Nombre Actividad</th>
            <th>Hora Inicio</th>
            <th>Hora Fin</th>
            <th>Detalle PDF</th>
            <th>Estado</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>15/03/2023</td>
            <td>Actividad de Fútbol</td>
            <td>10:00</td>
            <td>12:00</td>
            <td><a href="ruta/a/tu/documento.pdf" target="_blank"><img src="images/ico-pdf.png" alt="PDF" style="width: 30px; height: 30px;"></a></td>
            <td>Activo</td>
        </tr>
        <tr>
            <td>20/03/2023</td>
            <td>Clase de Danza</td>
            <td>14:00</td>
            <td>16:00</td>
            <td><a href="ruta/a/tu/documento.pdf" target="_blank"><img src="images/ico-pdf.png" alt="PDF" style="width: 30px; height: 30px;"></a></td>
            <td>Activo</td>
        </tr>
        <tr>
            <td>25/03/2023</td>
            <td>Charla sobre Tecnología</td>
            <td>09:00</td>
            <td>11:00</td>
            <td><a href="ruta/a/tu/documento.pdf" target="_blank"><img src="images/ico-pdf.png" alt="PDF" style="width: 30px; height: 30px;"></a></td>
            <td>Programado</td>
        </tr>
        <tr>
            <td>30/03/2023</td>
            <td>Exposición de Arte</td>
            <td>18:00</td>
            <td>20:00</td>
            <td><a href="ruta/a/tu/documento.pdf" target="_blank"><img src="images/ico-pdf.png" alt="PDF" style="width: 30px; height: 30px;"></a></td>
            <td>Activo</td>
        </tr>
        <tr>
            <td>05/04/2023</td>
            <td>Competencia de Ajedrez</td>
            <td>15:00</td>
            <td>17:00</td>
            <td><a href="ruta/a/tu/documento.pdf" target="_blank"><img src="images/ico-pdf.png" alt="PDF" style="width: 30px; height: 30px;"></a></td>
            <td>Finalizado</td>
        </tr>
    </tbody>
    <tfoot>
        <tr>
            <th>Fecha</th>
            <th>Nombre Actividad</th>
            <th>Hora Inicio</th>
            <th>Hora Fin</th>
            <th>Detalle PDF</th>
            <th>Estado</th>
        </tr>
    </tfoot>
</table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        <?php require_once "./footer.php"; ?>
        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->

        
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="./vendor/global/global.min.js"></script>
    <script src="./js/quixnav-init.js"></script>
    <script src="./js/custom.min.js"></script>
    


    <!-- Datatable -->
    <script src="./vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="./js/plugins-init/datatables.init.js"></script>

</body>

</html>