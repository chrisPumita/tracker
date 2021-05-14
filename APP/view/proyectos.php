<?php
$tittle = "Mis Proyectos";
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
                                            <h4 class="card-title">Striped Table with Hover</h4>
                                            <p class="card-category">Here is a subtitle for this table</p>
                                        </div>
                                        <div class="card-body table-full-width table-responsive">
                                            <table class="table table-hover table-striped">
                                                <thead>
                                                <tr><th>ID</th>
                                                    <th>Name</th>
                                                    <th>Salary</th>
                                                    <th>Country</th>
                                                    <th>City</th>
                                                </tr></thead>
                                                <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Dakota Rice</td>
                                                    <td>$36,738</td>
                                                    <td>Niger</td>
                                                    <td>Oud-Turnhout</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Minerva Hooper</td>
                                                    <td>$23,789</td>
                                                    <td>Curaçao</td>
                                                    <td>Sinaai-Waas</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Sage Rodriguez</td>
                                                    <td>$56,142</td>
                                                    <td>Netherlands</td>
                                                    <td>Baileux</td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>Philip Chaney</td>
                                                    <td>$38,735</td>
                                                    <td>Korea, South</td>
                                                    <td>Overland Park</td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>Doris Greene</td>
                                                    <td>$63,542</td>
                                                    <td>Malawi</td>
                                                    <td>Feldkirchen in Kärnten</td>
                                                </tr>
                                                <tr>
                                                    <td>6</td>
                                                    <td>Mason Porter</td>
                                                    <td>$78,615</td>
                                                    <td>Chile</td>
                                                    <td>Gloucester</td>
                                                </tr>
                                                </tbody>
                                            </table>
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