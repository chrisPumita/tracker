<?php
if (isset($_POST['nombre']) && isset($_POST['app']) && isset($_POST['apm'])
    && isset($_POST['user']) && isset($_POST['correo']) && isset($_POST['nivelacceso']) && isset($_POST['idEmpresa'])) {
        include_once "./control_usuario.php";
        $nombre = $_POST['nombre'];
        $ap = $_POST['app'];
        $am = $_POST['apm'];
        $username = $_POST['user'];
        $correo = $_POST['correo'];
        $nivelAcceso=$_POST['nivelacceso'];
        $idEmpresa=$_POST['idEmpresa'];

        $result = addUser($nombre,$ap,$am,$username,$correo,$idEmpresa,$nivelAcceso);

        if ($result) {
            echo "Se ha agregado tu cuenta de forma exitosa. <br> Tambien hemos enviado un correo a <strong> ". $correo." </strong> con 
            su <strong> clave de acceso temporal </strong> para que este ". $nombre." ". $ap ." ". $am ." pueda inicar sesión.";
        } else echo "Fallo";

} else {
    echo "Los datos estan incompletos";
}

