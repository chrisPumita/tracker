<?php
include_once "control_empresa.php";
$id= 2527;
$result= queryDetallesEmpresa($id);
echo $result;