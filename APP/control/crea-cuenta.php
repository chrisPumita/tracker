<?php
if (isset($_POST['nombre']) && isset($_POST['app']) && isset($_POST['apm'])
    && isset($_POST['user']) && isset($_POST['correo']) && isset($_POST['pw']) &&
    isset($_POST['cpw'])) {

    if ($_POST['pw'] == $_POST['cpw']) {

        include_once "./control_registro.php";
        $empresapost = $_POST['empresa'];
        $nombre = $_POST['nombre'];
        $ap = $_POST['app'];
        $am = $_POST['apm'];
        $username = $_POST['user'];
        $correo = $_POST['correo'];
        $password = $_POST['pw'];
        $empresaName = $empresapost != "" ? $empresapost : "$nombre $ap $am";

        $result = registraCuenta($nombre, $ap, $am, $username, $correo, $password, $empresaName);

        if ($result) {
            echo "Se ha creado tu cuenta de forma exitosa";
        } else echo "Fallo";
    } else {
        echo "Las contraseñas no son iguales";
    }

} else {
    echo "Los datos estan incompletos";
}

/*

*/