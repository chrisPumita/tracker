<?php
include_once "./include/session_verify.php";
$plantilla = "Bienvenido"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once "./include/header.php"?>
    <title>Formulario Registro</title>
</head>
<body class="sb-nav-fixed">

<?php include_once "./include/navbar.php"?>

<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <?php include_once "./include/sidenav.php"?>
    </div>
    <div id="layoutSidenav_content">
        <main>
             <link rel="stylesheet" href="style_empresa.css">
            <!-- incuir los elementos del la vista para cada cosa-->
            <div class="container-fluid px-4">
                <h4 class="mt-4">Bienvenido <?php echo $_SESSION['usuario']." ". $_SESSION['app']." ".$_SESSION['apm']; ?> </h4>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Panel principal</li>
                </ol>
                <div class="row">
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-primary text-white mb-4">
                            <div class="card-body">Usuarios</div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="./usuarios.php">Ver todos</a>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-primary text-white mb-4">
                            <div class="card-body">Grupos de trabajo</div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="./agrega_grupo_trabajo.php">Ver</a>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-primary text-white mb-4">
                            <div class="card-body">Proyectos</div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="./agrega-proyecto.php">Agregar Proyecto</a>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-primary text-white mb-4">
                            <div class="card-body">Asignar usuarios</div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="#">Asignar</a>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-header">
                    <ol class="breadcrumb mb-4">
                        <i class="fas fa-book-reader me-1"></i>
                        Proyectos
                    </ol>
                    <hr>
                </div>
                <div class="card-body">
                    
                    <div class="row" id="grid_proyectos">
                        <!-- ajax response--->
                    </div>
                    <hr>
                </div>
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        Grupos de trabajo
                    </div>
                    <div class="card-body">
                    <table class="table table-striped" >
                    <thead>
                            <tr>
                                <th>No</th>
                                <th>Nombre</th>
                                <th>Fecha de Creacion</th>
                                <th>Numero de integrantes</th>
                                <th>Estado</th>
                                <th>Acciones</th>
                            </tr>
                            </thead>
                            <tbody id="tbl-grupo-trabajo">
                            
                            </tbody>

                    </table>
                    </div>
                </div>
            </div>
            <!--  Termina contenido dinamico del dashboard-->
        </main>
        <?php include_once "./include/footer.php"?>
    </div>
</div>

<?php include_once "./include/js.php"?>
</body>
</html>
<script src="./ajax/list-proyectos.js"></script>
<script src="./ajax/list-grupo-trabajo.js"></script>