<?php
if (isset($_POST['idProyecto'])
    && isset($_POST['key'])
    && isset($_POST['idEmpresa']))
{
    include_once "./control_proyecto.php";
    $idProyecto = $_POST['idProyecto'];
    $key = $_POST['key'];
    $idEmpresa = $_POST['idEmpresa'];
    echo(queryProyecto($idProyecto, $key,$idEmpresa));
}   