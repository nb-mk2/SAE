<?php
mb_internal_encoding('UTF-8');
mb_http_output('UTF-8');
?>
<div class="header">
    <div class="header-content">
        <nav class="navbar navbar-expand">
            <div class="collapse navbar-collapse justify-content-between">
                <div class="header-left">
                    <div class="search_bar dropdown">
                        <span class="search_icon p-3 c-pointer" data-toggle="dropdown">
                            <i class="mdi mdi-magnify"></i>
                        </span>
                        <div class="dropdown-menu p-0 m-0">
                            <form>
                                <input class="form-control" type="search" placeholder="Buscar" aria-label="Buscar">
                            </form>
                        </div>
                    </div>
                </div>

                <ul class="navbar-nav header-right">
                    <li class="nav-item dropdown notification_dropdown">
                        <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                            <i class="mdi mdi-bell"></i>
                            <div class="pulse-css"></div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                        <ul class="list-unstyled">
                            <li class="media dropdown-item">
                                <span class="success"><i class="ti-calendar"></i></span>
                                <div class="media-body">
                                    <a href="#">
                                        <p><strong>Juan Perez</strong> se inscribió en <strong>Fútbol</strong> exitosamente.</p>
                                    </a>
                                </div>
                                <span class="notify-time">Hace 10 min</span>
                            </li>
                            <li class="media dropdown-item">
                                <span class="primary"><i class="ti-user"></i></span>
                                <div class="media-body">
                                    <a href="#">
                                        <p><strong>María García</strong> registró asistencia en <strong>Danza</strong>.</p>
                                    </a>
                                </div>
                                <span class="notify-time">Hace 30 min</span>
                            </li>
                            <li class="media dropdown-item">
                                <span class="danger"><i class="ti-close"></i></span>
                                <div class="media-body">
                                    <a href="#">
                                        <p>Se canceló la clase de <strong>Ajedrez</strong> del día de hoy.</p>
                                    </a>
                                </div>
                                <span class="notify-time">Hace 1 hora</span>
                            </li>
                            <li class="media dropdown-item">
                                <span class="success"><i class="ti-trophy"></i></span>
                                <div class="media-body">
                                    <a href="#">
                                        <p>Equipo de <strong>Básquetbol</strong> ganó el torneo interescolar.</p>
                                    </a>
                                </div>
                                <span class="notify-time">Hace 2 horas</span>
                            </li>
                            <li class="media dropdown-item">
                                <span class="primary"><i class="ti-announcement"></i></span>
                                <div class="media-body">
                                    <a href="#">
                                        <p>Nueva actividad: <strong>Club de Robótica</strong> disponible para inscripción.</p>
                                    </a>
                                </div>
                                <span class="notify-time">Hace 3 horas</span>
                            </li>
                        </ul>
                            <a class="all-notification" href="#">Ver todas las notificaciones <i class="ti-arrow-right"></i></a>
                        </div>
                    </li>
                    <li class="nav-item dropdown header-profile">
                        <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                            <i class="mdi mdi-account"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="./perfil.php" class="dropdown-item">
                                <i class="icon-user"></i>
                                <span class="ml-2">Mi Perfil</span>
                            </a>
                            <a href="./form-tabla-sae.php" class="dropdown-item">
                                <i class="icon-calendar"></i>
                                <span class="ml-2">Mis Actividades</span>
                            </a>
                            <a href="./page-login.php" class="dropdown-item">
                                <i class="icon-key"></i>
                                <span class="ml-2">Cerrar Sesión</span>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>