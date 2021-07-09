<?php

include_once "control_grupo_trabajo.php";

$id=7;
$result = deleteGrupoTrabajo($id);

if($result){
    echo "Eiminado con exito";
} else echo "Fallo";