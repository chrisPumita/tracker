<?php
/*
include "../model/PLAN.php";
$obj = new PLAN();
$result= $obj->consultaPlan(3);
var_dump($result);

*/

/*include_once "control_proyecto.php";
$var = consultaProyecto(4);
var_dump($var);
*/

include_once "./control_grupo-trabajo-usuario.php";

$idUsuario= 32;
echo consultaUsuariosGt($idUsuario);
