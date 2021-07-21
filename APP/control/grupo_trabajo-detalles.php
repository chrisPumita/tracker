<?php
include_once "control_grupo_trabajo.php";
if(isset($_POST['idEmpresa'])){
    $idEmpresa= $_POST['idEmpresa'];
    $result= listDetallesGt($idEmpresa);
    echo $result;
    
}
