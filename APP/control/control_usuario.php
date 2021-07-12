<?php
include_once "../model/USUARIO.php";

function createUser($idempresafk,$nombre,$ap,$am,$username,$correo,$password,$nivel,$pathImg,$estado){
    $obj_user= new USUARIO();
    $obj_user->setIdEmpresaFk($idempresafk);
    $obj_user->setNombre($nombre);
    $obj_user->setApaterno($ap);
    $obj_user->setAmaterno($am);
    $obj_user->setUserName($username);
    $obj_user->setCorreo($correo);
    $obj_user->setPassword($password);
    $obj_user->setNivelAcceso($nivel);
    $obj_user->setPathImg($pathImg);
    $obj_user->setEstado($estado);
    $result = $obj_user->queryCreateUser();
    return $result;
}

function updateUser($idUser,$nombre,$ap,$am,$username,$correo){
    $obj_user= new USUARIO();
    $obj_user->setNombre($nombre);
    $obj_user->setApaterno($ap);
    $obj_user->setAmaterno($am);
    $obj_user->setUserName($username);
    $obj_user->setCorreo($correo);
    $result= $obj_user->queryUpdateUser($idUser);
    return $result;
}

function detalleUser($idUser){
    $obj_user= new USUARIO();
    $result = $obj_user->queryDetalleUser($idUser);
    return json_encode($result);
}

function deleteUser($idUser){
    $obj_user= new USUARIO();
    $result = $obj_user->queryDeleteUser($idUser);
    return $result;
}