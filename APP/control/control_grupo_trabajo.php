<?php
include_once "../model/GRUPO_TRABAJO.php";


function consultaGrupoTrabajo($idGt){
    $obj_gt = new GRUPO_TRABAJO;
    $obj_gt->setIdGt($idGt);
    $result = $obj_gt->getDetallesGrupo();
    return json_encode($result);
}

function createGrupoTrabajo($nombre,$idEmpresaFk,$fechaCreacion){
    $obj_gt = new GRUPO_TRABAJO;
    $obj_gt = new GRUPO_TRABAJO();
    $obj_gt->setIdEmpresaFk($idEmpresaFk);
    $obj_gt->setNombreGt($nombre);
    $obj_gt->setFechaCreacion($fechaCreacion);
    $obj_gt->setStatus(1);
    $result = $obj_gt->queryCreateGT();
    return $result;      
}

function updateGrupoTrabajo($idGt,$nombre,$status){
    $obj_gt = new GRUPO_TRABAJO;
    $obj_gt->setNombreGt($nombre);
    $obj_gt->setStatus($status);
    $result = $obj_gt->queryUpdateGT($idGt);
    return $result;
}

function deleteGrupoTrabjo($idGt){
    $obj_gt = new GRUPO_TRABAJO();
    $result= $obj_gt->queryDeleteGT($idGt);
}