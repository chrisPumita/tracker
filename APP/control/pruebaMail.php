<?php
include_once "./pruebaMain.php";

if(enviaCorreo("Fernando","fernandohlqwe@gmail.com")){
    echo "SE ENVIO EL CORREO";
} else echo "Error al enviar";