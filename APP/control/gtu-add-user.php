<?php

if(isset($_POST['idUser'])&& isset($_POST['idGt']))
$idGt= $_POST['idGt'];
$idUser =$_POST['idUser'];
include_once "./control_grupo-trabajo-usuario.php";

if(queryAddUserToGroup($idGt,$idUser)){
    $mje = array(
        "mjeType" => "1",
        "mensaje" => "Se ha agregado con exito"
    );
}
else{
    $mje = array(
        "mjeType" => "0",
        "mensaje" => "Este usuario ya esta dentro de este grupo de trabajo"
    );
}
echo json_encode($mje);