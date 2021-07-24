<?php

include_once "./control_grupo-trabajo-usuario.php";
if(isset($_POST['idEmpresa'])){
    $idEmpresa= $_POST['idEmpresa'];
    echo consultaUsuariosGt($idEmpresa);
    
}
