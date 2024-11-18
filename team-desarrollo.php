<!DOCTYPE html>
<html lang="es">

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
                            <span class="ml-1">SAE</span>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Table</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">SAE</a></li>
                        </ol>
                    </div>
                </div>
                <!-- row -->


                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">EQUIPO DE DESARROLLO - PRIMERA VERSION 1.0.0</h4>
                            </div>
                            <div class="card-body">
                                <div class="text-center">
                                    <img src="./images/equipo.jpeg" alt="Equipo"  style="max-width: 100%;">                                
                                    <audio   autoplay  controls id="audio">
                                        <source src="./images/audio.mp3" type="audio/mpeg">
                                        Ups!! Tu navegador no soporta el elemento de audio.
                                    </audio>
                                </div>
                            </div>                           
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
<div class="modal fade" id="audioModal" tabindex="-1" aria-labelledby="audioModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="audioModalLabel">¡Bienvenido al EQUIPO de DESARROLLO!</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="playAudioBtn">Confirmar</button>
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

    <script>
  // Mostrar el modal al cargar la página
    /*window.onload = function() {
        // Usar jQuery para mostrar el modal
        $('#audioModal').modal('show');
    };

    // Reproducir audio cuando el usuario haga clic en el botón
    document.getElementById('playAudioBtn').addEventListener('click', function() {
        var audio = document.getElementById('audio');
        var equipoImage = document.getElementById('equipoImage'); // Obtener la referencia a la imagen

        audio.play().catch(function(error) {
            console.log('Error al reproducir el audio:', error);
        });

        equipoImage.style.display = 'block';

        // Cerrar el modal con jQuery (funciona en Bootstrap 4)
        $('#audioModal').modal('hide');
    }); */
    </script>

    <!-- Required vendors -->
    <script src="./vendor/global/global.min.js"></script>
    <script src="./js/quixnav-init.js"></script>
    <script src="./js/custom.min.js"></script>
    


    <!-- Datatable -->
    <script src="./vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="./js/plugins-init/datatables.init.js"></script>

    
</body>

</html>