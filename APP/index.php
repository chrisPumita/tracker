<?php $plantilla = "Plantilla"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once "./include/header.php"?>
    <title>Formulario Registro</title>
</head>
<body class="sb-nav-fixed">

<?php include_once "./include/navbar.php"?>

<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <?php include_once "./include/sidenav.php"?>
    </div>
    <div id="layoutSidenav_content">
        <main>
             <link rel="stylesheet" href="style_empresa.css">
            <!-- incuir los elementos del la vista para cada cosa-->
            <section class="form-register">

                <h4>Formulario Registro</h4>

                <input class="controls" type="text" name="nombre" id="nombre" placeholder="Ingrese nombre de la empresa">
                <input class="controls" type="text" name="razonsocial" id="razonsocial" placeholder="Ingrese razon social de la empresa">
                <input class="controls" type="text" name="rfc" id="rfc" placeholder="Ingrese RFC de la empresa">
                <input class="controls" type="text" name="telefono" id="telefono" placeholder="Ingrese telefono de la empresa">
                <input class="controls" type="email" name="correo" id="correo" placeholder="Ingrese correo de la empresa">
                <p>Estoy deacuerdo con <a href="#">Terminos y condiciones </a></p>
                <imput class="botons" type="submit" value="Registrar">
                <p><a href="#">¿Ya tengo cuenta?</a></p>

            </section>
        </main>
        <?php include_once "./include/footer.php"?>
    </div>
</div>

<?php include_once "./include/js.php"?>
</body>
</html>
