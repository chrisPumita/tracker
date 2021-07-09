<?php

include_once "control_proyecto.php";

$idProyecto=7;
$result=queryProyecto($idProyecto);
echo $result;