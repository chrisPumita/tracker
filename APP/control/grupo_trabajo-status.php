<?php

if(isset($_POST['idGt'])&& isset($_POST['status'])){
    $idgt = $_POST['idGt'];
    $status= $_POST['status'];
    include_once "control_grupo_trabajo.php";
    $result = updateStatus($idgt,$status);

    if($result){
        echo "Se ha actualizaco con exito";
    } else echo "Hubo un error";
} else echo "Faltan datos";