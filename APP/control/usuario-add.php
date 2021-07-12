<?php

include_once "control_usuario.php";

$idempresafk=2525;
$nombre="Ruben";
$ap="Martinez";
$am="Mendoza";
$username="RubenM901";
$correo="ruben@gmail.com";
$password="1234";
$nivel=2;
$pathImg="image.png";
$estado=1;

$result = createUser($idempresafk,$nombre,$ap,$am,$username,$correo,$password,$nivel,$pathImg,$estado);

if($result){
    echo "Creado con exito";
} else echo "Fallo";