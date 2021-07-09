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
    $result = $obj_empresa->queryDetallesEmpresa($id_empresa);
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
    return $result = $obj_empresa->consultaCrearEmpresa();
}

function updateEmpresa($id,$nombre,$razon_social,$rfc,$telefono,$correo){
    $obj_empresa =  new EMPRESA();
    $obj_empresa->setNombre($nombre);
    $obj_empresa->setRazonSocial($razon_social);
    $obj_empresa->setRfc($rfc);
    $obj_empresa->setTelefono($telefono);
    $obj_empresa->setCorreo($correo);
    return $result=$obj_empresa->DBUpdateEmpresa($id);
    
}

function deleteEmpresa($id_empresa){
    /*Use a Update to hide the query, but still in the DB*/
    $obj_empresa =  new EMPRESA();
    $obj_empresa->setIdEmpresa($id_empresa);
    return $result = $obj_empresa->deleteEmpresa();
}