<?php
if (isset($_POST['name']) ||
    isset($_POST['email']) ||
    isset($_POST['comentario']) ||
    isset($_POST['telefono']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $empresa = $_POST['empresa'];
    $telefono = $_POST['telefono'];
    $comentario = $_POST['comentario'];
    include_once "./enviaMail.php";
    if(enviaCorreoContacto($name,$email,$empresa,$telefono,$comentario))
        echo "Hemos recibido sus datos, en breve uno de nuestros agentes se pondrá en contacto con usted al correo ".$email;
    else
        echo "Ocurrio un error interno en el servidod.<br> Vuelva a intentarlo";
}
else{
    echo "Los datos no estan completos. Intentelo de nuevo";
}





