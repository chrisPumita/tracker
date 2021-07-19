<?php
$idProyecto = "";
if (!isset($_GET['idProyecto']))
    echo "<script>location.href ='javascript:history.back()';</script>";
else{
    $idProyecto = $_GET['idProyecto'];
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
            <div class="container-fluid px-4 p-5">
                <h1 class="mt-4" id="nombre_proyecto"></h1>
                <div class="row" id="grd-proyecto">
                    <!--Ajax response-->
                </div>
                <hr>
                <h2>Visualizador general del proyecto</h2>
                <div class="row my-4">
                    <div class="progress">
                        <div class="progress-bar  progress-bar-striped bg-success" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-info text-white mb-4">
                            <div class="card-body">Editar informacion</div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditaProyecto">
                                    Modifcar
                                </button>
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
                                    Modifcar
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
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
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