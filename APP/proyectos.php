<?php $plantilla = "Plantilla"; ?>

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
    <h1 class="mt-4">PROYECTOS</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Todos los proyectos</li>
    </ol>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Proyectos
        </div>
        <div class="card-body">
            <div class="row" id="grid_proyectos">
                <!-- ajax response--->
            </div>
        </div>

        <div class="card-body">
                        <div class="dataTable-wrapper dataTable-loading no-footer sortable searchable fixed-columns">
                            <form class="ms-8 me-0 me-md-3 my-2 my-md-0 md-8">
                                <div class="input-group">
                                    <input class="form-control" type="text" placeholder="Buscar por nombre"  aria-describedby="btnBuscarProyecto" />
                                    <button class="btn btn-primary" id="btnBuscarProyecto" type="button"><i class="fas fa-search"></i></button>
                                </div>
                            </form>
                    
                            <div class="dataTable-container">
                                <table id="datatablesSimple" class="dataTable-table">
                                    <thead>
                                    <tr>
                                        <th data-sortable=""><a href="#" class="dataTable-sorter">No</a></th>
                                        <th data-sortable=""><a href="#" class="dataTable-sorter">Nombre proyecto</a></th>
                                        <th data-sortable=""><a href="#" class="dataTable-sorter">Grupo Trabajo</a></th>
                                        <th data-sortable=""><a href="#" class="dataTable-sorter">Fecha Creacion</a></th>
                                        <th data-sortable=""><a href="#" class="dataTable-sorter">Fecha Inicio</a></th>
                                        <th data-sortable=""><a href="#" class="dataTable-sorter">Dias</a></th>
                                        <th data-sortable=""><a href="#" class="dataTable-sorter">Jornada</a></th>
                                        <th data-sortable=""><a href="#" class="dataTable-sorter">Acciones</a></th>
                                    </tr>
                                    </thead>
                                    <tbody id="tbl-proyectos">
                                    <!-- ajax response -->
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
<script src="./ajax/list-proyectos.js"></script>
/*
*<tr>
                    <td>Tiger Nixon</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                    <td>61</td>
                    <td>2011/04/25</td>
                    <td>$320,800</td>
                </tr> 
*/ 
