<?php
include_once "../model/SUBETAPAS.php";

function addSubEtapa($nombre,$dias,$fecha_inicio,$idEtapa,$indice){
    $obj_Etapa = new SUBETAPAS();
    $obj_Etapa->setNombreSubetapa($nombre);
    $obj_Etapa->setDias($dias);
    //$obj_Etapa->setFechaCreacion(date("Y-m-d H:i:s"));
    $obj_Etapa->setEstado(0);
    $obj_Etapa->setFechaInicio($fecha_inicio);
    $obj_Etapa->setIdEtapaFk($idEtapa);
    $obj_Etapa->setIndice($indice);
    $result = $obj_Etapa->createSubEtapa();
    return $result;
}