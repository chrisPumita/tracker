<?php
if (isset($_POST['idEmpresa'])){
    include_once "./control_proyecto.php";
    $idEmpresa = $_POST['idEmpresa'];
    echo(queryProyectos($idEmpresa));
}   