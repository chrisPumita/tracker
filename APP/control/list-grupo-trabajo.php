<?php
if(isset($_POST['idEmpresa']) && isset($_POST['reqActivos'])){
    $idEmpresa = $_POST['idEmpresa'];
    $reqActivos = $_POST['reqActivos'];
    include_once "./control-listas.php";
    $filtro = $reqActivos=="true" ? true : false;
    echo consultaListasGrupoTrabjo($idEmpresa,$filtro);
} else echo "Datos incompletos";
