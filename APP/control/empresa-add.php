<?php


//RECIBIENDO DATOS POR POST



include_once "control_empresa.php";

// $nombre,$razon_social,$rfc,$telefono,$correo
$nombre = "RECKREA";
$razon = "ReCkrea SA de CV";
$rfc = "RCKS5667";
$tel ="6756756567";
$correo = "contacto@algo.com";


if(createEmpresa($nombre,$razon,$rfc,$tel,$correo)){
    echo "SE REGITRO";
}
    else{
        echo "FALLO";
    }