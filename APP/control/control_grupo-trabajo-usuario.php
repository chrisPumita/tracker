<?php
include_once "../model/GRUPO_TRABAJO_USUARIO.php";

function consultaUsuariosGt($idGt){
$obj_GTU = new GRUPO_TRABAJO_USUARIO();
$result = $obj_GTU->queryDetallesGTU($idGt);
return json_encode($result);
}

function agregaUsuarioGt($idGt,$idUser){
    try {
        $obj_GTU = new GRUPO_TRABAJO_USUARIO();
        //Se tiene que instanciar el objeto para el query
       $result = $obj_GTU->queryAddUserToGroup($idGt,$idUser);
       return $result;
    } catch () {
        return false;
    }
}