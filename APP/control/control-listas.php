<?php
function consultaListasCategoria(){
    include_once "../model/CATEGORIA.php";
    $obj_cat = new CATEGORIA();
    $result=$obj_cat->consultaCategorias();
    return json_encode($result);
}

function consultaListasGrupoTrabjo(){
    include_once "../model/GRUPO_TRABAJO.php";
    $obj_gt= new GRUPO_TRABAJO();
    $result=$obj_gt->queryListDetallesGrupo();
    return json_encode($result);
}