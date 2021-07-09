<?php
include_once "control_empresa.php";

$idEmpresa =2530;

if(deleteEmpresa($idEmpresa)){
    echo "Delete successful";
} else echo "Something is wrong";