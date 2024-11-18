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
                            <span class="ml-1">Nuevo SAE</span>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Formulario</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Nuevo SAE</a></li>
                        </ol>
                    </div>
                </div>
                <!-- row -->
                <div class="row mx-4">
    <div class="col-xl-12 col-xxl-12">                    
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Agregar nueva actividad extracurricular</h4>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    <form action="form-tabla-sae.php" method="POST">
                        <div class="form-row">
                            <div class="form-group col-md-2">
                                <label>Tipo de Actividad</label>
                                <select class="form-control" id="single-select" placeholder="Seleccione Tipo de actividad ">
                                    <option value="" disabled>Tipo de Actividad</option>
                                    <option>GRADO</option>
                                    <option>POS-GRADO</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label>Nombre de la Actividad</label>
                                <input type="text" class="form-control" placeholder="Escriba aquí un nombre corto a modo de título">
                            </div>                           
                            <div class="form-group col-md-6">
                                <label>Breve descripción de la Actividad</label>
                                <textarea class="form-control" rows="5" placeholder="Descripción de la actividad"></textarea>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label>Organización</label>
                                <select class="form-control select2-with-label-single" id="single-select">
                                    <option value="" disabled>Seleccione Organización</option>
                                    <option>GrIDIE-FCEyN-UNLPam </option>
                                    <option>GrFFS-FCEyN-UNLPam</option>
                                    <option>GrMAT-FCEyN-UNLPam</option>
                                </select>
                            </div>                           
                        </div>
                        <div class="form-row">
                            <div class="col-xl-4">
                                <label>Docentes responsables</label>
                                    <select class="multi-select" name="states[]" multiple="multiple">
                                        <option value="AL">Nicolás Baudis - DNI:41642565</option>
                                        <option value="WY">Pedro Sanchez - DNI:41234432</option>
                                        <option value="UI">Lucia Fernandez - DNI:36243324</option>
                                        <option value="UI">Romina Perez- DNI:30434553</option>
                                    </select>
                            </div>
                            <div class="col-xl-4">
                                <label>Docente colaborador/a</label>
                                    <select class="multi-select" name="states[]" multiple="multiple">
                                        <option value="AL">Nicolás Baudis - DNI:41642565</option>
                                        <option value="WY">Pedro Sanchez - DNI:41234432</option>
                                        <option value="UI">Lucia Fernandez - DNI:36243324</option>
                                        <option value="UI">Romina Perez- DNI:30434553</option>
                                    </select>
                            </div>
                            <div class="col-xl-4">
                                <label>Coordinadores</label>
                                    <select class="multi-select" name="states[]" multiple="multiple">
                                        <option value="AL">NICOLÁS BAUDIS - DNI:41642565</option>
                                        <option value="WY">PEDRO SANCHEZ - DNI:41234432</option>
                                        <option value="UI">LUCIA FERNADEZ - DNI:36243324</option>
                                        <option value="UI">ROMINA PEREZ- DNI:30434553</option>
                                    </select>
                            </div>
                        </div>
                        <br>
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label>Fecha Inicio Actividad</label>
                                <input type="date" class="form-control">
                            </div>
                            <div class="form-group col-md-3">
                                <label>Fecha Fin Actividad</label>
                                <input type="date" class="form-control">
                            </div>
                            <div class="form-group col-md-3">
                                <label>Hora de Inicio</label>
                                <input type="time" class="form-control">
                            </div>
                            <div class="form-group col-md-3">
                                <label>Hora de Fin</label>
                                <input type="time" class="form-control">
                            </div>                                                  
                        </div>
                        <br>
                        <div class="form-row">
                        <div class="form-group col-md-3">
                            <label>Cupo disponible</label>
                            <input type="number" class="form-control">
                        </div> 
                        <div class="form-group col-md-3">
                                <label>Modalidad</label>
                                <select class="form-control" id="single-select" placeholder="Seleccione requisto ">
                                    <option value="" disabled>Seleccione Modalidad</option>
                                    <option>PRESENCIAL</option>
                                    <option>VITUAL</option>                                   
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label>Carga Horaria</label>
                                <input type="number" class="form-control">
                            </div>
                            <div class="form-group col-md-3">
                                <label>Requisito</label>
                                <select class="form-control" id="single-select" placeholder="Seleccione requisto ">
                                    <option value="" disabled>Seleccione Requisito</option>
                                    <option>ASISTENCIA/APROBADO</option>
                                    <option>APROBADO</option>
                                    <option>ASISTENCIA</option>                                    
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label>Tipo de Calificación</label>
                                <select class="form-control" id="single-select" placeholder="Seleccione requisto ">
                                    <option value="" disabled>Seleccione opción</option>
                                    <option>NUMÉRICA</option>
                                    <option>CONCEPTUAL</option>    
                                    <option>SIN CALIFICACIÓN</option>                                                                    
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 col-xxl-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Fundamentación:</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="summernote"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 col-xxl-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Objetivos:</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="summernote"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 col-xxl-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Detalle sobre Dictado:</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="summernote"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 col-xxl-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Metodología de abordaje académico:</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="summernote"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 col-xxl-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Programa:</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="summernote"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 col-xxl-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Bibliografía y material digital en página web:</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="summernote"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 col-xxl-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Arancel:</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="summernote"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 col-xxl-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Requerimiento de espacios físicos, medios tecnológicos, plataformas virtuales, etc.:</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="summernote"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 col-xxl-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Criterios de Evaluación</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="summernote"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 col-xxl-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Requisitos de Aprobación </h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="summernote"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 col-xxl-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Instrumentos de Evaluación </h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="summernote"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 col-xxl-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Certificado </h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="summernote"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 col-xxl-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">CORRESPONDE AL ANEXO DE LA RESOLUCIÓN Nº 291/24</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="summernote"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 col-xxl-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Formas de financiamiento  </h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="summernote"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                            <div class="input-group mb-3 flex-wrap">
                                <input type="file" class="form-control" id="inputGroupFile01">
                                <label class="input-group-text" for="inputGroupFile01" fileactivity="ArchivoActividad" required="">Insertar</label>
                            </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Agregar</button>
                    </form>
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
    <?php require_once "./script.php"; ?>
    
</body>

</html>