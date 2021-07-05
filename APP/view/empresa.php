<?php
$tittle = "Empresas - Proyectracker";
$lugar = "Detalles de Empresa";
include_once "./include/header.php";
?>

    <body>
    <div class="wrapper">
        <?php include_once "./include/sidebar.php";?>
        <div class="main-panel">            <!-- Navbar -->
            <?php include_once "./include/navbar.php";?>
            <div class="content">
                <div class="container-fluid">
                    <!-- Inicia contendo dinamico -->
                    <div class="content">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-10">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="card-title">En colaboración</h4>
                                        </div>
                                        <div class="card-body table-full-width table-responsive">
                                            <table class="table table-hover table-striped">
                                                <thead>
                                                <tr><th>ID Empresa</th>
                                                    <th>Nombre</th>
                                                    <th>RFC</th>
                                                    <th>Telefono</th>
                                                    <th>Email</th>
                                                    <th></th>
                                                </tr></thead>
                                                <tbody>
                                                <tr>
                                                    <td>1021</td>
                                                    <td>Globant Inc.</td>
                                                    <td>FDDSIJI55158</td>
                                                    <td>554856148</td>
                                                    <td>globant@globant.com</td>
                                                    <td><button type="submit" class="btn btn-info btn-fill pull-right">Ver</button></td>
                                                <tr> 
                                                </tbody>
                                            </table>
                                            
                                        </div>
                                    </div>                                    
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-10">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4>Mi Empresa</h4>
                                        </div>
                                        <div class="row">
                                            <div class="col-10">
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-info btn-fill pull-rigth">Crear empresa</button>
                                            <?php
                                            //Agregar secuencia pra habilitar boton "Ver mi empresa" en caso de que la empresa este creada
                                            //En caso contrario, de no estar creada, deshabilitar el boton "Ver mi empresa"
                                            ?>                                                       
                                        <button type="submit" class="btn btn-info btn-fill pull-rigth" disabled="...">Ver mi empresa</button>
                                    </div>
                                </div>
                              </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Termina contendo dinamico -->
                </div>
            </div>
            <?php include_once "./include/footer.php"?>
        </div>
    </div>
    </body>

<?php include_once "./include/js.php"?>