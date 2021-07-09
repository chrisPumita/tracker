<?php

include_once "control_proyecto.php";

$idProyecto=4;
$idCategoria=3;
$nombre="TESTER";
$dias=120;
$jornada=2;
$status=1;

$result=updateProyecto($idProyecto,$idCategoria,$nombre,$dias,$jornada,$status);
if($result){
    echo "Actualizado con exito";
}else echo "Faló";