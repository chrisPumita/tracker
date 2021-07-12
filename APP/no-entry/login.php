<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../../assets/style/style_login.css">
    <title>Hello, world!</title>
</head>
<body>


<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <div class="row">

        <!-- Mixins-->
        <!-- Pen Title-->
        <div class="pen-title">
            <a href="../../index.php">
             <img src="../../assets/image/logo.png" height="100px" alt="image">
            </a>
        </div>
        <div class="container">
            <div class="card"></div>
            <div class="card">
                <h1 class="title">Inicia Sesión</h1>
                <form id="frm-login">
                    <div class="input-container">
                        <input type="text" id="Username" required="required"/>
                        <label for="Username">Nombre de usuario</label>
                        <div class="bar"></div>
                    </div>
                    <div class="input-container">
                        <input type="password" id="Password" required="required"/>
                        <label for="Password">Contraseña</label>
                        <div class="bar"></div>
                    </div>
                    <div class="button-container">
                        <button type="submit"><span>Ingresar</span></button>
                    </div>
                    <div class="footer"><a href="#">¿Olvidaste tu contraseña?</a></div>
                </form>
            </div>
            <div class="card alt">
                <div class="toggle"></div>
                <h1 class="title">Registrate
                    <div class="close"></div>
                </h1>
                <form id="frm-add-user">
                    <div class="input-container">
                        <input type="text" id="nombre" name="nombre" required="required"/>
                        <label for="Username">Nombre de usuario</label>
                        <div class="bar"></div>
                    </div>
                    <div class="input-container">
                        <input type="text" id="apaterno" name="apaterno" required="required"/>
                        <label for="Username">Primer Apellido</label>
                        <div class="bar"></div>
                    </div>
                    <div class="input-container">
                        <input type="text" id="amaterno" name="amaterno" required="required"/>
                        <label for="Username">Segundo Apellido</label>
                        <div class="bar"></div>
                    </div>
                    <div class="input-container">
                        <input type="email" id="email" name="email" required="required"/>
                        <label for="Username">Correo electronico</label>
                        <div class="bar"></div>
                    </div>
                    <div class="input-container">
                        <input type="password" id="pw" name="pw" required="required"/>
                        <label for="Password">Contraseña</label>
                        <div class="bar"></div>
                    </div>
                    <div class="input-container">
                        <input type="password" id="rpw" name="rpw" required="required"/>
                        <label for="Repeat Password">Confirmar contraseña</label>
                        <div class="bar"></div>
                    </div>
                    <div class="button-container">
                        <input type="submit" class="btn btn-primary btn-submit" value="Crear Cuenta">
                    </div>
                </form>
            </div>
        </div>
 </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script src="../ajax/add_user_ajax.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script>
    $(document).ready(function(){
        $('.toggle').on('click', function() {
            $('.container').stop().addClass('active');
        });

        $('.close').on('click', function() {
            $('.container').stop().removeClass('active');
        });

    });
</script>



</body>
</html>