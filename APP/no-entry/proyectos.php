<?php
$tittle = "Mis Proyectos - ProyecTracker";
$lugar = "Proyectos";
include_once "./include/header.php";
?>

    <body>
    <div class="wrapper">
        <?php include_once "./include/sidebar.php";?>
        <div class="main-panel">
            <!-- Navbar -->
            <?php include_once "./include/navbar.php";?>
            <div class="content">
                <div class="container-fluid">
                    <!-- Inicia contendo dinamico -->
                    <!-- inicia tablas-->
                    <div class="content">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card strpied-tabled-with-hover">
                                        <div class="card-header ">
                                            <h4 class="card-title">Proyectos</h4>
                                            <p class="card-category">En Desarrollo</p>
                                        </div>
                                        <div class="card-body table-full-width table-responsive">
                                            <table class="table table-hover table-striped">
                                                <thead>
                                                <tr><th>ID Proyecto</th>
                                                    <th>Nombre</th>
                                                    <th>Fecha Inicio</th>
                                                    <th>Fecha Estimada</th>
                                                    <th></th>
                                                    <th></th>
                                                </tr></thead>
                                                <tbody>
                                                <tr>
                                                    <td>1021</td>
                                                    <td>Dakota Rice</td>
                                                    <td>15/10/20</td>
                                                    <td>20/12/20</td>
                                                    <td></td>
                                                    <td><button type="submit" class="btn btn-info btn-fill pull-right">Ver</button></td>
                                                </tr>
                                                <tr>
                                                    <td>2021</td>
                                                    <td>Hooper Dash</td>
                                                    <td>15/10/13</td>
                                                    <td>15/10/14</td>
                                                    <td></td>
                                                    <td><button type="submit" class="btn btn-info btn-fill pull-right">Ver</button></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="card-header ">
                                            <p class="card-category">Finalizados</p>
                                            </div>
                                            <div class="card-body table-full-width table-responsive">
                                                <table class="table table-hover table-striped">
                                                    <thead>
                                                    <tr><th>ID Proyecto</th>
                                                        <th>Nombre</th>
                                                        <th>Fecha Inicio</th>
                                                        <th>Fecha de finalización</th>
                                                        <th>Dias de desarrollo</th>
                                                        <th></th>
                                                    </tr>
                                                    <tr>
                                                        <td>2098</th>
                                                        <td>Dakota Tec</td>
                                                        <td>15/10/18</td>
                                                        <td>15/03/19</td>
                                                        <td>160</td>
                                                        <td><button type="submit" class="btn btn-info btn-fill pull-right">Ver</button></td>
                                                    </tr>
                                                    <tr>
                                                        <td>3052</th>
                                                        <td>Globant Tec</td>
                                                        <td>13/09/20</td>
                                                        <td>28/05/21</td>
                                                        <td>160</td>
                                                        <td><button type="submit" class="btn btn-info btn-fill pull-right">Ver</button></td>
                                                    </tr>
                                                    </thead>
                                                </table>
                                            </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card strpied-tabled-with-hover">
                                        <div class="card-header ">
                                            <h4 class="card-title">Nuevo Proyecto</h4>
                                        </div>
                                        <div class="col-md-6">
                                        </div>
                                        <div class="col-md-6">
                                            <a class="nav-link" href="./plantilla_proyecto.php">
                                            <button type="submit" class="btn btn-info btn-fill upull-right">Crear proyecto</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end tablas-->
                    <!-- Termina contendo dinamico -->

                </div>
            </div>
            <?php include_once "./include/footer.php"?>
        </div>
    </div>
    </body>

<?php include_once "./include/js.php"?>