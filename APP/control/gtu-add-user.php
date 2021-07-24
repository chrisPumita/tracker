<?php
//IOncluir



if(agregaUsuarioGt($idGt,$idUser))){
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