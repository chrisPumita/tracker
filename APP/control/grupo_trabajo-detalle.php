<?php
if(isset($_POST['idGt'])){
    $idGt=$_POST['idGt'];
    include_once "./control_grupo_trabajo.php"; 
    echo $result= consultaGrupoTrabajo($idGt);
}
