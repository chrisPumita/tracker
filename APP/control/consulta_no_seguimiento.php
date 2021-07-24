<?php
if (isset($_POST['noSeguimiento'])) {
    $noSeguimiento = ($_POST['noSeguimiento']);

    include_once "./control_proyecto.php";
    if(veriticaPublicProyect($noSeguimiento)){
        $mje = array(
            "mjeType" => "1",
            "Mensaje" => "?noSeguimiento=".$noSeguimiento
        );
    }
    else{
        $mje = array(
            "mjeType" => "0",
            "Mensaje" => "No existe el no de seguimiento, <br> Porfavor intentalo de nuevo"
        );
    }
    echo json_encode($mje);
}
else{
    $mje = array(
        "mjeType" => "-1",
        "Mensaje" => "Error interno de PHP",
    );
    echo json_encode($mje);
}