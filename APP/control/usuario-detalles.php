<?php
if(isset($_POST['idUser'])){

    $idUser= $_POST['idUser'];
    include_once "./control_usuario.php";
    $result = detalleUser($idUser);
    echo $result;
} else echo "datos incompletos";
