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
            <input type="hidden" value="<?php echo $idProyecto?>">
            <div class="container-fluid px-4 p-5">
                <h1 class="mt-4">NOMBRE DEL PROYECTO</h1>
                <div class="row">
                    <div class="col-md-4">
                        <div class="p-3">
                            <div class="d-flex flex-row mb-3"><img class="icon-proyecto" src="https://cdn.iconscout.com/icon/free/png-256/git-1-226092.png" width="70">
                                <div class="d-flex flex-column ml-2">
                                    <span>Administrador Sistemas</span>
                                    <span class="text-black-50">Programadores Unidos</span>
                                    <span class="ratings">
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 50%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                            50%
                                        </div>
                                    </div>
                                </span>
                                </div>
                            </div>
                            <h6>Estado: Activo</h6>
                            <div class="d-flex justify-content-between install mt-3">
                                <span>Fecha Inicio: 543564</span>
                                <span>Tiempo: 90 dias</span>
                            </div>
                        </div>
                    </div>
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
                <div class="card mb-4">
                    <div class="card-header">
                        <svg class="svg-inline--fa fa-table fa-w-16 me-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="table" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M464 32H48C21.49 32 0 53.49 0 80v352c0 26.51 21.49 48 48 48h416c26.51 0 48-21.49 48-48V80c0-26.51-21.49-48-48-48zM224 416H64v-96h160v96zm0-160H64v-96h160v96zm224 160H288v-96h160v96zm0-160H288v-96h160v96z"></path></svg><!-- <i class="fas fa-table me-1"></i> Font Awesome fontawesome.com -->
                        Etapa 1
                        <div class="row d-flex justify-content-center align-items-center">
                            <div class="col-10">
                                <div class="progress">
                                    <div class="progress-bar  progress-bar-striped bg-info" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                                </div>
                            </div>
                            <div class="col-2">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalAddSubetapa">
                                    Agrega Sub-etapa
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="dataTable-wrapper dataTable-loading no-footer sortable searchable fixed-columns">
                            <div class="dataTable-container">
                                <table id="datatablesSimple" class="dataTable-table">
                                    <thead>
                                    <tr>
                                        <th data-sortable="" ><a href="#" class="dataTable-sorter">#</a></th>
                                        <th data-sortable="" ><a href="#" class="dataTable-sorter">Subetapa</a></th>
                                        <th data-sortable="" ><a href="#" class="dataTable-sorter">Inicio</a></th>
                                        <th data-sortable="" ><a href="#" class="dataTable-sorter">Dias</a></th>
                                        <th data-sortable="" ><a href="#" class="dataTable-sorter">Estatus</a></th>
                                        <th data-sortable="" ><a href="#" class="dataTable-sorter">Acciones</a></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td class="text-success"><i class="fas fa-check-circle"></i></td>
                                        <td>Analisis</td>
                                        <td>20 ago 21</td>
                                        <td>61</td>

                                        <td><i class="far fa-trash-alt"></i> <i class="far fa-edit"></i> </td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td class="text-warning" ><i class="fas fa-clock"></i></td>
                                        <td>Analisis</td>
                                        <td>20 ago 21</td>
                                        <td>61</td>

                                        <td>
                                            <i class="far fa-trash-alt"></i>
                                            <a href="#">
                                                <i class="far fa-edit" data-bs-toggle="modal" data-bs-target="#modalAddSubetapa"></i>
                                            </a>
                                        </td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
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
