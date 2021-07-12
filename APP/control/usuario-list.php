<?php
if (isset($_POST['idEmpresa']) && isset($_POST['idUser'])){
    include_once "./control_usuario.php";
    $idEmpresa = $_POST['idEmpresa'];
    $idUser = $_POST['idUser'];
    echo(consultaUsuarios($idUser,$idEmpresa));
}