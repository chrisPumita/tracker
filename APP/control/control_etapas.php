<?php
include_once "../model/ETAPAS.php";

function addEtapa($nombre,$dias,$fecha_inicio,$idProyecto,$indice){
    $obj_Etapa = new ETAPAS();
    $obj_Etapa->setNombreEtapa($nombre);
    $obj_Etapa->setDias($dias);
    $obj_Etapa->setFechaCreacion(date("Y-m-d H:i:s"));
    $obj_Etapa->setEstadoProceso(0);
    $obj_Etapa->setFechaInicio($fecha_inicio);
    $obj_Etapa->setIdProyectoFk($idProyecto);
    $obj_Etapa->setIndice($indice);
    $result = $obj_Etapa->createEtapa();
    return $result;
}