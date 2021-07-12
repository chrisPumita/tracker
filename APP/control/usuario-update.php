<?php
include_once "control_usuario.php";
$idUser=5;
$nombre="Fernando";
$ap="Hernandez";
$am="Montes";
$username="FernandoHM798";
$correo="algo@hotmail.com";

$result= updateUser($idUser,$nombre,$ap,$am,$username,$correo);

if($result){
    echo "Actualizado con exito";
} else echo "Fallo";
