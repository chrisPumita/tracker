<?php

if(isset($_POST['idGt']) && isset($_POST['nombreGt'])){

    $nombre= $_POST['nombreGt'];
    $idGT = $_POST['idGt'];
    include_once "./control_grupo_trabajo.php";

    $result=updateGrupoTrabajo($idGT,$nombre);
    
    if($result){
         echo "Actualizado con exito";
    }  else   echo "Falló";
} else  echo "Datos incompletos";
