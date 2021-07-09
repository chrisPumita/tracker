<?php

include_once "control_proyecto.php";

$idGt=3;
$idCategoria=1;
$nombre="SANSON";
$fecha_creacion="2019-12-10";
$fecha_inicio="2019-12-10";
$dias=120;
$tipojornada=1;
$link="proyectracker.com/test";
$urlI="image1.jpg";

$result= createProyecto($idGt,$idCategoria,$nombre,$fecha_creacion,$fecha_inicio,$dias,$tipojornada,$link,$urlI);
if($result){
    echo "Creado exitosamente";
} else echo "Fallo";