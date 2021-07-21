<?php
if (isset($_POST['nombre']) && isset($_POST['dias']) && isset($_POST['fecha_inicio'])
    && isset($_POST['idEtapa'])){
        $nombre = $_POST['nombre'];
        $dias = $_POST['dias'];
        $fecha_inicio = $_POST['fecha_inicio'];
        $idEtapa = $_POST['idEtapa'];
        $indice =$_POST['indice'];
        include_once "./control_subetapas.php";

        $result = addSubEtapa($nombre,$dias,$fecha_inicio,$idEtapa,$indice);

        if ($result) {
            echo "Se ha agregado la etapa de forma exitosa";
        } else echo "Fallo";

} else {
    echo "Los datos estan incompletos";
}
