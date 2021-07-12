<?php

include_once "control_usuario.php";

$idUser=5;
$result=deleteUser($idUser);

if($result){
    echo "Desactivado con exito";
} else echo "Fallo";