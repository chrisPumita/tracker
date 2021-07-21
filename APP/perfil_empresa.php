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
                <h1 class="mt-4">¿Desea realizar algun cambio?</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Informacion de la empresa.</li>
                </ol>
                <div class="card mb-4">
                    <div class="card-header">
                        <svg class="svg-inline--fa fa-table fa-w-16 me-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="table" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M464 32H48C21.49 32 0 53.49 0 80v352c0 26.51 21.49 48 48 48h416c26.51 0 48-21.49 48-48V80c0-26.51-21.49-48-48-48zM224 416H64v-96h160v96zm0-160H64v-96h160v96zm224 160H288v-96h160v96zm0-160H288v-96h160v96z"></path></svg><!-- <i class="fas fa-table me-1"></i> Font Awesome fontawesome.com -->
                        Empresa.
                    </div>
                                            <div class="col">
                                                <div class="row justify-content-center">
                                                    <div class="col-xl-8 col-md-8"> <br>

                                                                <form class="form-floating pb-4">
                                                                  <input type="text" class="form-control" id="floatingInputValue" placeholder="name@example.com" value="Proyect Tracker">
                                                                  <label for="floatingInputValue">Nombre de la empresa</label>
                                                                </form>

                                                                <form class="form-floating pb-4">
                                                                  <input type="text" class="form-control" id="floatingInputValue" placeholder="name@example.com" value="Proyect Tracker SA de CV">
                                                                  <label for="floatingInputValue">Razon social</label>
                                                                </form>
                                                            
                                                               <form class="form-floating pb-4">
                                                                  <input type="text" class="form-control" id="floatingInputValue" placeholder="name@example.com" value="PTR-210515">
                                                                  <label for="floatingInputValue">RFC</label>
                                                                </form>

                                                                <form class="form-floating pb-4">
                                                                  <input type="text" class="form-control" id="floatingInputValue" placeholder="name@example.com" value="5530180232">
                                                                  <label for="floatingInputValue">Telefono</label>
                                                                </form>

                                                                <form class="form-floating pb-3">
                                                                  <input type="text" class="form-control" id="floatingInputValue" placeholder="name@example.com" value="proyectracker@gmail.com">
                                                                  <label for="floatingInputValue">Correo electronico</label>
                                                                </form>

                                                                <label for="nivelAcceso">Cuenta</label>
                                                                    <div class="form-floating mb-0">
                                                                        <select class="form-select form-select-sm" id="nivelAcceso" name="nivelAcceso" type="text" required="" aria-label=".form-select-sm example">
                                                                            <option selected>----  SELECCIONA  ----</option>
                                                                            <option value="0">PRUEBA GRATIS</option>
                                                                            <option value="1">PROTRACKER</option>
                                                                            <option value="2">PLAN PREMIUM</option>
                                                                        </select>
                                                                    </div> 
                                                                <div class="mt-4 mb-0">
                                                                     <div class="d-grid">    
                                                                        <button type="button" class="btn btn-outline-primary mb-3">Guardar cambios</button>
                                                                    </div>
                                                                </div>

                                                                <!-- Button trigger modal -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                    </section>
            <!-- incuir los elementos del la vista para cada cosa-->
        </main>
<?php include_once "./include/footer.php"?>
    </div>
</div>

<?php include_once "./include/js.php"?>
</body>
</html>