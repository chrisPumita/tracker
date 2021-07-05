<?php

function consultaEtapas($idProyecto){
    include_once "../model/PROYECTO.php";
    $obj_pryecto = new  PROYECTO();
    $obj_pryecto->setIdProyecto($idProyecto);
    $result = $obj_pryecto->getListaEtapas();
    return json_encode($result);
}

function consultaProyecto($idProyecto){
    include_once "../model/PROYECTO.php";
    $obj_proyecto =  new PROYECTO();
    $obj_proyecto->setIdProyecto(4);
    $result= $obj_proyecto->getListaProyecto();
    return json_encode($result);

}
function actualizaProyecto(){

}
function eliminaProyecto(){

}