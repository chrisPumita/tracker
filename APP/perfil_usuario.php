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
                    <section class="pt-5 pb-5" style="">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <div class="">
                                        <div class="row text-center justify-content-center">
                                            <div class="col-12 col-md-9 col-lg-7 aos-init" data-aos="fade-up">
                                                <h3 class="mb-0 display-4 font-weight-bold">¿Algún cambio Luis Fernando?</h3>
                                            </div>
                                        </div>
                                        <div class="row d-flex justify-content-between pt-5 align-items-center">
                                            <div class="col-xl-5 col-lg-6 col-md-7 text-center mb-5 mb-lg-0">
                                                <div class="container-fluid align-items-center">
                                                    <img alt="image" class="img-fluid text-center m-4" data-aos-offset="300" src="./assets/img/Obi.jpg">
                                                </div>
                                                <p>Luis Fernando Obi</p>
                                            </div>
                                            <div class="col">
                                                <div class="row justify-content-center">
                                                    <div class="col-xl-8 col-md-8">
                                                        <h3 class="mb-3">Informacion personal</h3>
                                                    

                                                                <form class="form-floating pb-4">
                                                                  <input type="text" class="form-control" id="floatingInputValue" placeholder="name@example.com" value="Luis Fernando">
                                                                  <label for="floatingInputValue">Nombre</label>
                                                                </form>
                                                            
                                                            
                                                               <form class="form-floating pb-4">
                                                                  <input type="text" class="form-control" id="floatingInputValue" placeholder="name@example.com" value="Hernández Ledezma">
                                                                  <label for="floatingInputValue">Apellidos</label>
                                                                </form>
                                                                <form class="form-floating pb-3">
                                                                  <input type="text" class="form-control" id="floatingInputValue" placeholder="name@example.com" value="Fernando@gmail.com">
                                                                  <label for="floatingInputValue">Correo electronico</label>
                                                                </form>
                                                                <div>
                                                                  <fieldset disabled>
                                                                    <div class="mb-3">
                                                                      <label for="disabledTextInput" class="form-label">Nombre de usuario</label>
                                                                      <input type="text" id="disabledTextInput" class="form-control" placeholder="Fernando_Lol">
                                                                    </div>
                                                                </div>
                                                                <div>
                                                                  <fieldset disabled>
                                                                    <div class="mb-3">
                                                                      <label for="disabledTextInput" class="form-label">Tipo de usuario</label>
                                                                      <input type="text" id="disabledTextInput" class="form-control" placeholder="Administrador">
                                                                    </div>
                                                                </div>
                                                                <button type="button" class="btn btn-outline-primary mb-3">Guardar cambios</button>
                                                                <div>
                                                                  <fieldset disabled>
                                                                    <legend>Contraseña</legend>
                                                                    <div class="mb-3">
                                                                      <label for="disabledTextInput" class="form-label">Contraseña actual</label>
                                                                      <input type="text" id="disabledTextInput" class="form-control" placeholder="******">
                                                                    </div>
                                                                </div>
                                                                <!-- Button trigger modal -->
                                                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                                                Cambiar contraseña
                                                                </button>
                                                                <!-- Modal -->
                                                                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                                    <div class="modal-dialog">
                                                                        <div class="modal-content">
                                                                          <div class="modal-header">
                                                                            <h5 class="modal-title" id="staticBackdropLabel">Cambio de contraseña</h5>
                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                          </div>
                                                                          
                                                                          <div class="modal-body">
                                                                            <div><p>Escriba su nueva contraseña</p></div>
                                                                            <div class="form-floating mb-3">
                                                                              <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                                                                              <label for="floatingPassword">Contraseña nueva</label>
                                                                            </div>
                                                                            <div class="form-floating mb-3">
                                                                              <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                                                                              <label for="floatingPassword">Confirmar contraseña nueva</label>
                                                                            </div>
                                                                            <div><p>Confirme su contraseña actual</p></div>
                                                                            <div class="form-floating mb-3">
                                                                              <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                                                                              <label for="floatingPassword">Contraseña</label>
                                                                            </div>   
                                                                          </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                                                    <button type="button" class="btn btn-primary">Guardar</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
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
