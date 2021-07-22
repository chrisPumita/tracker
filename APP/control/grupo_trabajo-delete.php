<?php
if(isset($_POST{'idGt'}))
{
$id=$_POST['idGt'];
include_once "control_grupo_trabajo.php";

$result = deleteGrupoTrabajo($id);
if($result){
    echo "Eliminado con exito";
} else echo "Fallo";

} else echo "Datos incompletos";
