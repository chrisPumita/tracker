<?php
include_once "control_empresa.php";
$nombre = "McDonals";
$razon = "SA";
$rfc = "MC10290123";
$tel ="3261038648";
$correo = "correoalgo";
$id = 2527;


if(updateEmpresa($id,$nombre,$razon,$rfc,$tel,$correo)){
    echo "SE ACTUALIZO";
}
    else{
        echo "FALLO";
    }