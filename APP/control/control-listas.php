<?php
function consultaListasCategoria(){
    include_once "../model/CATEGORIA.php";
    $obj_cat = new CATEGORIA();
    $result=$obj_cat->consultaCategorias();
    return json_encode($result);
}