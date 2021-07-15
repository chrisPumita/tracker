<?php

include_once "../model/PROYECTO.php";

/*Clases para proyecto en CRUD DB */

function consultaEtapas($idProyecto){
    $obj_pryecto = new  PROYECTO();
    $obj_pryecto->setIdProyecto($idProyecto);
    $result = $obj_pryecto->getListaEtapas();
    return json_encode($result);
}

function queryProyecto($idProyecto){
    $obj_proyecto =  new PROYECTO();
    $result= $obj_proyecto->queryDetallesProyecto($idProyecto);
    return json_encode($result);

}
function updateProyecto($idProyecto,$idCategoria,$nombre,$dias,$jornada,$status){
    $obj_proyecto =  new PROYECTO();
    $obj_proyecto->setIdCategoriaFk($idCategoria);
    $obj_proyecto->setNombreProyecto($nombre);
    $obj_proyecto->setDias($dias);
    $obj_proyecto->setTipoJornada($jornada);
    $obj_proyecto->setEstado($status);
    $result = $obj_proyecto->queryUpdateProyecto($idProyecto);
    return $result;
}

function deleteProyecto($idProyecto){
    $obj_proyecto =  new PROYECTO();
    $result = $obj_proyecto->queryDeleteProyecto($idProyecto);
    return $result;
}

function createProyecto($idGt,$idCategoria,$nombre,$fecha_creacion,$fecha_inicio,$dias,$tipojornada,$link,$urlI){
    $obj_proyecto =  new PROYECTO();
    $obj_proyecto->setIdGtFk($idGt);
    $obj_proyecto->setIdCategoriaFk($idCategoria);
    $obj_proyecto->setNombreProyecto($nombre);
    $obj_proyecto->setFechaCreacion($fecha_creacion);
    $obj_proyecto->setFechaInicio($fecha_inicio);
    $obj_proyecto->setDias($dias);
    $obj_proyecto->setTipoJornada($tipojornada);
    $obj_proyecto->setEstado(1);
    $obj_proyecto->setLink($link);
    $obj_proyecto->setUrlImagen($urlI);
    $result = $obj_proyecto->queryCreateProyecto();
    return $result;
}

function queryProyectos($idEmpresa){
    $obj_proyecto = new PROYECTO();
    $result = $obj_proyecto->queryDetallesProyectos($idEmpresa);
    return json_encode($result);
}