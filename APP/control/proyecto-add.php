<?php
if(isset($_POST['nombrep']) && isset($_POST['gt']) && isset($_POST['categoria'])
 && isset($_POST['dias']) && isset($_POST['urlImg']) && isset($_POST['fecha_inicio'])
 && isset($_POST['jornada'])){
include_once "control_proyecto.php";
$idGt   =   $_POST['gt'];
$idCategoria =$_POST['categoria'];
$nombre =   $_POST['nombrep'];
$fecha_inicio   =  $_POST['fecha_inicio'];
$dias   =   $_POST['dias'];
$link   =   "www.google.com";
$tipojornada=   $_POST['jornada'];
$urlI   =   $_POST['urlImg'];

$result= createProyecto($idGt,$idCategoria,$nombre,$fecha_inicio,$dias,$tipojornada,$link,$urlI);
if($result){
    echo "Creado exitosamente";
} else echo "Fallo";

} else echo "Los datos estan incompletos";