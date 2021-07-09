<?php
include_once "control_grupo_trabajo.php";
$nombre= "SANSON";
$idEmpresa_Fk =2525;
$fechacreacion = "2010-05-05";
$result = createGrupoTrabajo($nombre,$idEmpresa_Fk,$fechacreacion);

if($result){
    echo "Agregado con exito";
} else echo "Falló";