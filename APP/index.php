<?php
//abrir  la sesion
session_start();
$inactividad = 900;
// Comprobar si $_SESSION["timeout"] está establecida
if(isset($_SESSION["timeout"])){
    // Calcular el tiempo de vida de la sesión (TTL = Time To Live)
    $sessionTTL = time() - $_SESSION["timeout"];
    if($sessionTTL > $inactividad){
        session_destroy();
        header("Location: ./control/c_logout.php");
    }
}
// El siguiente key se crea cuando se inicia sesión
$_SESSION["timeout"] = time();
if(isset($_SESSION['usuario']) && $_SESSION['sessionSuccess'])
{
    //Si ya existe una sesion reedirecciona a home
    header('Location: ./home.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Login - Proyect Tracker</title>
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
</head>
<body class="bg-primary" style="background: url(./assets/img/bgProtect.jpg) top center no-repeat;">
<div id="layoutAuthentication">
    <div id="layoutAuthentication_content">
        <main>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header text-center">
                                <a href="../">
                                    <img src="./assets/img/logo.png" height="120" alt="image">
                                </a>
                                <h6 class="text-center font-weight-light my-4">Bienvenido</h6>
                                <h3 class="text-center font-weight-light my-4">Iniciar Sesión</h3>
                            </div>
                            <div class="card-body">
                                <form id="frm-login">
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="email" name="email" type="email" placeholder="name@example.com" />
                                        <label for="inputEmail">Correo Electronico</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" name = "pw" id="pw" type="password" placeholder="Password" />
                                        <label for="inputPassword">Password</label>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mt-4 mb-0 text-center">
                                       <!-- <a class="small" href="password.html">Forgot Password?</a>-->
                                        <input type="submit" id="btnEnviar" name="btnEnviar" value="Iniciar Sesion" class="btn btn-primary btn-user btn-block w-100">
                                    </div>
                                </form>
                            </div>
                            <span id="mensaje"></span>
                            <div class="card-footer text-center py-3">
                                <div class="small"><a href="register.php">¿Necesitas una cuenta? Registrate gratis!</a></div>
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

<?php include "./include/js.php"?>
<script src="./ajax/login_ajax.js"></script>
<script>
    txtUser.focus();
</script>
</body>
</html>
