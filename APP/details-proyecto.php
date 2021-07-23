<?php

include_once "./include/session_verify.php";

$idProyecto = "";
if (!isset($_GET['idProyecto']) || !isset($_GET['key']) || $_GET['key']=="null"){
    echo "<script>location.href ='javascript:history.back()';</script>";
}
else{
    $idProyecto = $_GET['idProyecto'];
    $key = $_GET['key'];
}
?>

<?php $plantilla = "Vista general del proyecto"; ?>

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
            <input type="hidden" value="<?php echo $idProyecto?>" id="idProyecto">
            <input type="hidden" value="<?php echo $key?>" id="key">
            <div class="container-fluid px-4 p-5">
                <h1 class="mt-4" id="nombre_proyecto"></h1>
                <div class="row" id="grd-proyecto">
                    <!--Ajax response-->
                </div>
                <hr>
                <h4>Visualizador general del proyecto</h4>
                <div class="row">
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-info text-white mb-4">
                            <div class="card-body">Vista Pública</div>
                            <div class="card-footer d-flex align-items-center justify-content-between" id="btnVistaPublica">
                                <span id="btnVistaPublica"></span>

                                <div class="small text-white">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-info text-white mb-4">
                            <div class="card-body">Agregar Etapa</div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalAddEtapa">
                                    Agregar
                                </button>
                                <div class="small text-white">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-info text-white mb-4">
                            <div class="card-body">Enviar invitación al cliente</div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalSendMail">
                                    Compartir Avance
                                </button>
                                <div class="small text-white">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-danger text-white mb-4">
                            <div class="card-body">Eliminar proyecto</div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDeleteProyect">
                                    Eliminar
                                </button>
                                <div class="small text-white">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- start  card lista etapa --->
                <div class="row" id="tbl-etapa">

                    <!-- AJAX RESPONSE-->
                </div>
                <!-- card lista etapa --->

            </div>
            <!-- incuir los elementos del la vista para cada cosa-->
        </main>
        <?php include_once "./include/footer.php"?>
    </div>
</div>
<!-- modales include-->
<?php include_once "./modals/modal-edita-proyecto.php"?>
<!-- modales include-->

<?php include_once "./include/js.php"?>
</body>
</html>
<script src="./ajax/lis-detail-proyecto.js"></script>
<script src="./ajax/list_agrega_proyecto.js"></script>
<script src="./ajax/add-etapa.js"></script>
<script src="./ajax/add-subetapa.js"></script>