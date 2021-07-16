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
                <h1 class="mt-4">Registra Usuarios</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Aqui puede agregar nuevos usuarios.</li>
                </ol>
                <div class="card mb-4">
                    <div class="card-header">
                        <svg class="svg-inline--fa fa-table fa-w-16 me-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="table" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M464 32H48C21.49 32 0 53.49 0 80v352c0 26.51 21.49 48 48 48h416c26.51 0 48-21.49 48-48V80c0-26.51-21.49-48-48-48zM224 416H64v-96h160v96zm0-160H64v-96h160v96zm224 160H288v-96h160v96zm0-160H288v-96h160v96z"></path></svg><!-- <i class="fas fa-table me-1"></i> Font Awesome fontawesome.com -->
                        Agrega Usuario Nuevo
                    </div>
                    <div class="card-body">
                        <form id="frm-add-new-user">
                            <div class="form-floating mb-3">
                                <input class="form-control" id="nombre" name="nombre" type="text" placeholder="Enter your first name" required="">
                                <label for="nombre">Nombre</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="app" name="app" type="text" placeholder="Enter your last name" required="">
                                <label for="app">Primer Apellido</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="apm" name="apm" type="text" placeholder="Enter your last name" required="">
                                <label for="apm">Segundo Apellido</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="user" name="user" type="text" placeholder="Elija un nombre de usuario" required="">
                                <label for="user">Nombre de Usuario</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="email" name="email" type="email" placeholder="name@example.com" required="">
                                <label for="email">Correo Electronico</label>
                            </div>
                            <label for="nivelAcceso">Nivel Acceso</label>
                            <div class="form-floating mb-0">
                                <select class="form-select form-select-sm" id="nivelAcceso" name="nivelAcceso" type="text" required="" aria-label=".form-select-sm example">
                                    <option selected>----  SELECCIONA  ----</option>
                                    <option value="0">ADMINISTRADOR</option>
                                    <option value="1">EDITOR</option>
                                    <option value="2">LECTOR</option>
                                </select>
                            </div>
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
<script src="./ajax/add_user_ajax.js"></script>