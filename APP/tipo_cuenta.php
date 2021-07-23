<?php
include_once "./include/session_verify.php";
$plantilla = "Actualiza tu plan"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once "./include/header.php"?>
</head>
<body class="sb-nav-fixed">

<?php include_once "./include/navbar.php"?>

<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <?php include_once "./include/sidenav.php"?>
    </div>
    <div id="layoutSidenav_content">
        <main>
            <!-- incuir los elementos del la vista para cada cosa-->



            <div class="container-fluid px-4">
                <div class="row justify-content-center">
                    <div class="col-xl-11 col-md-10">
                        <h1 class="mt-4 pb-3">¿Cambio de plan?</h1>
                        <div class="col-xl-5 col-md-8">
                            <div class="form-group pb-3">
                                <input name="idPage" id="idPage" type="hidden" class="form-control form-control-lg" value="1">
                                <label class="pb-1" for="nombre">Plan actual</label>
                                <input class="form-control" type="text" placeholder="Prueba gratuita" aria-label="Disabled input example" disabled>
                            </div>
                            <div class="form-group pb-3">
                                <input name="idPage" id="idPage" type="hidden" class="form-control form-control-lg" value="1">
                                <label class="pb-1" for="nombre">Fecha de vencimiento</label>
                                <input class="form-control" type="text" placeholder="22/08/2021" aria-label="Disabled input example" disabled>
                            </div>
                        </div>
                        <div class="text-center">
                            <h1 class="mb-1 pt-4">Elige tu plan Premium</h1>
                            <h4>Controla los avances de tus proyectos</h4>
                        </div>  
                        <div class="row align-items-center justify-content-center">
                            <div class="col-12 col-md-12 d-flex mt-4 mt-md-0">
                                <!-- col // -->
                                <div class="col-md-4 px-4 mb-4">
                                    <figure class="card card-product">
                                        <div class="img-wrap text-center pb-3"><img src="./assets/img/estrella_bronce.png" width="150"> </div>
                                        <figcaption class="info-wrap">
                                            <h4 class="title px-4">Tracker Free</h4>
                                            <p class="desc px-4">Todas las cuentas nuevas inician con un periodo de prueba de 1 mes a <strong>ProTracker</strong></p>
                                            <ol class="list-unstyled mt-4">
                                                <li class="d-flex mb-2 mt-2 aos-init aos-animate px-4" data-aos="fade-up">
                                                    <i class="fas fa-check-circle fa-lg text-info mr-1 mt-2 mb-2 ml-0" aria-hidden="true"></i><span class="pl-2 pt-1">3 Proyectos Publicos</span></li>
                                                <li class="d-flex mb-2 mt-2 aos-init aos-animate px-4" data-aos="fade-up">
                                                    <i class="fas fa-check-circle fa-lg text-info mr-1 mt-2 mb-2 ml-0" aria-hidden="true"></i><span class="pl-2 pt-1">Crea hasta 5 Grupos de trabajo</span>
                                                </li>
                                                <li class="d-flex mb-2 mt-2 aos-init aos-animate px-4" data-aos="fade-up">
                                                    <i class="fas fa-check-circle fa-lg text-info mr-1 mt-2 mb-2 ml-0" aria-hidden="true"></i><span class="pl-2 pt-1">Registra un maximo de  10 usuarios</span>
                                                </li>
                                            </ol>
                                        </figcaption>
                                        <div class="bottom-wrap text-center pb-3">
                                            <a href="" class="btn btn-sm btn-primary float-right">Comenzar</a>
                                            <div class="price-wrap h5 pt-3">
                                                <span class="price-new">GRATIS</span> <del class="price-old">$90.00 MXN/mes</del>
                                            </div> <!-- price-wrap.// -->
                                        </div> <!-- bottom-wrap.// -->
                                    </figure>
                                </div> <!-- col // -->
                                <div class="col-md-4 px-4">
                                    <figure class="card card-product">
                                        <div class="img-wrap text-center pb-3"><img src="./assets/img/estrella_plata.png" width="150"> </div>
                                        <figcaption class="info-wrap">
                                            <h4 class="title px-4">ProTracker Platino</h4>
                                            <p class="desc px-4">Crea hasta cincuenta proyectos con la mayoria de beneficios de Proyect Tracker incluidos, tus proyectos pasados seguiran siendo visibles para tus solicitantes</p>
                                            <ol class="list-unstyled mt-4">
                                                <li class="d-flex mb-2 mt-2 aos-init aos-animate px-4" data-aos="fade-up">
                                                    <i class="fas fa-check-circle fa-lg text-info mr-1 mt-2 mb-2 ml-0" aria-hidden="true"></i><span class="pl-2 pt-1">50 Proyectos Publicos</span></li>
                                                <li class="d-flex mb-2 mt-2 aos-init aos-animate px-4" data-aos="fade-up">
                                                    <i class="fas fa-check-circle fa-lg text-info mr-1 mt-2 mb-2 ml-0" aria-hidden="true"></i><span class="pl-2 pt-1">Crea hasta 10 Grupos de trabajo</span>
                                                </li>
                                                <li class="d-flex mb-2 mt-2 aos-init aos-animate px-4" data-aos="fade-up">
                                                    <i class="fas fa-check-circle fa-lg text-info mr-1 mt-2 mb-2 ml-0" aria-hidden="true"></i><span class="pl-2 pt-1">Registra un maximo de  100 usuarios</span>
                                                </li>
                                            </ol>
                                        </figcaption>
                                        <div class="bottom-wrap text-center pb-3">
                                            <a href=""  class="btn btn-sm btn-primary float-right">Comenzar</a>
                                            <div class="price-wrap h5 pt-3">
                                                <span class="price-new">$99 MXN</span> <del class="price-old">$199</del> /mes
                                            </div> <!-- price-wrap.// -->
                                        </div> <!-- bottom-wrap.// -->
                                    </figure>
                                </div> <!-- col // -->
                                <!-- col // -->
                                <div class="col-md-4 px-4">
                                    <figure class="card card-product">
                                       <div class="img-wrap text-center pb-3"><img src="./assets/img/estrella_oro.png" width="150"> </div>
                                        <figcaption class="info-wrap">
                                            <h4 class="title px-4">Pro TRacker Premium</h4>
                                            <p class="desc px-4">Crea proyectos sin limites y goza de todas las herramientas de Proyect Tracker sin limites. Nadie te detendra, todos tus proyectos seran visbles cuando lo deses</p>
                                            <ol class="list-unstyled mt-4">
                                                <li class="d-flex mb-2 mt-2 aos-init aos-animate px-4" data-aos="fade-up">
                                                    <i class="fas fa-check-circle fa-lg text-info mr-1 mt-2 mb-2 ml-0" aria-hidden="true"></i><span class="pl-2 pt-1">Proyectos Publicos Ilimitados</span></li>
                                                <li class="d-flex mb-2 mt-2 aos-init aos-animate px-4" data-aos="fade-up">
                                                    <i class="fas fa-check-circle fa-lg text-info mr-1 mt-2 mb-2 ml-0" aria-hidden="true"></i><span class="pl-2 pt-1">Crea Grupos Ilimitrados de trabajo</span>
                                                </li>
                                                <li class="d-flex mb-2 mt-2 aos-init aos-animate px-4" data-aos="fade-up">
                                                    <i class="fas fa-check-circle fa-lg text-info mr-1 mt-2 mb-2 ml-0" aria-hidden="true"></i><span class="pl-2 pt-1">Registra usuarios ilimitados</span>
                                                </li>
                                                <li class="d-flex mb-2 mt-2 aos-init aos-animate px-4" data-aos="fade-up">
                                                    <i class="fas fa-check-circle fa-lg text-info mr-1 mt-2 mb-2 ml-0" aria-hidden="true"></i><span class="pl-2 pt-1">Oculta los proyectos</span>
                                                </li>
                                                <li class="d-flex mb-2 mt-2 aos-init aos-animate px-4" data-aos="fade-up">
                                                    <i class="fas fa-check-circle fa-lg text-info mr-1 mt-2 mb-2 ml-0" aria-hidden="true"></i><span class="pl-2 pt-1">Atencion especializada rapida</span>
                                                </li>
                                            </ol>
                                        </figcaption>
                                        <div class="bottom-wrap text-center pb-3">
                                            <a href=""  class="btn btn-sm btn-primary float-right">Comenzar</a>
                                            <div class="price-wrap h5 pt-3">
                                                <span class="price-new">$199</span> <del class="price-old">$399</del> / mes
                                            </div> <!-- price-wrap.// -->
                                        </div> <!-- bottom-wrap.// -->
                                    </figure>
                                </div> <!-- col // -->
                            </div> <!-- row.// -->
                        </div>
                    </div>
                </div>
            </div>

            <!-- incuir los elementos del la vista para cada cosa-->
        </main>
<?php include_once "./include/footer.php"?>
    </div>
</div>

<?php include_once "./include/js.php"?>
</body>
</html>
