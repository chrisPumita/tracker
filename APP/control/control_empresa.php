<?php
include_once "../model/EMPRESA.php";
function consultaProyectoEmpresa($id_empresa){
    $obj_empresa =  new EMPRESA();
    $obj_empresa->setIdEmpresa(2525);
    $result= $obj_empresa->getListaProyectos();
    return json_encode($result);

} 

function queryDetallesEmpresa($id_empresa){
    $obj_empresa =  new EMPRESA();
    $obj_empresa->setIdEmpresa(2525);
    $result = $obj_empresa->getDetallesEmpresa();
    return json_encode($result);
}

function createEmpresa($nombre,$razon_social,$rfc,$telefono,$correo){
    $obj_empresa =  new EMPRESA();
    $obj_empresa->setNombre($nombre);
    $obj_empresa->setRazonSocial($razon_social);
    $obj_empresa->setRfc($rfc);
    $obj_empresa->setTelefono($telefono);;
    $obj_empresa->setCorreo("costeña@gmail.com");
    $obj_empresa->setTipoCuenta(1);
    return $result = $obj_empresa->getCrearEmpresa();
}

function updateEmpresa($id_empresa){
    $obj_empresa =  new EMPRESA();
}

function deleteEmpresa($id_empresa){
    /*Use a Update to hide the query, but still in the DB*/
    $obj_empresa =  new EMPRESA();
}