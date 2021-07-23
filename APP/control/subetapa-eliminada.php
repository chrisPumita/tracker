<?php
if (isset($_POST['idSEtapa'])){
    $idSubEtapa = $_POST['idSEtapa'];
    include_once "./control_proyecto.php";
    return eliminaSubEtapa($idSubEtapa);
}
else{
    echo "el id no instanciado";
}