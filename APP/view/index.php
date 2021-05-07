<?php
include_once "../model/USUARIO.php";
include_once "../model/CLAVES.php";


  //  $clave = Password::generaClaveUsuario(6);

    $clave = NULL;
    $nombre = "Maricela";
    $app = "Ramirez";
    $apm="Gonzalez";
    $username = "juanito";
    $correo = "algo@gmail.com";
    $pass = new CLAVES();
    $pw = $pass->hash('0000');
    $nivel_acceso = 1;
    $path = "www.google.com";
    $estado = 1;

    $usuarioNuevo = new USUARIO($clave,$nombre,$app,$apm,$username,$correo,$pw,$nivel_acceso,$path,$estado);
    //$resp = $usuarioNuevo->agregaUsuario($usuarioNuevo);
    $resp = $usuarioNuevo->eliminaUsuario(3);
    if ($resp){
        echo "agregamos un nuevo usuario";
    }









    ///ALTER TABLE `usuario` CHANGE `id_empresa_fk` `id_empresa_fk` INT(10) NULL;