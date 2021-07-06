<?php
function consultaProyectoEmpresa($idEmpresa){
    include_once "../model/EMPRESA.php";
    $obj_empresa =  new EMPRESA();
    $obj_empresa->setIdEmpresa(2525);
    $result= $obj_empresa->getListaProyectos();
    return json_encode($result);

}