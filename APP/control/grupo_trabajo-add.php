<?php
if(isset($_POST['nombre'])&& isset($_POST['idEmpresa'])){
    $nombre= $_POST['nombre'];
    $idEmpresa_Fk =$_POST['idEmpresa'];
    include_once "./control_grupo_trabajo.php";
    if(createGrupoTrabajo($nombre,$idEmpresa_Fk)){
        echo "Se ha creado correctamente";
    }
} else echo "Datos incompletos";
