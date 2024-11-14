<!DOCTYPE html>
<html lang="en" class="h-100">

<?php require_once "./head.php";?>

<body class="h-100">
    <div class="authincation h-100">
        <div class="container-fluid h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <h4 class="text-center mb-4">Crea tu cuenta SISTEMA SAE</h4>
                                    <form action="page-login.php">
                                        <div class="form-group">
                                            <label><strong>Usuario</strong></label>
                                            <input type="text" class="form-control" placeholder="usuario">
                                        </div>
                                        <div class="form-group">
                                            <label><strong>Email</strong></label>
                                            <input type="email" class="form-control" placeholder="hola@ejemplo.com">
                                        </div>
                                        <div class="form-group">
                                            <label><strong>Contraseña</strong></label>
                                            <input type="password" class="form-control" value="Contraseña">
                                        </div>
                                        <div class="form-group">
                                            <label><strong>Repetir Contraseña</strong></label>
                                            <input type="password" class="form-control" value="Contraseña2">
                                        </div>
                                        <div class="text-center mt-4">
                                            <button type="submit" class="btn btn-primary btn-block">Registrarme</button>
                                        </div>
                                    </form>
                                    <div class="new-account mt-3">
                                        <p>¿Ya tienes una cuenta? <a class="text-primary" href="page-login.html">Inicia sesión</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="./vendor/global/global.min.js"></script>
    <script src="./js/quixnav-init.js"></script>
    <!--endRemoveIf(production)-->
</body>

</html>