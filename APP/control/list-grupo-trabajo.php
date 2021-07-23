<?php
if(isset($_POST['idEmpresa'])){
    $idEmpresa = $_POST['idEmpresa'];
    include_once "./control-listas.php";
    
    echo consultaListasGrupoTrabjo($idEmpresa);
}
