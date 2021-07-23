<?php
include_once "./include/session_verify.php";
$plantilla = "Grupos de Trabajo"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once "./include/header.php"; ?>
</head>
<body class="sb-nav-fixed">

<?php include_once "./include/navbar.php"; ?>

<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <?php include_once "./include/sidenav.php";?>
    </div>
    <div id="layoutSidenav_content">
        <main>
            <!-- incuir los elementos del la vista para cada cosa-->
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Grupos de trabajo</h1>

                    <div class="container mt-4"> 
                        <div class="row">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalAddGt">
                            Crear nuevo grupo de trabajo
                            </button>
                            <!-- Modal -->
                        </div>
                    </div>

                        <div class="card mb-4 mt-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Mis grupos de trabajo
                            </div>
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nombre del proyecto</th>
                                        <th>Fecha de creación</th>
                                        <th>Cantidad de miembros</th>
                                        <th>Estatus</th> 
                                        <th>Acciones</th>
                                         
                                    </tr>
                                    </thead>
                                    <tbody id="tbl-grupo-trabajo">
                                    </tbody>
                                </table>
                            </div>
                        </div>
                </div>
            <!-- incuir los elementos del la vista para cada cosa-->
        </main>
<?php include_once "./include/footer.php"?>
    </div>
</div>
<?php include_once "./modals/modal-edita-proyecto.php"?>
<?php include_once "./include/js.php"?>
</body>
</html>
<script src="./ajax/list-grupo-trabajo.js"></script>
<script src="./ajax/add_grupo_trabajo.js"></script>