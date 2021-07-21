<?php
if (isset($_POST['nombre']) && isset($_POST['dias']) && isset($_POST['fecha_inicio'])
    && isset($_POST['idProyecto'])){

    

        include_once "./control_etapas.php";
        $nombre = $_POST['nombre'];
        $dias = $_POST['dias'];
        $fecha_creacion = $_POST['fecha_inicio'];
        $idProyecto = $_POST['idProyecto'];
        $indice =$_POST['indice'];

        $result = addEtapa($nombre,$dias,$fecha_creacion,$idProyecto,$indice);

        if ($result) {
            echo "Se ha agregado la etapa de forma exitosa";
        } else echo "Fallo";

} else {
    echo "Los datos estan incompletos";
}
