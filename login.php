<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/style/style_login.css">
    <title>Hello, world!</title>
</head>
<body>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <div class="row">

        <!-- Mixins-->
        <!-- Pen Title-->
        <div class="pen-title">
            <a href="index.php">
             <img src="./assets/image/logo.png" height="100px" alt="image">
            </a>
        </div>
        <div class="container">
            <div class="card"></div>
            <div class="card">
                <h1 class="title">Inicia Sesión</h1>
                <form action="./APP/view/index.php">
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
                <form>
                    <div class="input-container">
                        <input type="text" id="Username" required="required"/>
                        <label for="Username">Nombre de usuario</label>
                        <div class="bar"></div>
                    </div>
                    <div class="input-container">
                        <input type="email" id="email" required="required"/>
                        <label for="Username">Correo electronico</label>
                        <div class="bar"></div>
                    </div>
                    <div class="input-container">
                        <input type="password" id="Password" required="required"/>
                        <label for="Password">Contraseña</label>
                        <div class="bar"></div>
                    </div>
                    <div class="input-container">
                        <input type="password" id="Repeat Password" required="required"/>
                        <label for="Repeat Password">Confirmar contraseña</label>
                        <div class="bar"></div>
                    </div>
                    <div class="button-container">
                        <button><span>Siguiente</span></button>
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