<?php
include_once "control_grupo_trabajo.php";
if(isset($_POST['idEmpresa'])&& isset($_POST['reqActivos'])){
    $idEmpresa= $_POST['idEmpresa'];
    $reqActivos = $_POST['reqActivos'];
    $filtro= $reqActivos== "true" ? true : false;
    $result= listDetallesGt($idEmpresa,$filtro);
    echo $result;
}
