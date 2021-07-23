<?php
if(isset($_POST['idProyecto'])){
$id= $_POST['idProyecto'];
include_once "./control_proyecto.php";
return deleteProyecto($id);
} else echo "el id no instanciado";