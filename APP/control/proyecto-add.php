<?php
if(isset($_POST['nombrep']) && isset($_POST['gt']) && isset($_POST['categoria']) && isset($_POST['dias'])
 && isset($_POST['urlImg'])){
include_once "control_proyecto.php";
$Object = new DateTime();

$DateAndTime = $Object->format("dmhis");
$idGt   =   $_POST['gt'];
$idCategoria =$_POST['categoria'];
$nombre =   $_POST['nombrep'];
$fecha_creacion =   $DateAndTime;
$fecha_inicio   =   $DateAndTime;
$dias   =   $_POST['dias'];
$tipojornada    =   1;
$link   =   "www.google.com";
$urlI   =   $_POST['urlImg'];

$result= createProyecto($idGt,$idCategoria,$nombre,$fecha_creacion,$fecha_inicio,$dias,$tipojornada,$link,$urlI);
if($result){
    echo "Creado exitosamente";
} else echo "Fallo";

} else echo "Los datos estan incompletos";