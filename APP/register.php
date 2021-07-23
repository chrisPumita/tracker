<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Tracker | Registrar cuenta</title>
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
</head>
<body class="bg-primary" style="background: url(./assets/img/bgProtect.jpg) top center no-repeat;">
<div id="layoutAuthentication">
    <div id="layoutAuthentication_content">
        <main>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header text-center">
                                <a href="../">
                                    <img src="./assets/img/logo.png" height="120" alt="image">
                                </a>
                                <h3 class="text-center font-weight-light my-4">Crear Nueva Cuenta</h3>
                            </div>
                            <div class="card-body">
                                <form id="frm-add-user">
                                    <input name="idPage" id="idPage" type="hidden" class="form-control form-control-lg" value="2">
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="nombre" name="nombre" type="text" placeholder="Enter your first name" required/>
                                        <label for="nombre">Nombre</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="app" name="app" type="text" placeholder="Enter your last name" required/>
                                        <label for="app">Primer Apellido</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="apm" name="apm" type="text" placeholder="Enter your last name" required/>
                                        <label for="apm">Segundo Apellido</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="user" name="user" type="text" placeholder="Elija un nombre de usuario" required/>
                                        <label for="user">Nombre de Usuario</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="email" name="email" type="email" placeholder="name@example.com" required/>
                                        <label for="email">Correo Electronico</label>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <div class="form-floating mb-3 mb-md-0">
                                                <input class="form-control" id="pw" name="pw" type="password" placeholder="Create a password" autocomplete="none" required />
                                                <label for="pw">Password</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating mb-3 mb-md-0">
                                                <input class="form-control" id="cpw"  name="cpw" type="password" placeholder="Confirm password" autocomplete="none" required />
                                                <label for="pcw">Confirma Password</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <hr>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="empresa" name="empresa" type="text" placeholder="Elija un nombre de empresa" />
                                            <label for="empresa">Nombre de la empresa</label>
                                        </div>
                                    </div>
                                    <div class="mt-4 mb-0">
                                        <div class="d-grid">
                                            <input type="submit" id="btnEnviar" name="btnEnviar" value="Registrarme" class="btn btn-primary btn-user btn-block">
                                        </div>
                                    </div>
                                </form>
                                <span id="mjeAlerta">
                                            <!-- Mje ajax-->
                                </span>
                            </div>

                            <div class="card-footer text-center py-3">
                                <div class="small"><a href="index.php">Ya tengo una cuentta, iniciar sesión</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <div id="layoutAuthentication_footer">
        <?php include_once "./include/footer.php"?>
    </div>
</div>
<?php include_once "./include/js.php"?>
</body>
</html>
<script src="./ajax/create-user-ajax.js"></script>
