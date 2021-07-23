<?php

include_once "../model/PROYECTO.php";

/*Clases para proyecto en CRUD DB */

function consultaEtapas($idProyecto){
    $obj_pryecto = new  PROYECTO();
    $obj_pryecto->setIdProyecto($idProyecto);
    $listaEtapasDB = $obj_pryecto->getListaEtapas();
    //allgoritmo para agregar nuevo array
    $listaEtapas = array();

    foreach ($listaEtapasDB as $etapa){
        $subEtapas =consultaSubEtapa($etapa["id_etapa"]);
        $infoPortecates = consultaPorcentajes($etapa["id_etapa"]);
        array_push($etapa,$subEtapas);
        array_push($etapa,$infoPortecates);
        array_push($listaEtapas,$etapa);


    }
    return json_encode($listaEtapas);
}

function consultaSubEtapa($idEtapa){
    include_once "../model/SUBETAPAS.php";
    $obj_sub = new SUBETAPAS();
    $obj_sub->setIdEtapaFk($idEtapa);
    return $obj_sub->consultaListaSubetapas();
}

function consultaPorcentajes($idEtapa){
    include_once "../model/ETAPAS.php";
    $obj_sub = new ETAPAS();
    $obj_sub->setIdEtapa($idEtapa);
    return $obj_sub->consultaInfoPorcentajes();
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

function createProyecto($idGt,$idCategoria,$nombre,$fecha_inicio,$dias,$tipojornada,$link,$urlI){
    $obj_proyecto =  new PROYECTO();
    $Object = new DateTime();
    $DateAndTime = $Object->format("dmhis");
    $fecha_hoy  =   date("Y-m-d H:i:s");
    $obj_proyecto->setIdGtFk($idGt);
    $obj_proyecto->setIdCategoriaFk($idCategoria);
    $obj_proyecto->setNombreProyecto($nombre);
    $obj_proyecto->setFechaCreacion($fecha_hoy);
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

/*
 * ETAPAS ACCIONES
 * */
function eliminaEtapa($idEtapa){
    include_once "../model/ETAPAS.php";
    $obj_E = new ETAPAS();
    $mje = $obj_E->eliminaEtapaDB($idEtapa)?"Etapa Eliminada con Exito" :"Error interno al eliminar";
    return $mje;
}







/*
 * SUBETAPAS UPDATE
 * */

function terminaSubEtapa($idSE){
    include_once "../model/SUBETAPAS.php";
    $objSE = new SUBETAPAS();
    $mje = $objSE->terminaSubEtapaDB($idSE)? "Sub etapa terminada con exito": "Error interno al terminar etapa";
    return $mje;
}

/*
 * SUBETAPAS DELETE
 * */

function eliminaSubEtapa($idSE){
    include_once "../model/SUBETAPAS.php";
    $objSE = new SUBETAPAS();
    $mje = $objSE->eliminaSubEtapaDB($idSE)? "Sub etapa eliminada con exito": "Error interno al eliminar etapa";
    return $mje;
}
