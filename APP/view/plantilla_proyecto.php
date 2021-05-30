<?php
$tittle = "Inicio - Plantilla";
$lugar = "Crear Proyecto";
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
                <div class="content">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-10">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="card-title">Datos de Proyecto</h4>
                                        </div> 
                                        <div class="card-body">
                                            <form>
                                                <div class="row">
                                                    <div class="col-md-7 pr-1">
                                                        <div class="form-group">
                                                            <label>Nombre del proyecto</label>
                                                            <input type="text" class="form-control" placeholder="Nombre proyecto" value="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 pr-1">
                                                        <div class="form-group">
                                                            <label>Grupo de trabajo</label>
                                                            <input type="text" class="form-control" placeholder="Grupo" value="" >
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-3 pr-1">
                                                        <div class="form-group">
                                                            <label>Dias de Desarrollo</label>
                                                            <input type="text" class="form-control" placeholder="Dias" value="" >
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 pl-1">
                                                        <div class="form-group">
                                                            <label>Jornada Laboral</label>
                                                            <input type="text" class="form-control"  placeholder="" value="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 pl-1">
                                                        <div class="form-group">
                                                            <label>Categoria</label>
                                                            <input type="text" class="form-control"  placeholder="" value="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
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