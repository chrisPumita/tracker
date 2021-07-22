<?php
if (isset($_POST['idEtapa'])){
    $idEtapa = $_POST['idEtapa'];
    include_once "./control_proyecto.php";
    return eliminaEtapa($idEtapa);
}
else{
    echo "el id no instanciado";
}