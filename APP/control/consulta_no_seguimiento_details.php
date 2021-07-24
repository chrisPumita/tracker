<?php
if (isset($_POST['noSeguimiento'])){
    include "./control_proyecto.php";
    $noSeguimiento = $_POST['noSeguimiento'];
    echo consultaPublicaProyectoDetalles($noSeguimiento);
}