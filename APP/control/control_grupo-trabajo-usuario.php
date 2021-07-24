<?php
include_once "../model/GRUPO_TRABAJO_USUARIO.php";

function consultaUsuariosGt($idGt){
$obj_GTU = new GRUPO_TRABAJO_USUARIO();
$result = $obj_GTU->queryDetallesGTU($idGt);
return json_encode($result);
}

function queryAddUserToGroup($idGt,$idUser){
   $obj_GTU = new GRUPO_TRABAJO_USUARIO();
   $obj_GTU->setIdUsuarioFk($idUser);
   $obj_GTU->setIdGtFk($idGt);
   $obj_GTU->setFechaUnion(date("Y-m-d H:i:s"));
   $obj_GTU->setPermisos(0);
   $obj_GTU->setLider(0);
   $obj_GTU->setEstado(1);
   try {
        $result=$obj_GTU->queryAddUserToGroup();  
        return true;
   } catch (\Throwable $th) {
       return false;
   }
   
}


/*try {
    $obj_GTU = new GRUPO_TRABAJO_USUARIO();
    //Se tiene que instanciar el objeto para el query
   $result = $obj_GTU->queryAddUserToGroup($idGt,$idUser);
   return $result;
} catch (exception ) {
    return false;
}*/