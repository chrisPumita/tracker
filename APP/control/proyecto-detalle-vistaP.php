<?php
if (isset($_GET['key'])){
    //busca por key
    include_once "./control_proyecto.php";
    echo(cons($_GET['noSeguimiento']));
}
else if (isset($_GET['noSeguimiento'])){
    //busca por node Segimiento
    include_once "./control_proyecto.php";
    echo(consultaPublicaProyecto($_GET['noSeguimiento']));
}
