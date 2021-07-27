<?php
include_once "../model/GRUPO_TRABAJO.php";


function consultaGrupoTrabajo($idGt){
    $obj_gt = new GRUPO_TRABAJO;
    $result = $obj_gt->queryDetallesGrupo($idGt);
    return json_encode($result);
}

function createGrupoTrabajo($nombre,$idEmpresaFk){
    $obj_gt = new GRUPO_TRABAJO;
    $obj_gt->setIdEmpresaFk($idEmpresaFk);
    $obj_gt->setNombreGt($nombre);
    $obj_gt->setFechaCreacion(date("Y-m-d H:i:s"));
    $obj_gt->setStatus(1);
    $result = $obj_gt->queryCreateGT();
    return $result;      
}

function updateGrupoTrabajo($idGt,$nombre){
    $obj_gt = new GRUPO_TRABAJO;
    $obj_gt->setNombreGt($nombre);
    $result = $obj_gt->queryUpdateGT($idGt);
    return $result;
}

function deleteGrupoTrabajo($idGt){
    $obj_gt = new GRUPO_TRABAJO();
    $result= $obj_gt->queryDeleteGT($idGt);
    return $result;
}

function listDetallesGt($idEmpresa,$reqActivos){
    $obj_gt = new GRUPO_TRABAJO();
    $result = $obj_gt->queryListDetallesGrupo($idEmpresa,$reqActivos);
    return json_encode($result);
}

function updateStatus($idgt,$status){
    $obj_gt = new GRUPO_TRABAJO();
    if ($status == 1) { 
        $obj_gt->setStatus(0);
    } else  $obj_gt->setStatus(1);

    $result= $obj_gt->queryUpdateStatus($idgt);
    return $result;
}