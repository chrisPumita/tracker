<?php
if (isset($_POST['idProyecto'])){
    include_once "./control_proyecto.php";
    $idProyecto = $_POST['idProyecto'];
    echo(queryProyecto($idProyecto));
}   