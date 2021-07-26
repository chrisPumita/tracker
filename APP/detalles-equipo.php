<?php

include_once "./include/session_verify.php";
$idGpo="";
    if (!isset($_GET['idGpo'])){
        //el id del grpo NO entro a consulta regresamos
        header("Location: ./agrega_grupo_trabajo.php");
    }
    else{
        $plantilla = "Detalles del equipo";
        $idGpo=$_GET['idGpo'];
    }
?>

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
                <input type="hidden" id="idGpo" value="<?php echo $idGpo; ?>">
                <div>
                    <h1 class="mt-4">
                        <span id="nombreGTitulo"></span>
                    </h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Este grupo se creó el día: <br> </li>
                        <li>  
                             <span id="fechagt"></span>
                        </li>
                    </ol>
                </div>
                <div class="card mb-4">
                    <div class="card-header">
                        <h6><i class="fas fa-info"></i> Información del grupo de trabajo</h6>
                    </div>
                    <div class="card-body" id="cardProyectos">
                        <form id="frm-update-ngt">
                            <div class="form-floating mb-3">
                                <input class="form-control" id="nombreGt" name="nombre" type="text" placeholder="Enter your first name" required="">
                                <label for="nombre">Nombre del grupo de trabajo</label>
                            </div>
                            <!--Put a select Item this row like GT, Categoria -->
                            <!--Hacer select Menu -->
                            <div class="mt-4 mb-0">
                                <div class="d-grid">
                                    <input type="submit" id="btnEnviar" name="btnEnviar" value="Renombrar" class="btn btn-primary btn-user btn-block">
                                </div>
                            </div>
                        </form>
                        <span id="mjeAlertaUDNE">
                                <!-- Mje ajax-->
                        </span>                    
                    </div>
                </div>

                <div class="card mb-4">
                    <div class="card-header">
                        <h6><i class="fas fa-user-plus"></i> Agregar un integrante al equipo</h6>
                    </div>
                    <div class="card-body" id="cardProyectos">
                        <form id="frm-add-user-gt">
                            <div class="form-floating mb-3">
                                <select class="form-select form-select-sm" id="userGTU" name="categoria" type="text" required="" aria-label=".form-select-sm example">
                                    

                                </select>
                            </div>
                            <!--Put a select Item this row like GT, Categoria -->
                            <!--Hacer select Menu -->
                            <div class="mt-4 mb-0">
                                <div class ="d-grid">
                                    <button class="btn btn-primary btn-user btn-block btnAgregaIntegrante"> Agregar</button>
                                </div>
                            </div>
                        </form>
                        <span id="mjeAlertaAUAUGT">
                            <!-- Mje ajax-->
                        </span>
                    </div>
                </div>
                <!-- incuir los elementos del la vista para cada cosa-->
                <div class="card mb-4">
                    <div class="card-header">
                        <h6><i class="fas fa-users"></i> Usuarios del equipo</h6>
                        <!-- <i class="fas fa-table me-1"></i> Font Awesome fontawesome.com -->

                    </div>
                    <div class="card-body">
                        <div class="dataTable-wrapper dataTable-loading no-footer sortable searchable fixed-columns">
                            <div class="dataTable-top">
                                <div class="card-body">
                                    En la siguiente tabla podra ver a los usuarios que estan asignados a este grupo de trabajo
                                </div>
                                <div class="dataTable-search">
                                    <input class="dataTable-input" placeholder="Search..." type="text">
                                </div>
                            </div>
                            <div class="dataTable-container">
                                <table class="dataTable-table">
                                <thead>
                                    <tr>
                                        <th data-sortable=""><a href="#" class="dataTable-sorter">No</a></th>
                                        <th data-sortable=""><a href="#" class="dataTable-sorter">Nombre</a></th>
                                        <th data-sortable=""><a href="#" class="dataTable-sorter">Correo</a></th>                                        <th data-sortable=""><a href="#" class="dataTable-sorter">Username</a></th>
                                        <th data-sortable=""><a href="#" class="dataTable-sorter">Acceso</a></th>

                                        <th data-sortable=""><a href="#" class="dataTable-sorter">Fecha de Unión</a></th>
                                        <th data-sortable=""><a href="#" class="dataTable-sorter">Estatus</a></th>
                                        <th data-sortable=""><a href="#" class="dataTable-sorter">Acciones</a></th>
                                    </tr>
                                    </thead>
                                    <tbody id="tbl_usuarios_gt">
                                    </tbody>
                                </table>
                            </div>
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
<script src="./ajax/equipo-detalles.js"></script>
<script src="./ajax/list-usuarios.js"></script>