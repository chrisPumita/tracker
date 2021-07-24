<?php

include_once "./control_grupo-trabajo-usuario.php";
if(isset($_POST['idGt'])){
    $idGt= $_POST['idGt'];
    echo consultaUsuariosGt($idGt);
    
}
