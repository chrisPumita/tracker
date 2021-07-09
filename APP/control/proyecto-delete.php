<?php

include_once "control_proyecto.php";

$id =4;
$result=deleteProyecto($id);

if($result){
    echo "Se ha eliminado exitosamente";
}   else    echo "Falló";