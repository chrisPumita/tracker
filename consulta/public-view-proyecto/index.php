<?php
    if (!isset($_GET['noSeguimiento'])){
        echo "<script>location.href ='../';</script>";
    }
    else{
        $noSeguimiento = $_GET['noSeguimiento'];
    }
?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Detalles del proyecto</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <style>

        .wrapper {
            margin: 10vh;
        }

        .card {
            border: none;
            transition: all 500ms cubic-bezier(0.19, 1, 0.22, 1);
            overflow: hidden;
            border-radius: 20px;
            min-height: 450px;
            box-shadow: 0 0 12px 0 rgba(0, 0, 0, 0.2);
        }
        @media (max-width: 768px) {
            .card {
                min-height: 350px;
            }
        }
        @media (max-width: 420px) {
            .card {
                min-height: 300px;
            }
        }
        .card.card-has-bg {
            transition: all 500ms cubic-bezier(0.19, 1, 0.22, 1);
            background-size: 120%;
            background-repeat: no-repeat;
            background-position: center center;
        }
        .card.card-has-bg:before {
            content: "";
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            background: inherit;
            -webkit-filter: grayscale(1);
            -moz-filter: grayscale(100%);
            -ms-filter: grayscale(100%);
            -o-filter: grayscale(100%);
            filter: grayscale(100%);
        }
        .card.card-has-bg:hover {
            transform: scale(0.98);
            box-shadow: 0 0 5px -2px rgba(0, 0, 0, 0.3);
            background-size: 130%;
            transition: all 500ms cubic-bezier(0.19, 1, 0.22, 1);
        }
        .card.card-has-bg:hover .card-img-overlay {
            transition: all 800ms cubic-bezier(0.19, 1, 0.22, 1);
            background: #234f6d;
            background: linear-gradient(0deg, rgba(4, 69, 114, 0.5) 0%, #044572 100%);
        }
        .card .card-footer {
            background: none;
            border-top: none;
        }
        .card .card-footer .media img {
            border: solid 3px rgba(234, 95, 0, 0.3);
        }
        .card .card-meta {
            color: orange;
        }
        .card .card-body {
            transition: all 500ms cubic-bezier(0.19, 1, 0.22, 1);
        }
        .card:hover {
            cursor: pointer;
            transition: all 800ms cubic-bezier(0.19, 1, 0.22, 1);
        }
        .card:hover .card-body {
            margin-top: 30px;
            transition: all 800ms cubic-bezier(0.19, 1, 0.22, 1);
        }
        .card .card-img-overlay {
            transition: all 800ms cubic-bezier(0.19, 1, 0.22, 1);
            background: #234f6d;
            background: linear-gradient(0deg, rgba(35, 79, 109, 0.3785889356) 0%, #455f71 100%);
        }
    </style>

</head>
<body>
<input type="hidden" id="noSeguimiento" value="<?php echo $noSeguimiento; ?>">
<section class="mt-0 align-items-center d-flex bg-dark" style=" background-size: cover; background-image: url(http://2015.igem.org/wiki/images/2/26/Amoy-MenuBar-bg.jpg);">
    <div class="container-fluid">
        <div class="container-sm">
            <div class="row  justify-content-center align-items-center d-flex text-center h-50">
                <div class="col-12 col-md-8  h-50 ">
                    <a href="../../">
                        <img class="rounded mx-auto d-block py-3" src="../../APP/assets/img/logo.png" width="300" alt="">
                    </a>
                    <h3 class=" text-light mb-2 mt-5"><strong id="nombreProyecto"></strong> </h3>
                    <h6 class=" text-light">No de Seguimiento: <?php echo $noSeguimiento; ?></h6>
                    <h6 class=" text-light">Realizado por: <span id="empresaName"></span></h6>
                    <p class="lead  text-light mb-5"><span id="mjeAvance"></span></p>
                    <span id="bar"></span>
                    <p class="py-5"><a href="../" class="btn bg-danger shadow-lg btn-round text-light btn-lg btn-rised">Nueva Consulta</a></p>
                    <div class="btn-container-wrapper p-relative d-block  zindex-1">
                        <a class="btn btn-link btn-lg   mt-md-3 mb-4 scroll align-self-center text-light" href="#detalles">
                            <i class="fa fa-angle-down fa-4x text-light"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="wrapper">
    <div class="container">

        <div class="row">
            <div class="col-sm-12"><div class="card text-white card-has-bg click-col" style="background-image:url('../../APP/assets/img/logo.png');">
                    <img class="card-img d-none" src="https://source.unsplash.com/600x900/?tech,street" alt="Goverment Lorem Ipsum Sit Amet Consectetur dipisi?">
                    <div class="card-img-overlay d-flex flex-column">
                        <div class="card-body">
                            <small class="card-meta mb-2">Porcentaje de avance:</small>
                            <h4 class="card-title mt-0 ">
                                <a class="text-white" herf="#">
                                    Avance:
                                    <span id="porcentaje"></span>
                                </a>
                            </h4>
                            <h5>
                                Fecha de Inicio:
                            </h5>
                            <small><i class="far fa-clock"></i> <span id="fInicio"></span></small>
                        </div>
                        <div class="card-footer">
                            <div class="media">
                                <img class="mr-3 rounded-circle" src="https://reckreastudios.com/tracker/APP/assets/img/categorias/people.png" alt="Generic placeholder image" style="max-width:50px">
                                <div class="media-body">
                                    <h6 class="my-0 text-white d-block"><span id="cardNameEmpresa"></span></h6>
                                    <small>Creado el: <span id="fCreate"></span></small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<section class="mt-0 align-items-center d-flex">
    <span id="estapasContainer"></span>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="main-timeline2" id="timeLineEtapas">
                    <div class="timeline">
                        <span class="icon fa fa-hourglass-half"></span>
                        <a href="#" class="timeline-content">
                            <h3 class="title"> <i class="fas fa-hourglass-half"></i> Web Designer</h3>
                            <div class="progress my-3">
                                <div class="progress-bar  progress-bar-striped bg-info" role="progressbar" style="width: 50.0000%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">50%</div>
                            </div>
                            <ul class="list-group text-dark">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Cras justo odio
                                    <span class="badge  badge-pill text-warning"><i class="fas fa-hourglass-half"></i></span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Dapibus ac facilisis in
                                    <span class="badge badge-pill text-warning"><i class="fas fa-hourglass-half"></i></span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Morbi leo risus
                                    <span class="badge badge-pill text-warning"><i class="fas fa-check-circle"></i> </span>
                                </li>
                            </ul>
                        </a>
                    </div>
                    <div class="timeline">
                        <span class="icon fa fa-check-circle"></span>
                        <a href="#" class="timeline-content">
                            <h3 class="title"> <i class="fas fa-hourglass-half"></i> Web Designer</h3>
                            <ul class="list-group text-dark">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Cras justo odio
                                    <span class="badge  badge-pill text-warning"><i class="fas fa-hourglass-half"></i></span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Dapibus ac facilisis in
                                    <span class="badge badge-pill text-warning"><i class="fas fa-hourglass-half"></i></span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Morbi leo risus
                                    <span class="badge badge-pill text-warning"><i class="fas fa-check-circle"></i> </span>
                                </li>
                            </ul>
                        </a>
                    </div>
                    <div class="timeline">
                        <span class="icon fa fa-check-circle"></span>
                        <a href="#" class="timeline-content">
                            <h3 class="title"> <i class="fas fa-hourglass-half"></i> Web Designer</h3>
                            <ul class="list-group text-dark">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Cras justo odio
                                    <span class="badge  badge-pill text-warning"><i class="fas fa-hourglass-half"></i></span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Dapibus ac facilisis in
                                    <span class="badge badge-pill text-warning"><i class="fas fa-hourglass-half"></i></span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Morbi leo risus
                                    <span class="badge badge-pill text-warning"><i class="fas fa-check-circle"></i> </span>
                                </li>
                            </ul>
                        </a>
                    </div>
                    <div class="timeline">
                        <span class="icon fa fa-briefcase"></span>
                        <a href="#" class="timeline-content">
                            <h3 class="title">Web Designer</h3>
                            <h3 class="title"> <i class="fas fa-hourglass-half"></i> Web Designer</h3>
                            <ul class="list-group text-dark">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Cras justo odio
                                    <span class="badge  badge-pill text-warning"><i class="fas fa-hourglass-half"></i></span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Dapibus ac facilisis in
                                    <span class="badge badge-pill text-warning"><i class="fas fa-hourglass-half"></i></span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Morbi leo risus
                                    <span class="badge badge-pill text-warning"><i class="fas fa-check-circle"></i> </span>
                                </li>
                            </ul>
                        </a>
                    </div>
                    <div class="timeline">
                        <span class="icon fa fa-mobile"></span>
                        <a href="#" class="timeline-content">
                            <h3 class="title"> <i class="fas fa-hourglass-half"></i> Web Designer</h3>
                            <ul class="list-group text-dark">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Cras justo odio
                                    <span class="badge  badge-pill text-warning"><i class="fas fa-hourglass-half"></i></span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Dapibus ac facilisis in
                                    <span class="badge badge-pill text-warning"><i class="fas fa-hourglass-half"></i></span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Morbi leo risus
                                    <span class="badge badge-pill text-warning"><i class="fas fa-check-circle"></i> </span>
                                </li>
                            </ul>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <hr>
    </div>
</section>


<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="container text-center">
        <div class="social-links">
            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        </div>
        <div class="copyright">
            &copy; Copyright <strong><span>ProyectTracker </span></strong> S.A. de C.V. Todos los derechos reservados.
        </div>
        <div>
            <!-- Large modal -->
            <p  class="copyright" data-toggle="modal" data-target=".bd-example-modal-lg">Aviso de Privacidad</p>

            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Aviso de Privacidad</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            ...
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Aceptar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script>let search = true;</script>
        <script src="../../APP/ajax/public-proyect.js"></script>
</body>
</html>