<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Focus - Bootstrap Admin Dashboard </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
    <link href="./css/style.css" rel="stylesheet">

</head>

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
        <div class="nav-header">
            <a href="index.html" class="brand-logo">
                <img class="logo-abbr" src="./images/logo.png" alt="">
                <img class="logo-compact" src="./images/logo-text.png" alt="">
                <img class="brand-title" src="./images/logo-text.png" alt="">
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
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
                                        <input class="form-control" type="search" placeholder="Search" aria-label="Search">
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
                                            <span class="success"><i class="ti-user"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>Martin</strong> has added a <strong>customer</strong> Successfully
                                                    </p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="primary"><i class="ti-shopping-cart"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>Jennifer</strong> purchased Light Dashboard 2.0.</p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="danger"><i class="ti-bookmark"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>Robin</strong> marked a <strong>ticket</strong> as unsolved.
                                                    </p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="primary"><i class="ti-heart"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>David</strong> purchased Light Dashboard 1.0.</p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="success"><i class="ti-image"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong> James.</strong> has added a<strong>customer</strong> Successfully
                                                    </p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                    </ul>
                                    <a class="all-notification" href="#">See all notifications <i
                                            class="ti-arrow-right"></i></a>
                                </div>
                            </li>
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                    <i class="mdi mdi-account"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="./app-profile.html" class="dropdown-item">
                                        <i class="icon-user"></i>
                                        <span class="ml-2">Profile </span>
                                    </a>
                                    <a href="./email-inbox.html" class="dropdown-item">
                                        <i class="icon-envelope-open"></i>
                                        <span class="ml-2">Inbox </span>
                                    </a>
                                    <a href="./page-login.html" class="dropdown-item">
                                        <i class="icon-key"></i>
                                        <span class="ml-2">Logout </span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="quixnav">
            <div class="quixnav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label first">Main Menu</li>
                    <!-- <li><a href="index.html"><i class="icon icon-single-04"></i><span class="nav-text">Dashboard</span></a>
                    </li> -->
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                class="icon icon-single-04"></i><span class="nav-text">Dashboard</span></a>
                        <ul aria-expanded="false">
                            <li><a href="./index.html">Dashboard 1</a></li>
                            <li><a href="./index2.html">Dashboard 2</a></li></ul>
                    </li>
                    
                    <li class="nav-label">Apps</li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                class="icon icon-app-store"></i><span class="nav-text">Apps</span></a>
                        <ul aria-expanded="false">
                            <li><a href="./app-profile.html">Profile</a></li>
                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Email</a>
                                <ul aria-expanded="false">
                                    <li><a href="./email-compose.html">Compose</a></li>
                                    <li><a href="./email-inbox.html">Inbox</a></li>
                                    <li><a href="./email-read.html">Read</a></li>
                                </ul>
                            </li>
                            <li><a href="./app-calender.html">Calendar</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                class="icon icon-chart-bar-33"></i><span class="nav-text">Charts</span></a>
                        <ul aria-expanded="false">
                            <li><a href="./chart-flot.html">Flot</a></li>
                            <li><a href="./chart-morris.html">Morris</a></li>
                            <li><a href="./chart-chartjs.html">Chartjs</a></li>
                            <li><a href="./chart-chartist.html">Chartist</a></li>
                            <li><a href="./chart-sparkline.html">Sparkline</a></li>
                            <li><a href="./chart-peity.html">Peity</a></li>
                        </ul>
                    </li>
                    <li class="nav-label">Components</li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                class="icon icon-world-2"></i><span class="nav-text">Bootstrap</span></a>
                        <ul aria-expanded="false">
                            <li><a href="./ui-accordion.html">Accordion</a></li>
                            <li><a href="./ui-alert.html">Alert</a></li>
                            <li><a href="./ui-badge.html">Badge</a></li>
                            <li><a href="./ui-button.html">Button</a></li>
                            <li><a href="./ui-modal.html">Modal</a></li>
                            <li><a href="./ui-button-group.html">Button Group</a></li>
                            <li><a href="./ui-list-group.html">List Group</a></li>
                            <li><a href="./ui-media-object.html">Media Object</a></li>
                            <li><a href="./ui-card.html">Cards</a></li>
                            <li><a href="./ui-carousel.html">Carousel</a></li>
                            <li><a href="./ui-dropdown.html">Dropdown</a></li>
                            <li><a href="./ui-popover.html">Popover</a></li>
                            <li><a href="./ui-progressbar.html">Progressbar</a></li>
                            <li><a href="./ui-tab.html">Tab</a></li>
                            <li><a href="./ui-typography.html">Typography</a></li>
                            <li><a href="./ui-pagination.html">Pagination</a></li>
                            <li><a href="./ui-grid.html">Grid</a></li>

                        </ul>
                    </li>

                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                class="icon icon-plug"></i><span class="nav-text">Plugins</span></a>
                        <ul aria-expanded="false">
                            <li><a href="./uc-select2.html">Select 2</a></li>
                            <li><a href="./uc-nestable.html">Nestedable</a></li>
                            <li><a href="./uc-noui-slider.html">Noui Slider</a></li>
                            <li><a href="./uc-sweetalert.html">Sweet Alert</a></li>
                            <li><a href="./uc-toastr.html">Toastr</a></li>
                            <li><a href="./map-jqvmap.html">Jqv Map</a></li>
                        </ul>
                    </li>
                    <li><a href="widget-basic.html" aria-expanded="false"><i class="icon icon-globe-2"></i><span
                                class="nav-text">Widget</span></a></li>
                    <li class="nav-label">Forms</li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                class="icon icon-form"></i><span class="nav-text">Forms</span></a>
                        <ul aria-expanded="false">
                            <li><a href="./form-element.html">Form Elements</a></li>
                            <li><a href="./form-wizard.html">Wizard</a></li>
                            <li><a href="./form-editor-summernote.html">Summernote</a></li>
                            <li><a href="form-pickers.html">Pickers</a></li>
                            <li><a href="form-validation-jquery.html">Jquery Validate</a></li>
                        </ul>
                    </li>
                    <li class="nav-label">Table</li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                class="icon icon-layout-25"></i><span class="nav-text">Table</span></a>
                        <ul aria-expanded="false">
                            <li><a href="table-bootstrap-basic.html">Bootstrap</a></li>
                            <li><a href="table-datatable-basic.html">Datatable</a></li>
                        </ul>
                    </li>

                    <li class="nav-label">Extra</li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                class="icon icon-single-copy-06"></i><span class="nav-text">Pages</span></a>
                        <ul aria-expanded="false">
                            <li><a href="./page-register.html">Register</a></li>
                            <li><a href="./page-login.html">Login</a></li>
                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Error</a>
                                <ul aria-expanded="false">
                                    <li><a href="./page-error-400.html">Error 400</a></li>
                                    <li><a href="./page-error-403.html">Error 403</a></li>
                                    <li><a href="./page-error-404.html">Error 404</a></li>
                                    <li><a href="./page-error-500.html">Error 500</a></li>
                                    <li><a href="./page-error-503.html">Error 503</a></li>
                                </ul>
                            </li>
                            <li><a href="./page-lock-screen.html">Lock Screen</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
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
                            <h4>Hi, welcome back!</h4>
                            <span class="ml-1">Email</span>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Email</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Inbox</a></li>
                        </ol>
                    </div>
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="email-left-box px-0 mb-5">
                                    <div class="p-0">
                                        <a href="email-compose.html" class="btn btn-primary btn-block">Compose</a>
                                    </div>
                                    <div class="mail-list mt-4">
                                        <a href="email-inbox.html" class="list-group-item active"><i
                                                class="fa fa-inbox font-18 align-middle mr-2"></i> Inbox <span
                                                class="badge badge-primary badge-sm float-right">198</span> </a>
                                        <a href="javascript:void()" class="list-group-item"><i
                                                class="fa fa-paper-plane font-18 align-middle mr-2"></i>Sent</a> <a href="javascript:void()" class="list-group-item"><i
                                                class="fa fa-star font-18 align-middle mr-2"></i>Important <span
                                                class="badge badge-danger text-white badge-sm float-right">47</span>
                                        </a>
                                        <a href="javascript:void()" class="list-group-item"><i
                                                class="mdi mdi-file-document-box font-18 align-middle mr-2"></i>Draft</a><a href="javascript:void()" class="list-group-item"><i
                                                class="fa fa-trash font-18 align-middle mr-2"></i>Trash</a>
                                    </div>
                                    <div class="intro-title d-flex justify-content-between">
                                        <h5>Categories</h5>
                                        <i class="icon-arrow-down" aria-hidden="true"></i>
                                    </div>
                                    <div class="mail-list mt-4">
                                        <a href="email-inbox.html" class="list-group-item"><span class="icon-warning"><i
                                                    class="fa fa-circle" aria-hidden="true"></i></span>
                                            Work </a>
                                        <a href="email-inbox.html" class="list-group-item"><span class="icon-primary"><i
                                                    class="fa fa-circle" aria-hidden="true"></i></span>
                                            Private </a>
                                        <a href="email-inbox.html" class="list-group-item"><span class="icon-success"><i
                                                    class="fa fa-circle" aria-hidden="true"></i></span>
                                            Support </a>
                                        <a href="email-inbox.html" class="list-group-item"><span class="icon-dpink"><i
                                                    class="fa fa-circle" aria-hidden="true"></i></span>
                                            Social </a>
                                    </div>
                                </div>
                                <div class="email-right-box ml-0 ml-sm-4 ml-sm-0">
                                    <div role="toolbar" class="toolbar ml-4 ml-sm-0">
                                        <div class="btn-group mb-4">
                                            <span class="btn btn-dark ml-3">
                                                <input type="checkbox">
                                            </span>
                                            <button class="btn btn-dark" type="button"><i class="ti-reload"></i>
                                            </button>
                                        </div>
                                        <div class="btn-group mb-4">
                                            <button aria-expanded="false" data-toggle="dropdown" class="btn btn-dark dropdown-toggle" type="button">More <span
                                                    class="caret"></span>
                                            </button>
                                            <div class="dropdown-menu"> <a href="javascript: void(0);" class="dropdown-item">Mark as Unread</a> <a href="javascript: void(0);" class="dropdown-item">Add to Tasks</a>
                                                <a href="javascript: void(0);" class="dropdown-item">Add Star</a> <a href="javascript: void(0);" class="dropdown-item">Mute</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="email-list mt-4">
                                        <div class="message">
                                            <div>
                                                <div class="d-flex message-single">
                                                    <div class="custom-control custom-checkbox pl-4">
                                                        <input type="checkbox">
                                                    </div>
                                                    <div class="ml-2">
                                                        <button class="border-0 bg-transparent align-middle p-0"><i
                                                                class="fa fa-star" aria-hidden="true"></i></button>
                                                    </div>
                                                </div>
                                                <a href="email-read.html" class="col-mail col-mail-2">
                                                    <div class="subject">Ingredia Nutrisha, A collection of textile samples lay spread out on the table - Samsa was a travelling salesman - and above it there hung a picture</div>
                                                    <div class="date">11:49 am</div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="message">
                                            <div>
                                                <div class="d-flex message-single">
                                                    <div class="custom-control custom-checkbox pl-4">
                                                        <input type="checkbox">
                                                    </div>
                                                    <div class="ml-2">
                                                        <button class="border-0 bg-transparent align-middle p-0"><i
                                                                class="fa fa-star" aria-hidden="true"></i></button>
                                                    </div>
                                                </div>
                                                <a href="email-read.html" class="col-mail col-mail-2">
                                                    <div class="subject">Almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</div>
                                                    <div class="date">11:49 am</div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="message">
                                            <div>
                                                <div class="d-flex message-single">
                                                    <div class="custom-control custom-checkbox pl-4">
                                                        <input type="checkbox">
                                                    </div>
                                                    <div class="ml-2">
                                                        <button class="border-0 bg-transparent align-middle p-0"><i
                                                                class="fa fa-star" aria-hidden="true"></i></button>
                                                    </div>
                                                </div>
                                                <a href="email-read.html" class="col-mail col-mail-2">
                                                    <div class="subject">Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of</div>
                                                    <div class="date">11:49 am</div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="message">
                                            <div>
                                                <div class="d-flex message-single">
                                                    <div class="custom-control custom-checkbox pl-4">
                                                        <input type="checkbox">
                                                    </div>
                                                    <div class="ml-2">
                                                        <button class="border-0 bg-transparent align-middle p-0"><i
                                                                class="fa fa-star" aria-hidden="true"></i></button>
                                                    </div>
                                                </div>
                                                <a href="email-read.html" class="col-mail col-mail-2">
                                                    <div class="subject">Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of</div>
                                                    <div class="date">11:49 am</div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="message">
                                            <div>
                                                <div class="d-flex message-single">
                                                    <div class="custom-control custom-checkbox pl-4">
                                                        <input type="checkbox">
                                                    </div>
                                                    <div class="ml-2">
                                                        <button class="border-0 bg-transparent align-middle p-0"><i
                                                                class="fa fa-star" aria-hidden="true"></i></button>
                                                    </div>
                                                </div>
                                                <a href="email-read.html" class="col-mail col-mail-2">
                                                    <div class="subject">Ingredia Nutrisha, A collection of textile samples lay spread out on the table - Samsa was a travelling salesman - and above it there hung a picture</div>
                                                    <div class="date">11:49 am</div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="message">
                                            <div>
                                                <div class="d-flex message-single">
                                                    <div class="custom-control custom-checkbox pl-4">
                                                        <input type="checkbox">
                                                    </div>
                                                    <div class="ml-2">
                                                        <button class="border-0 bg-transparent align-middle p-0"><i
                                                                class="fa fa-star" aria-hidden="true"></i></button>
                                                    </div>
                                                </div>
                                                <a href="email-read.html" class="col-mail col-mail-2">
                                                    <div class="subject">Almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</div>
                                                    <div class="date">11:49 am</div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="message">
                                            <div>
                                                <div class="d-flex message-single">
                                                    <div class="custom-control custom-checkbox pl-4">
                                                        <input type="checkbox">
                                                    </div>
                                                    <div class="ml-2">
                                                        <button class="border-0 bg-transparent align-middle p-0"><i
                                                                class="fa fa-star" aria-hidden="true"></i></button>
                                                    </div>
                                                </div>
                                                <a href="email-read.html" class="col-mail col-mail-2">
                                                    <div class="subject">Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of</div>
                                                    <div class="date">11:49 am</div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="message unread">
                                            <div>
                                                <div class="d-flex message-single">
                                                    <div class="custom-control custom-checkbox pl-4">
                                                        <input type="checkbox">
                                                    </div>
                                                    <div class="ml-2">
                                                        <button class="border-0 bg-transparent align-middle p-0"><i
                                                                class="fa fa-star" aria-hidden="true"></i></button>
                                                    </div>
                                                </div>
                                                <a href="email-read.html" class="col-mail col-mail-2">
                                                    <div class="subject">Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of</div>
                                                    <div class="date">11:49 am</div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="message unread">
                                            <div>
                                                <div class="d-flex message-single">
                                                    <div class="custom-control custom-checkbox pl-4">
                                                        <input type="checkbox">
                                                    </div>
                                                    <div class="ml-2">
                                                        <button class="border-0 bg-transparent align-middle p-0"><i
                                                                class="fa fa-star" aria-hidden="true"></i></button>
                                                    </div>
                                                </div>
                                                <a href="email-read.html" class="col-mail col-mail-2">
                                                    <div class="subject">Ingredia Nutrisha, A collection of textile samples lay spread out on the table - Samsa was a travelling salesman - and above it there hung a picture</div>
                                                    <div class="date">11:49 am</div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="message">
                                            <div>
                                                <div class="d-flex message-single">
                                                    <div class="custom-control custom-checkbox pl-4">
                                                        <input type="checkbox">
                                                    </div>
                                                    <div class="ml-2">
                                                        <button class="border-0 bg-transparent align-middle p-0"><i
                                                                class="fa fa-star" aria-hidden="true"></i></button>
                                                    </div>
                                                </div>
                                                <a href="email-read.html" class="col-mail col-mail-2">
                                                    <div class="subject">Almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</div>
                                                    <div class="date">11:49 am</div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="message">
                                            <div>
                                                <div class="d-flex message-single">
                                                    <div class="custom-control custom-checkbox pl-4">
                                                        <input type="checkbox">
                                                    </div>
                                                    <div class="ml-2">
                                                        <button class="border-0 bg-transparent align-middle p-0"><i
                                                                class="fa fa-star" aria-hidden="true"></i></button>
                                                    </div>
                                                </div>
                                                <a href="email-read.html" class="col-mail col-mail-2">
                                                    <div class="subject">Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of</div>
                                                    <div class="date">11:49 am</div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="message">
                                            <div>
                                                <div class="d-flex message-single">
                                                    <div class="custom-control custom-checkbox pl-4">
                                                        <input type="checkbox">
                                                    </div>
                                                    <div class="ml-2">
                                                        <button class="border-0 bg-transparent align-middle p-0"><i
                                                                class="fa fa-star" aria-hidden="true"></i></button>
                                                    </div>
                                                </div>
                                                <a href="email-read.html" class="col-mail col-mail-2">
                                                    <div class="subject">Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of</div>
                                                    <div class="date">11:49 am</div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="message">
                                            <div>
                                                <div class="d-flex message-single">
                                                    <div class="custom-control custom-checkbox pl-4">
                                                        <input type="checkbox">
                                                    </div>
                                                    <div class="ml-2">
                                                        <button class="border-0 bg-transparent align-middle p-0"><i
                                                                class="fa fa-star" aria-hidden="true"></i></button>
                                                    </div>
                                                </div>
                                                <a href="email-read.html" class="col-mail col-mail-2">
                                                    <div class="subject">Ingredia Nutrisha, A collection of textile samples lay spread out on the table - Samsa was a travelling salesman - and above it there hung a picture</div>
                                                    <div class="date">11:49 am</div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="message unread">
                                            <div>
                                                <div class="d-flex message-single">
                                                    <div class="custom-control custom-checkbox pl-4">
                                                        <input type="checkbox">
                                                    </div>
                                                    <div class="ml-2">
                                                        <button class="border-0 bg-transparent align-middle p-0"><i
                                                                class="fa fa-star" aria-hidden="true"></i></button>
                                                    </div>
                                                </div>
                                                <a href="email-read.html" class="col-mail col-mail-2">
                                                    <div class="subject">Almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</div>
                                                    <div class="date">11:49 am</div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="message">
                                            <div>
                                                <div class="d-flex message-single">
                                                    <div class="custom-control custom-checkbox pl-4">
                                                        <input type="checkbox">
                                                    </div>
                                                    <div class="ml-2">
                                                        <button class="border-0 bg-transparent align-middle p-0"><i
                                                                class="fa fa-star" aria-hidden="true"></i></button>
                                                    </div>
                                                </div>
                                                <a href="email-read.html" class="col-mail col-mail-2">
                                                    <div class="subject">Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of</div>
                                                    <div class="date">11:49 am</div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="message">
                                            <div>
                                                <div class="d-flex message-single">
                                                    <div class="custom-control custom-checkbox pl-4">
                                                        <input type="checkbox">
                                                    </div>
                                                    <div class="ml-2">
                                                        <button class="border-0 bg-transparent align-middle p-0"><i
                                                                class="fa fa-star" aria-hidden="true"></i></button>
                                                    </div>
                                                </div>
                                                <a href="email-read.html" class="col-mail col-mail-2">
                                                    <div class="subject">Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of</div>
                                                    <div class="date">11:49 am</div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="message">
                                            <div>
                                                <div class="d-flex message-single">
                                                    <div class="custom-control custom-checkbox pl-4">
                                                        <input type="checkbox">
                                                    </div>
                                                    <div class="ml-2">
                                                        <button class="border-0 bg-transparent align-middle p-0"><i
                                                                class="fa fa-star" aria-hidden="true"></i></button>
                                                    </div>
                                                </div>
                                                <a href="email-read.html" class="col-mail col-mail-2">
                                                    <div class="subject">Ingredia Nutrisha, A collection of textile samples lay spread out on the table - Samsa was a travelling salesman - and above it there hung a picture</div>
                                                    <div class="date">11:49 am</div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="message">
                                            <div>
                                                <div class="d-flex message-single">
                                                    <div class="custom-control custom-checkbox pl-4">
                                                        <input type="checkbox">
                                                    </div>
                                                    <div class="ml-2">
                                                        <button class="border-0 bg-transparent align-middle p-0"><i
                                                                class="fa fa-star" aria-hidden="true"></i></button>
                                                    </div>
                                                </div>
                                                <a href="email-read.html" class="col-mail col-mail-2">
                                                    <div class="subject">Almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</div>
                                                    <div class="date">11:49 am</div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="message unread">
                                            <div>
                                                <div class="d-flex message-single">
                                                    <div class="custom-control custom-checkbox pl-4">
                                                        <input type="checkbox">
                                                    </div>
                                                    <div class="ml-2">
                                                        <button class="border-0 bg-transparent align-middle p-0"><i
                                                                class="fa fa-star" aria-hidden="true"></i></button>
                                                    </div>
                                                </div>
                                                <a href="email-read.html" class="col-mail col-mail-2">
                                                    <div class="subject">Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of</div>
                                                    <div class="date">11:49 am</div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="message">
                                            <div>
                                                <div class="d-flex message-single">
                                                    <div class="custom-control custom-checkbox pl-4">
                                                        <input type="checkbox">
                                                    </div>
                                                    <div class="ml-2">
                                                        <button class="border-0 bg-transparent align-middle p-0"><i
                                                                class="fa fa-star" aria-hidden="true"></i></button>
                                                    </div>
                                                </div>
                                                <a href="email-read.html" class="col-mail col-mail-2">
                                                    <div class="subject">Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of</div>
                                                    <div class="date">11:49 am</div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- panel -->
                                    <div class="row mt-4 m-4 mx-sm-4">
                                        <div class="col-7">
                                            <div class="text-left">1 - 20 of 568</div>
                                        </div>
                                        <div class="col-5">
                                            <div class="btn-group float-right">
                                                <button class="btn btn-dark" type="button"><i
                                                        class="fa fa-angle-left"></i>
                                                </button>
                                                <button class="btn btn-dark" type="button"><i
                                                        class="fa fa-angle-right"></i>
                                                </button>
                                            </div>
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
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="#" target="_blank">Quixkit</a> 2019</p>
            </div>
        </div>
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
    



</body>

</html>