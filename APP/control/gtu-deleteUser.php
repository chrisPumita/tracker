<?php
if(isset($_POST['idUserFk']) && isset($_POST['idGpo'])){
    $idUserFk = $_POST['idUserFk'];
    $idGpo = $_POST['idGpo'];
    include_once "./control_grupo-trabajo-usuario.php";
    $result = eliminarUsuartioGT($idUserFk,$idGpo);
    if($result){
        echo "Se ha eliminado con exito";
    } else  echo "Algo ha fallado";
} else echo "Datos incompletos";