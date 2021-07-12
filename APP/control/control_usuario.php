<?php
include_once "../model/USUARIO.php";

function createUser($nombre,$ap,$am,$username,$correo,$password,$idEmpresa){
    $obj_user= new USUARIO();
    $obj_user->setNombre($nombre);
    $obj_user->setApaterno($ap);
    $obj_user->setAmaterno($am);
    $obj_user->setUserName($username);
    $obj_user->setCorreo($correo);
    $obj_user->setPassword(md5($password));
    $obj_user->setNivelAcceso(1);
    $obj_user->setPathImg("https://freepikpsd.com/media/2019/10/no-image-available-icon-png-8-Transparent-Images.png");
    $obj_user->setEstado(1);
    $obj_user->setIdEmpresaFk($idEmpresa);
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