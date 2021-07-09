<?php

include_once "control_grupo_trabajo.php";

$nombre= "Autos Torres";
$status=0;
$idGT =7;
$result=updateGrupoTrabajo($idGT,$nombre,$status);

if($result){
    echo "Actualizado con exito";
}  else echo "Falló";