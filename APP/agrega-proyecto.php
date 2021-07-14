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
                <h1 class="mt-4">Crea Proyecto</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Crea un proyecto Nuevo.</li>
                </ol>
                <div class="card mb-4">
                    <div class="card-header">
                        <svg class="svg-inline--fa fa-table fa-w-16 me-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="table" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M464 32H48C21.49 32 0 53.49 0 80v352c0 26.51 21.49 48 48 48h416c26.51 0 48-21.49 48-48V80c0-26.51-21.49-48-48-48zM224 416H64v-96h160v96zm0-160H64v-96h160v96zm224 160H288v-96h160v96zm0-160H288v-96h160v96z"></path></svg><!-- <i class="fas fa-table me-1"></i> Font Awesome fontawesome.com -->
                        Crear proyecto.
                    </div>
                    <div class="card-body" id="cardProyectos">
                        <form id="frm-add-new-proyect">
                            <div class="form-floating mb-3">
                                <input class="form-control" id="nombrep" name="nombre" type="text" placeholder="Enter your first name" required="">
                                <label for="nombre">Nombre proyecto</label>
                            </div>
                            <!--Put a select Item this row like GT, Categoria -->
                            <label for="gt">Grupo de Trabajo</label>
                            <div class="form-floating mb-3">
                                <select class="form-select form-select-sm" id="gt" name="gt" type="text" required="" aria-label=".form-select-sm example">
                                    <option selected>----  SELECCIONA  ----</option>
                                    <option value="4">ProyecTracker</option>
                                    <option value="5">Grupo Bananero</option>
                                    <option value="6">RecKrea Studios</option>
                                </select>
                            </div>
                            <label for="categoria">Categoria</label>
                            <div class="form-floating mb-3">
                                <select class="form-select form-select-sm" id="categoria" name="categoria" type="text" required="" aria-label=".form-select-sm example">
                                </select>
                                <input id="imgCat" name="imgCat" type="hidden" required="">
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="dias" name="dias" type="number" placeholder="Ingrese tiempo en dias" required="">
                                <label for="dias">Dias</label>
                            </div>
                                <!--Hacer select Menu -->
                                <input class="form-control" id="url" name="url" type="hidden"placeholder="">
                            <div class="mt-4 mb-0">
                                <div class="d-grid">
                                    <input type="submit" id="btnEnviar" name="btnEnviar" value="Registrar" class="btn btn-primary btn-user btn-block">
                                </div>
                            </div>
                        </form>
                        <span id="mjeAlertaAU">
                            <!-- Mje ajax-->
                        </span>
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
<script src="./ajax/add_proyecto_ajax.js"></script>
<script src="./ajax/list_agrega_proyecto.js"></script>